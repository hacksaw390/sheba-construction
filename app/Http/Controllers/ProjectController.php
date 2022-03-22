<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use Illuminate\Http\Request;
use Str;
use Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addProject(){
        return view('admin.project.add-project');
    }

    public function store(Request $request){
        $request->validate([
            'project_name'  => 'required',
            'project_type'  => 'required',
            'client'        => 'required',
            'budget'        => 'required',
            'surface'       => 'required',
            'year'          => 'required',
            'des'           => 'required',
            'project_image.*' => ['image', 'mimes:jpg,png,jpeg']
        ]);
        $project_id = Project::insertGetId([
            'project_name'  => $request->project_name,
            'project_type'  => $request->project_type,
            'client'        => $request->client,
            'budget'        => $request->budget,
            'surface'       => $request->surface,
            'year'          => $request->year,
            'des'           => $request->des,
        ]);

            $images = $request->file('project_image');
            foreach ($images as $image){
                $path = time().Str::random(10).'.'.$image->getClientOriginalName();
                Image::make($image)->resize(440, 280)->save(public_path('/demo/project/'.$path));
                ProjectImage::insert([
                    'project_id'    => $project_id,
                    'project_image' => 'demo/project/'.$path,
                ]);
            }
            return back()->with('success', 'inserted');
    }

    public function manegeProject(){
        $projects = Project::orderBy('id','desc')->get();
        return view('admin.project.manege-project',compact('projects'));
    }

    public function editProject($id){
        $project = Project::where('id',$id)->first();
        $images = ProjectImage::where('project_id',$id)->get();
        return view('admin.project.edit-project',compact('project','images'));
    }

    public function updateProject(Request $request, $id){
        $request->validate([
            'project_name'  => 'required',
            'project_type'  => 'required',
            'client'        => 'required',
            'budget'        => 'required',
            'surface'       => 'required',
            'year'          => 'required',
            'des'           => 'required',
            'project_image.*' => ['image', 'mimes:jpg,png,jpeg']
        ]);
        $project_id = Project::findOrFail($id)->update([
            'project_name'  => $request->project_name,
            'project_type'  => $request->project_type,
            'client'        => $request->client,
            'budget'        => $request->budget,
            'surface'       => $request->surface,
            'year'          => $request->year,
            'des'           => $request->des,
        ]);

        if ($request->hasFile('project_image')){
            $a = ProjectImage::where('project_id', $id)->first();
            $images = $request->file('project_image');
            foreach ($images as $image){
                $path = time().Str::random(10).'.'.$image->getClientOriginalName();
                Image::make($image)->resize(370, 245)->save(public_path('/demo/project/'.$path));
                ProjectImage::insert([
                    'project_id'    => $a->project_id,
                    'project_image' => 'demo/project/'.$path,
                ]);
            }
        }


        return redirect('manege/project')->with('update', 'Update Success');
    }

    public function deleteProjectImage($id){
        $item = ProjectImage::findOrFail($id);
        unlink($item->project_image);
        $item->delete();
        return back()->with('delete', 'Slider Deleted Successfully !!!');
    }

    public function deleteFullProject($id){
        $images = ProjectImage::where('project_id',$id)->get();
        foreach ($images as $image){
            unlink($image->project_image);

            ProjectImage::findOrFail($image->id)->delete();
        }
        Project::findOrFail($id)->delete();
        return back()->with('delete','Deleted Success');
    }


}
