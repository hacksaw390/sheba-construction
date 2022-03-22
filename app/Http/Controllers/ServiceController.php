<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('admin.service.add-service');
    }

    public function store(Request $request){
        $request->validate([
            'title'       => ['required'],
            'description' => ['required'],
            'icon'        => ['required'],
        ]);
        Service::insert([
            'title'     => strtoupper($request->title),
            'des' => $request->description,
            'icon' => $request->icon,
        ]);
        return back()->with('success', 'Update Success');

    }

    public function show(){
        $allData = Service::all();
        return view('admin.service.show-service',compact('allData'));
    }

    public function edit($id){
        $item = Service::where('id', $id)->first();
        return view('admin.service.edit-service',compact('item'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'       => ['required'],
            'description' => ['required'],
            'icon'        => ['required'],
        ]);
        Service::findOrFail($id)->update([
            'title'     => strtoupper($request->title),
            'des'       => $request->description,
            'icon'      => $request->icon,
        ]);
        return redirect()->route('manege-service')->with('update', 'Update Success');
    }

    public function delete($id){
        Service::findOrFail($id)->delete();
        return back()->with('delete', 'Deleted');
    }
}

