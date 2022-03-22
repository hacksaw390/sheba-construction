@extends('admin.master')

@section('title')
Admin | Top Header
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-body">
                    <!-- Default form login -->
                    <form action="{{route('update-top-header',$header->id)}}" method="post" class="text-center border border-light p-5">
                        @csrf

                        <p class="h4 mb-4">Update Top Header Content</p>

                        <!-- address -->
                        <input type="text" name="address" value="{{$header->address}}" id="defaultLoginFormEmail" class="form-control mb-4">

                        <div class="form-group mb-0 mt-3 text-danger">
                            @error('address')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <!-- phone number -->
                        <input type="text" name="phone_number" value="{{$header->phone_number}}" id="defaultLoginFormEmail" class="form-control mb-4">
                        <div class="form-group mb-0 mt-3 text-danger">
                            @error('phone_number')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <!-- working days -->
                        <input type="text" name="working_days" value="{{$header->working_days}}" id="defaultLoginFormEmail" class="form-control mb-4">
                        <div class="form-group mb-0 mt-3 text-danger">
                            @error('working_days')
                            <strong>{{ $message }}</strong>
                            @enderror
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
