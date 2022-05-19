@extends('layouts.adminbase')

@section('title', 'Project List')



@section('content')


    <div class="page-header">
        <h3 class="page-title"></h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project List</li>
            </ol>
        </nav>

    </div>
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.project.create')}}" class="btn btn-gradient-info btn-rounded btn-fw">Add Project</a>
            </div>


        <div class="card-body">
            <table class="table table-bordered">
                <h3 class="page-title">Project List</h3>
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Detail</th>
                    <th>Video Link</th>
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
                    <td>
                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}

                    </td>

                    <td>{{$rs->title}}</td>


                    <td>
                        @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                        @endif
                    </td>
                    <td>{{$rs->detail}}</td>

                    <td>{{$rs->videolink}}</td>
                    <td>{{$rs->status}}</td>
                    <td><a href="{{route('admin.project.edit',['id'=>$rs->id])}}" class="gradient-info btn-rounded btn-fw">Edit</a> </td>
                    <td><a href="{{route('admin.project.destroy',['id'=>$rs->id])}}" class="gradient-danger btn-rounded btn-fw"
                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a> </td>
                    <td><a href="{{route('admin.project.show',['id'=>$rs->id])}}" class="gradient-success btn-rounded btn-fw">Show</a> </td>

                </tr>

                @endforeach

                </tbody>
            </table>
        </div>

    </div>


@endsection
