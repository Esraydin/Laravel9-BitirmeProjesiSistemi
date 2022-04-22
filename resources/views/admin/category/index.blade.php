@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')
    <h1>
        Category List
    </h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category List</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Title</th>
                    <th>Keywords</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th style="width: 40px">Edit</th>
                    <th style="width: 40px">Delete</th>
                    <th style="width: 40px">Show</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->keywords}}</td>
                    <td>{{$rs->description}}</td>
                    <td>{{$rs->image}}</td>
                    <td>{{$rs->status}}</td>
                    <td><a href="/admin/category/edit {{$rs->id}}" class="btn btn-gradient-info btn-rounded btn-fw">Edit</a> </td>
                    <td><a href="/admin/category/delete {{$rs->id}}" class="btn btn-gradient-danger btn-rounded btn-fw">Delete</a> </td>
                    <td><a href="/admin/category/show {{$rs->id}}" class="btn btn-gradient-success btn-rounded btn-fw">Show</a> </td>



                </tr>

                @endforeach

                </tbody>
            </table>
        </div>

    </div>


@endsection
