@extends('admin.master')

@section('title')
    Admin | Testimonial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                    <!-- Default form login -->
                        <form action="{{route('update-testi',$item->id)}}" method="post" class="border border-light p-5">
                            @csrf

                            <p class="h4 mb-4 text-center">Edit Testimonial</p>

                            <!-- title -->

                            <div class="form-group">
                                <label for="title">Client Name</label>
                                <input type="text"  name="client_name" value="{{$item->name}}" id="title" placeholder="Title" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Client Description</label>
                                <textarea class="form-control" name="description" placeholder="Description" id="exampleFormControlTextarea3" rows="7">{{$item->des}}</textarea>
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('description')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Update</button>
                            <a class="btn btn-success btn-block" href="{{route('manege-testi')}}">Back</a>

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
