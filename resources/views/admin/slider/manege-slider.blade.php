@extends('admin.master')

@section('title')
Admin | Manege Slider
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
                    <h2 class="text-center">All Sliders</h2>

                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead class="unique-color white-text">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach($sliders as $slider)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td style="width: 40%">{{$slider->slider_title}}</td>
                                <td>
                                    <img width="100" src="{{url($slider->slider_image)}}" alt="">
                                </td>
                                <td>
                                    <a href="{{route('edit-slider',$slider->id)}}" class="btn btn-info">Edit</a>
                                    <a id="delete" href="{{route('delete-slider',$slider->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
