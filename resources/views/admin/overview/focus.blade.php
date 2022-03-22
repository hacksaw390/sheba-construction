@extends('admin.master')

@section('title')
    Admin | Overview
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <!-- Default form login -->
                        <form action="{{route('update-focus',$focus->id)}}" method="post" class="border border-light p-5" enctype="multipart/form-data">
                            @csrf

                            <p class="h4 mb-4 text-center">Update Focus</p>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Focus Description</label>
                                <textarea class="form-control" name="focus_des" placeholder="Description" id="exampleFormControlTextarea3" rows="7">{{$focus->des}}</textarea>
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title_des')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- title item -->

                            <div class="form-group">
                                <label for="title">Focus Item <small> - (Item Divided By ",") </small></label>
                                <input type="text"  name="item" value="{{$focus->item}}" id="title" placeholder="Title Item" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('title_item')
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
