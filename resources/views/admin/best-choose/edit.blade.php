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
                        {{--@if (session('success'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--<h2>{{ session('success') }}</h2>--}}
                            {{--</div>--}}
                    {{--@endif--}}
                    <!-- Default form login -->
                        <form action="{{route('update-best-choose',$item->id)}}" method="post" class="border border-light p-5">
                            @csrf

                            <p class="h4 mb-4 text-center">Add Best Choose Item</p>

                            <!-- title -->

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text"  name="title" value="{{$item->title}}" id="title" placeholder="Title" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Title Description</label>
                                <textarea class="form-control" name="description" placeholder="Description" id="exampleFormControlTextarea3" rows="7">{{$item->des}}</textarea>
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('description')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            {{--icon--}}
                            <div class="form-group">
                                <label for="title"><strong>Icon </strong><span>(Choose in Font Awesome - <a
                                                href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome Link</a>)</span></label>
                                <input type="text" name="icon" value="{{$item->icon}}" id="title" placeholder="Choose Font Awesome Icon" class="form-control mb-4">
                            </div>

                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('icon')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Submit</button>
                            <a class="btn btn-success btn-block" href="{{route('manege-best-choose')}}">Back</a>

                        </form>
                        <!-- Default form login -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
