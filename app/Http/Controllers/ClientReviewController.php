<?php

namespace App\Http\Controllers;

use App\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('admin.testimonial.add');
    }

    public function store(Request $request){
        $request->validate([
            'client_name'   => ['required'],
            'description'   => ['required'],
        ]);
        ClientReview::insert([
            'name'    => strtoupper($request->client_name),
            'des'     => $request->description,
        ]);
        return back()->with('success', 'Update Success');
    }

    public function show(){
        $allData = ClientReview::all();
        return view('admin.testimonial.show',compact('allData'));
    }

    public function edit($id){
        $item = ClientReview::where('id', $id)->first();
        return view('admin.testimonial.edit',compact('item'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'client_name'   => ['required'],
            'description'   => ['required'],
        ]);
        ClientReview::findOrFail($id)->update([
            'name'    => strtoupper($request->client_name),
            'des'     => $request->description,
        ]);
        return redirect()->route('manege-testi')->with('update', 'updated');
    }

    public function delete($id){
        ClientReview::where('id', $id)->delete();
        return redirect()->route('manege-testi')->with('delete', 'updated');
    }
}
