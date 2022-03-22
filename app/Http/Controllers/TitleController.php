<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    YOUR BEST CHOOSE

    public function choose(){
        $choose = Title::where('title_status', 'choose')->first();
        return view('admin.title.choose',compact('choose'));
    }
    public function updateChoose(Request $request, $id){
        $request->validate([
            'title'              => ['required'],
        ]);
        Title::findOrFail($id)->update([
            'title'     => strtoupper($request->title),
            'title_des' => $request->title_des,
        ]);
        return back()->with('update', 'Update Success');
    }
//====================================================
// Best Service

    public function bestService(){
        $bestService = Title::where('title_status', 'best-service')->first();
        return view('admin.title.best-service',compact('bestService'));
    }

    public function updateService(Request $request, $id){
        $request->validate([
            'title'              => ['required'],
        ]);
        Title::findOrFail($id)->update([
            'title'     => strtoupper($request->title),
            'title_des' => $request->title_des,
        ]);
        return back()->with('update', 'Update Success');
    }
//=======================================
// All service


    public function allService(){
        $allService = Title::where('title_status', 'all-service')->first();
        return view('admin.title.all-service',compact('allService'));
    }

    public function updateAllService(Request $request, $id){
        $request->validate([
            'title'              => ['required'],
        ]);
        Title::findOrFail($id)->update([
            'title'     => strtoupper($request->title),
            'title_des' => $request->title_des,
        ]);
        return back()->with('update', 'Update Success');
    }
}
