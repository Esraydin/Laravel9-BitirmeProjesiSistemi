@extends('layouts.adminbase')

@section('title', 'Show Project: '.$data->title)



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"></h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Show project</li>
            </ol>
        </nav>
    </div>
    <div class ="row mb-2">
        <div class="col-sm-3">
            <a href="{{route('admin.project.edit',['id'=>$data->id])}}" class="btn btn-gradient-info btn-rounded btn-fw" style="width:100px">edit</a>

        </div>


        <div class="col-sm-3">
            <a href="{{route('admin.project.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure?')" class="btn btn-gradient-danger btn-rounded btn-fw" style="width:100px">
                delete</a>
        </div>

    </div>

    <div class="card">
        <div class="card-body">
            <form class="form" action="/admin/project/update/{{$data->id}}" method="post" >
                @csrf

                <div class="card">

                    <h3 class="card-title">Detail Data</h3>

                    <div class="card-body p-0">
                        <table class="table table-striped">

                            <tr>
                                <th style="width: 200px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}

                                </td>


                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$data->title}}</td>

                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>{{$data->keywords}}</td>

                            </tr>
                            <tr>
                                <th>Image</th>

                                <td>
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height:50px">
                                    @endif
                                </td>
                            <tr>
                                <th>Detail</th>
                                <td>
                                {!! $data->detail !!}
                                </td>

                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{$data->status}}</td>

                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>

                            </tr>
                            <tr>
                                <th>Update Date</th>
                                <td>{{$data->updated_at}}</td>

                            </tr>
                        </table>
                    </div>

                </div>
            </form>
        </div>
    </div></div>
@endsection
