@extends('admin.master')

@section('title')
    Admin | Manege Item
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <h2>{{ session('success') }}</h2>
                            </div>
                        @endif
                        <h2 class="text-center">All Service</h2>

                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead class="unique-color white-text">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($allData as $item)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->icon}}</td>
                                    <td>
                                        <a href="{{route('edit-service-item',$item->id)}}" class="btn btn-info">Edit</a>
                                        <a id="delete" href="{{route('delete-service-item',$item->id)}}" class="btn btn-danger">Delete</a>
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
