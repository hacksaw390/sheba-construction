@extends('admin.master')

@section('title')
    Admin | Happy Client
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">All Happy Client</h2>

                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead class="unique-color white-text">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Link</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($happyClient as $item)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td style="width: 40%">{{$item->link}}</td>
                                    <td>
                                        <img width="100" src="{{url($item->image)}}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('edit-happy',$item->id)}}" class="btn btn-info">Edit</a>
                                        <a id="delete" href="{{route('delete-happy',$item->id)}}" class="btn btn-danger">Delete</a>
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
