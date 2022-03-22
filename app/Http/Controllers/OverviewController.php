<?php

namespace App\Http\Controllers;

use App\Overview;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    Focus
    public function focus(){
        $focus = Overview::where('title_status', 'focus')->first();
        return view('admin.overview.focus',compact('focus'));
    }

    public function updateFocus(Request $request, $id){
        $request->validate([
            'focus_des' => ['required'],
            'item'        => ['required'],
        ]);
        Overview::findOrFail($id)->update([
            'des'       => $request->focus_des,
            'item'      => $request->item,
        ]);
        return back()->with('update', 'Update Success');
    }

//    Dedicated

    public function dedicated(){
        $dedicated = Overview::where('title_status', 'dedicated')->first();
        return view('admin.overview.dedicated',compact('dedicated'));
    }

    public function updateDedicated(Request $request, $id){
        $request->validate([
            'focus_des' => ['required'],
            'item'        => ['required'],
        ]);
        Overview::findOrFail($id)->update([
            'des'       => $request->focus_des,
            'item'      => $request->item,
        ]);
        return back()->with('update', 'Update Success');
    }

//    Committed

    public function committed(){
        $committed = Overview::where('title_status', 'committed')->first();
        return view('admin.overview.committed',compact('committed'));
    }

    public function updateCommitted(Request $request, $id){
        $request->validate([
            'focus_des' => ['required'],
            'item'        => ['required'],
        ]);
        Overview::findOrFail($id)->update([
            'des'       => $request->focus_des,
            'item'      => $request->item,
        ]);
        return back()->with('update', 'Update Success');
    }


}
