@extends('admin.master')

@section('title')
    Admin | Manege Slider
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">All Project</h2>

                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead class="unique-color white-text">
                            <tr>
                                <th style="width: 5%" scope="col">ID</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Project Image</th>
                                <th style="width: 30%" scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($projects as $project)
                                @php
                                $images = \App\ProjectImage::where('project_id',$project->id)->get();
                                @endphp
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td style="width: 30%">{{$project->project_name}}</td>
                                    <td>
                                        @foreach($images as $image)
                                        <img width="50" src="{{url($image->project_image)}}" alt="">
                                            @endforeach
                                    </td>
                                    <td>
                                        <a href="{{route('edit-project',$project->id)}}" class="btn btn-info btn-sm">Edit</a>
                                        <a id="delete" href="{{route('delete-full-project',$project->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
