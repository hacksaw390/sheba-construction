<?php

namespace App\Http\Controllers;

use App\HappyClient;
use Illuminate\Http\Request;
use Str;
use Image;

class HappyClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('admin.happy-client.create');
    }

    public function store(Request $request){
        $request->validate([
            'link'  => 'required',
            'image' => ['required','image', 'mimes:jpg,png,jpeg'],
        ]);

        if($request->hasFile('image')){

            $image = $request->file('image');
            $path = time().Str::random(10).'.'.$image->getClientOriginalName();
            Image::make($image)->resize(228, 150)->save(public_path('/demo/client/'.$path));

        }
        HappyClient::insert([
            'link'      => $request->link,
            'image'     => 'demo/client/'.$path,
        ]);
        return back()->with('success', 'Slider Add Successfully !!!');
    }

    public function show(){
        $happyClient = HappyClient::orderBy('id','desc')->get();
        return view('admin.happy-client.show',compact('happyClient'));
    }

    public function edit($id){
        $happyClient = HappyClient::where('id', $id)->first();
        return view('admin.happy-client.edit',compact('happyClient'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'link'  => 'required',
        ]);


        $oldImage = HappyClient::findOrFail($id)->image;


        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path = time().Str::random(10).'.'.$image->getClientOriginalName();
            Image::make($image)->resize(228, 150)->save(public_path('/demo/client/'.$path));
            if (file_exists($oldImage)){

                unlink($oldImage);
            }
            HappyClient::findOrFail($id)->update([
                'image'     => 'demo/client/'.$path,
            ]);
        }
        HappyClient::findOrFail($id)->update([
            'link'      => $request->link
        ]);

        return redirect('show/happy')->with('update', 'Slider Update Successfully !!!');
    }

    public function delete($id){
        $item = HappyClient::findOrFail($id);
        unlink($item->image);
        $item->delete();
        return back()->with('delete', 'Slider Deleted Successfully !!!');
    }
}
