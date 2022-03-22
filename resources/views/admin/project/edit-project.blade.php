@extends('admin.master')

@section('title')
    Admin | Edit Project
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                            <p class="h4 mb-4 text-center">Edit Project</p>
                        <hr>
                        <!-- Default form login -->
                        <form action="{{route('update-project',$project->id)}}" method="post" class="border border-light p-5"
                              enctype="multipart/form-data">
                            @csrf
                            <!-- project name -->
                            <div class="form-group">
                                <label for="title">Project Name</label>
                                <input type="text"  name="project_name" value="{{$project->project_name}}" id="title" placeholder="Project Name" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('project_name')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- project Type -->
                            <div class="form-group">
                                <label for="Type">Project Type</label>
                                <input type="text"  name="project_type" value="{{$project->project_type}}" id="Type" placeholder="Project Type" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('project_type')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- Client title -->
                            <div class="form-group">
                                <label for="client">Client</label>
                                <input type="text"  name="client" value="{{$project->client}}" id="client" placeholder="Client" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('client')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- project Budget -->
                            <div class="form-group">
                                <label for="Budget">Project Budget</label>
                                <input type="text"  name="budget" value="{{$project->budget}}" id="Budget" placeholder="Project Budget" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('budget')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- project Surface Area -->
                            <div class="form-group">
                                <label for="Surface">Project Surface Area</label>
                                <input type="text"  name="surface" value="{{$project->surface}}" id="Surface" placeholder="Project Surface Area" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('surface')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- project Year completed -->
                            <div class="form-group">
                                <label for="Year">Project Year completed</label>
                                <input type="text"  name="year" value="{{$project->year}}" id="Year" placeholder="Project Year completed" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('year')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Project Description</label>
                                <textarea class="form-control" name="des" placeholder="Description" id="exampleFormControlTextarea3" rows="7">{{$project->des}}</textarea>
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('des')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            {{--project --}}

                                <label class=" pt-3" for="">Project New Image :</label>

                                <div class="user-image mb-3 text-center">
                                    <div  class="imgPreview"> </div>
                                </div>

                                <div class="custom-file">
                                    <input type="file" name="project_image[]" class="custom-file-input" id="images" multiple="multiple">
                                    <label class="custom-file-label" for="images">Choose image</label>
                                </div>

                                    <label class=" pt-3" for="">Project Active Image :</label>
                                <div class="d-flex justify-content-center form-group">
                                    @foreach($images as $image)
                                        <div>
                                            <img class="pl-2" src="{{url($image->project_image)}}" id="preimage" width="150" alt=""><br>

                                            <div class="d-flex justify-content-center">
                                            <a id="delete" class="btn-sm btn-danger" href="{{route('delete-project-image',$image->id)}}">delete</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>
                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Update</button>

                        </form>
                        <!-- Default form login -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function loadfile(event) {
            var output=document.getElementById('preimage');
            output.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection

@section('js')

@endsection
