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
                        <form action="{{route('update-service',$bestService->id)}}" method="post" class="border border-light p-5">
                            @csrf

                            <p class="h4 mb-4 text-center">Update Service Title</p>

                            <!-- title -->

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$bestService->title}}" id="title" class="form-control mb-4">
                            </div>

                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Title Description</label>
                                <textarea class="form-control" name="title_des" id="exampleFormControlTextarea3" rows="7">{{$bestService->title_des}}</textarea>
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Update</button>

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
