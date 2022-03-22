<?php

namespace App\Http\Controllers;

use App\TopHeader;
use Illuminate\Http\Request;

class TopHeaderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function topHeader(){
        $header = TopHeader::all()->first();
        return view('admin.header.top-header',compact('header'));
    }

    public function updateTopHeader(Request $request, $id){
        $request->validate([
            'address'              => ['required'],
            'phone_number' => ['required'],
            'working_days' => ['required'],
        ]);
        TopHeader::findOrFail($id)->update([
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'working_days' => $request->working_days,
        ]);
        return back()->with('update', 'Update Success');
    }
}
