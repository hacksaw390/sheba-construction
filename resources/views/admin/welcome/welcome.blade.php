@extends('admin.master')

@section('title')
    Admin | Title
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                    <!-- Default form login -->
                        <form action="{{route('update-welcome',$welcome->id)}}" method="post" class="border border-light p-5" enctype="multipart/form-data">
                            @csrf

                            <p class="h4 mb-4 text-center">Update Welcome Section</p>

                            <!-- title -->

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text"  name="title" value="{{$welcome->title}}" id="title" placeholder="Title" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Title Description</label>
                                <textarea class="form-control" name="title_des" placeholder="Description" id="exampleFormControlTextarea3" rows="7">{{$welcome->title_des}}</textarea>
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title_des')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- title item -->

                            <div class="form-group">
                                <label for="title">Title Item</label>
                                <input type="text"  name="title_item" value="{{$welcome->title_item}}" id="title" placeholder="Title Item" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title_item')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            {{--welcome image--}}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload (1280*720)</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"  onchange="loadfile(event)"  name="welcome_image" class="custom-file-input" id="slider_image"
                                           aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="slider_image">Update Slider Image</label>
                                </div>
                            </div>
                            <img src="{{$welcome->image}}" id="preimage" width="100%" height="200" alt="">
                            <div class="form-group text-danger">
                                @error('slider_image')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Submit</button>

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
