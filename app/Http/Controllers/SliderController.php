<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Str;
use Image;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(){
        return view('admin.slider.add-slider');
    }

    public function create(Request $request){
        $request->validate([
            'slider_title'=> 'required',
            'slider_sub_title'=> 'required',
            'button_text'=> 'required',
            'slider_image' => ['required','image', 'mimes:jpg,png,jpeg'],
        ]);

        if($request->hasFile('slider_image')){

            $image = $request->file('slider_image');
            $path = time().Str::random(10).'.'.$image->getClientOriginalName();
            Image::make($image)->resize(1280, 720)->save(public_path('/demo/slider/'.$path));

        }
        Slider::insert([
            'slider_title'      => strtoupper($request->slider_title),
            'slider_sub_title'  => strtoupper($request->slider_sub_title),
            'button_text'       => strtoupper($request->button_text),
            'slider_image'     => 'demo/slider/'.$path,
        ]);
        return back()->with('success', 'Slider Add Successfully !!!');
    }

    public function show(){
        $sliders = Slider::orderBy('id','desc')->get();
        return view('admin.slider.manege-slider',compact('sliders'));
    }

    public function edit($id){
        $slider = Slider::where('id', $id)->first();
        return view('admin.slider.edit-slider',compact('slider'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'slider_title'=> 'required',
            'slider_sub_title'=> 'required',
            'button_text'=> 'required',
//            'slider_image' => ['required','image', 'mimes:jpg,png,jpeg'],
        ]);


            $slider = Slider::findOrFail($id)->slider_image;


        if ($request->hasFile('slider_image')){
            $image = $request->file('slider_image');
            $path = time().Str::random(10).'.'.$image->getClientOriginalName();
            Image::make($image)->resize(1280, 720)->save(public_path('/demo/slider/'.$path));
            if (file_exists($slider)){

                unlink($slider);
            }
            Slider::findOrFail($id)->update([
                'slider_image'     => 'demo/slider/'.$path,
            ]);
        }
            Slider::findOrFail($id)->update([
                'slider_title'      => strtoupper($request->slider_title),
                'slider_sub_title'  => strtoupper($request->slider_sub_title),
                'button_text'       => strtoupper($request->button_text),
            ]);

            return redirect('manege/slider')->with('update', 'Slider Update Successfully !!!');
    }

    public function delete($id){
        $item = Slider::findOrFail($id);
        unlink($item->slider_image);
        $item->delete();
        return redirect('manege/slider')->with('delete', 'Slider Deleted Successfully !!!');
    }


}
