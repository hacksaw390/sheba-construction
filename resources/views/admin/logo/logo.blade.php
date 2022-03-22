@extends('admin.master')

@section('title')
Admin | Logo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <!-- Default form login -->
                        <form action="{{route('update-logo',$logo->id)}}" method="post" class="text-center border border-light p-5" enctype="multipart/form-data">
                            @csrf

                            <p class="h4 mb-4">Update Header Logo</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload (186*39)</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="logo" class="custom-file-input" id="inputGroupFile01"
                                           aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Update Header Logo</label>
                                </div>
                            </div>
                            <br>
                                    <img width="200" src="{{$logo->logo}}" alt="">
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
