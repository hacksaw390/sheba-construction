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
                        <form action="{{route('testi-store')}}" method="post" class="border border-light p-5">
                            @csrf

                            <p class="h4 mb-4 text-center">Add Client Testimonial</p>

                            <!-- title -->

                            <div class="form-group">
                                <label for="title">Client Name</label>
                                <input type="text"  name="client_name" value="{{old('name')}}" id="title" placeholder="Client Name" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('name')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Client Description</label>
                                <textarea class="form-control" name="description" placeholder="Description" id="exampleFormControlTextarea3" rows="7">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('description')
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
@endsection

@section('js')

@endsection
