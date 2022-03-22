@extends('admin.master')

@section('title')
Admin | Add Slider
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        {{--@if (session('success'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--<h2>{{ session('success') }}</h2>--}}
                            {{--</div>--}}
                    {{--@endif--}}
                        <!-- Default form login -->
                        <form action="{{route('store-slider')}}" method="post" class="border border-light p-5"
                        enctype="multipart/form-data">
                            @csrf
                            <p class="h4 mb-4 text-center">Add Slider</p>

                            <!-- slider title -->
                            <div class="md-form mt-0">
                                <input type="text" value="{{old('slider_title')}}" name="slider_title" id="slider_title" class="form-control">
                                <label for="slider_title">Add Slider Title</label>
                            </div>
                            <div class="form-group mb-3 text-danger">
                                @error('slider_title')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            {{--slider sub title--}}
                            <div class="md-form mt-0">
                                <input type="text" value="{{old('slider_sub_title')}}" name="slider_sub_title" id="slider_sub_title" class="form-control">
                                <label for="slider_sub_title">Add Slider Sub-Title</label>
                            </div>
                            <div class="form-group mb-3  text-danger">
                                @error('slider_sub_title')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            {{--slider button text--}}
                            <div class="md-form mt-0">
                                <input type="text" value="{{old('button_text')}}" name="button_text" id="button_text" class="form-control">
                                <label for="button_text">Add Slider Button Text</label>
                            </div>
                            <div class="form-group text-danger">
                                @error('button_text')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            {{--slider image--}}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload (1280*720)</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"  onchange="loadfile(event)"  name="slider_image" class="custom-file-input" id="slider_image"
                                           aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="slider_image">Update Slider Image</label>
                                </div>
                            </div>
                                <img src="" id="preimage" width="100%" height="200" alt="">
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
