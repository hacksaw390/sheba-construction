<?php

namespace App\Http\Controllers;

use App\Welcome;
use Illuminate\Http\Request;
use Str;
use Image;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function welcome(){
       $welcome = Welcome::all()->first();

        return view('admin.welcome.welcome',compact('welcome'));
    }

    public function updateWelcome(Request $request,$id){
        $request->validate([
            'title'=> 'required',
            'title_des'=> 'required',
            'title_item'=> 'required',
        ]);


        $welcome = Welcome::findOrFail($id)->image;

        if ($request->hasFile('welcome_image')){
            $image = $request->file('welcome_image');
            $path = time().Str::random(10).'.'.$image->getClientOriginalName();
            Image::make($image)->resize(1280, 720)->save(public_path('/demo/'.$path));
            if (file_exists($welcome)){
                unlink($welcome);
            }
            Welcome::findOrFail($id)->update([
                'image' => 'demo/'.$path
            ]);
        }
        Welcome::findOrFail($id)->update([
            'title'         => strtoupper($request->title),
            'title_des'     => $request->title_des,
            'title_item'    => $request->title_item,
        ]);

        return back()->with('update', 'Slider Update Successfully !!!');
    }
}
