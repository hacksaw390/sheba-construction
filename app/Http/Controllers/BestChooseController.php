<?php

namespace App\Http\Controllers;

use App\BestChoose;
use Illuminate\Http\Request;

class BestChooseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(){

        return view('admin.best-choose.store');
    }

    public function create(Request $request){
        $request->validate([
            'title'       => ['required'],
            'description' => ['required'],
            'icon'        => ['required'],
        ]);
        BestChoose::insert([
            'title'     => strtoupper($request->title),
            'des' => $request->description,
            'icon' => $request->icon,
        ]);
        return back()->with('success', 'Update Success');
    }

    public function show(){
        $allData = BestChoose::all();
        return view('admin.best-choose.show',compact('allData'));
    }

    public function edit($id){
        $item = BestChoose::where('id', $id)->first();
        return view('admin.best-choose.edit',compact('item'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'       => ['required'],
            'description' => ['required'],
            'icon'        => ['required'],
        ]);
        BestChoose::findOrFail($id)->update([
            'title'     => strtoupper($request->title),
            'des'       => $request->description,
            'icon'      => $request->icon,
        ]);
        return redirect()->route('manege-best-choose')->with('update', 'Update Success');
    }

    public function delete($id){
        BestChoose::findOrFail($id)->delete();
        return redirect()->route('manege-best-choose')->with('delete', 'Delete Success');
    }
}


























