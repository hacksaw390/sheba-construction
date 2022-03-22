@extends('admin.master')

@section('title')
    Admin | FAQ
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <!-- Default form login -->
                        <form action="{{route('update-faq',$item->id)}}" method="post" class="border border-light p-5">
                            @csrf

                            <p class="h4 mb-4 text-center">Edit FAQ</p>

                            <!-- title -->

                            <div class="form-group">
                                <label for="title">Question</label>
                                <input type="text"  name="question" value="{{$item->question}}" id="title" placeholder="Question" class="form-control mb-4">
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('question')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Answer</label>
                                <textarea class="form-control" name="answer" placeholder="Answer" id="exampleFormControlTextarea3" rows="7">{{$item->answer}}</textarea>
                            </div>
                            <div class="form-group mb-0 mt-3 text-danger">
                                @error('answer')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Update</button>
                            <a class="btn btn-success btn-block" href="{{route('show-faq')}}">Back</a>

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
