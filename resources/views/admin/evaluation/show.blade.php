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
            <div class="row mb-2">


                <div class="col-sm-3">
                    <a href="{{route('admin.comment.destroy',['id'=>$data->id])}}"
                       onclick="return confirm('Deleting !! Are you sure?')"
                       class="btn btn-gradient-danger btn-rounded btn-fw" style="width:100px">
                        delete</a>
                </div>

            </div>

            <div class="card">
                <div class="card-body">


                    <div class="card">

                        <h3 class="card-title">Evaluation</h3>

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
                                    <th>User</th>
                                    <td>{{$data->user->name}}</td>

                                </tr>
                                <form action="{{route('admin.evaluation.update',['id'=>$datas->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <tr>
                                        <th>GRADE</th>

                                        <td>
                                            <input type="number" class="form-control" name="grade"
                                                   value="{{$datas->grade}}">

                                        </td>
                                    <tr>
                                        <th>NOTE</th>
                                        <td>
                                <textarea cols="100" name="note">{{$datas->note}}

                                </textarea>
                                        </td>

                                    <tr>
                                        <th>Status</th>
                                        <td>

                                            <select class="form-control" name="status">
                                                <option selected>{{$datas->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                            </br>

                                        </td>
                                    <tr>
                                        <th>Created Date</th>
                                        <td>{{$data->created_at}}</td>

                                    </tr>
                                    <tr>
                                        <th>Update Date</th>
                                        <td>{{$data->updated_at}}</td>

                                    </tr>

                                    <tr>
                                        <th>
                                            <button type="submit" class="btn btn-success mb-3">Update</button>
                                        </th>
                                    </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
