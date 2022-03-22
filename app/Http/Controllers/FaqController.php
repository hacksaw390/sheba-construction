<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('admin.faq.create');
    }

    public function store(Request $request){
        $request->validate([
            'question'  => ['required'],
            'answer'    => ['required']
        ]);
        Faq::insert([
            'question'  => strtoupper($request->question),
            'answer'    => $request->answer,
        ]);
        return back()->with('success', 'insert Success');
    }

    public function show(){
        $allData = Faq::orderBy('id','desc')->get();
        return view('admin.faq.show',compact('allData'));
    }

    public function edit($id){
        $item = Faq::where('id', $id)->first();
        return view('admin.faq.edit',compact('item'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'question'  => ['required'],
            'answer'    => ['required']
        ]);
        Faq::findOrFail($id)->update([
            'question'  => strtoupper($request->question),
            'answer'    => $request->answer,
        ]);
        return redirect()->route('show-faq')->with('update', 'Update Success');
    }

    public function delete($id){
        Faq::findOrFail($id)->delete();
        return back()->with('delete', 'Deleted');
    }
}
