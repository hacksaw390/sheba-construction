<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Str;
use Image;

class LogoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logo(){
        $logo = Logo::all()->first();
        return view('admin.logo.logo',compact('logo'));
    }

    public function logoUpdate(Request $request, $id){
        $request->validate([
            'logo' => ['required','image', 'mimes:jpg,png,jpeg'],
        ]);
        $logo = Logo::findOrFail($id)->logo;

        $image = $request->file('logo');
        $path = time().Str::random(10).'.'.$image->getClientOriginalName();
        Image::make($image)->save(public_path('/demo/logo/'.$path));
//        Image::make($image)->resize(186, 39)->save(public_path('/demo/'.$path));


        if ($request->hasFile('logo')){
            if (file_exists($logo)){

            unlink($logo);
            }
            Logo::findOrFail($id)->update([
                'logo' => 'demo/logo/'.$path,
            ]);
        }
        return back()->with('update', 'update success');
    }
}
