<?php

namespace App\Http\Controllers;

use App\BestChoose;
use App\ClientReview;
use App\ContactMessage;
use App\Faq;
use App\HappyClient;
use App\Mail\ContactMail;
use App\Overview;
use App\Project;
use App\ProjectImage;
use App\Service;
use App\Slider;
use App\Title;
use App\TopHeader;
use App\User;
use App\Welcome;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConstructionController extends Controller
{
    public function index(){
        return view('frontend.home.home',[
            'sliders'           => Slider::all(),
            'bestChooseTitle'   => Title::where('title_status','choose')->first(),
            'bestService'       => Title::where('title_status','best-service')->first(),
            'allService'        => Title::where('title_status','all-service')->first(),
            'bestChooseItems'   => BestChoose::take(3)->get(),
            'welcome'           => Welcome::all()->first(),
            'heppyClient'       => HappyClient::all(),
            'projects'          => Project::all(),
            'services'          => Service::take(6)->get(),
            'testimonials'      => ClientReview::latest()->get(),
            'focus'             => Overview::where('title_status', 'focus')->first(),
            'dedicated'         => Overview::where('title_status', 'dedicated')->first(),
            'committed'         => Overview::where('title_status', 'committed')->first(),
            'faqs'              => Faq::all(),

        ]);
    }

    public function about(){
        return view('frontend.about.about',[
            'bestChooseItems'   => BestChoose::take(3)->get(),
        ]);
    }

    public function services(){
        return view('frontend.services.services',[
            'bestService'       => Title::where('title_status','best-service')->first(),
            'services'          => Service::take(6)->get(),
        ]);
    }

    public function project(){
        return view('frontend.project.project',[
            'projects'          => Project::take(9)->get(),
        ]);
    }

    public function contact(){
        return view('frontend.contact.contact');
    }

    public function projectDetails($id){
        $project = Project::where('id',$id)->first();
        $images = ProjectImage::where('project_id',$id)->get();
        $relatedProject = Project::where('project_type',$project->project_type)->get();

        return view('frontend.project.project-details',
            compact('project','images','relatedProject'));
    }

    public function contactMail(Request $request){
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        ContactMessage::insert([
            'name'     => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'subject'     => $request->subject,
            'message'     => $request->message,
            'created_at' =>Carbon::now()
        ]);



        Mail::to($request->email)->send(new ContactMail($request));
        return back()->with('mail','mail send success');
    }

}
