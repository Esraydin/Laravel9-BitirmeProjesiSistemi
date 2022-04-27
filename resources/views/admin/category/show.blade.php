@extends('layouts.adminbase')

@section('title', 'Show Category: '.$data->title)



@section('content')
    <h1>
    </h1>
       <div class ="row mb-2">
           <div class="col-sm-3">
               <a href="/admin/category/edit/{{$data->id}}" class="btn btn-gradient-info btn-rounded btn-fw" style="width:100px">edit</a>

           </div>


        <div class="col-sm-3">
            <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting !! Are you sure?')" class="btn btn-gradient-danger btn-rounded btn-fw" style="width:100px">
                delete</a>
        </div>
       </div>

       <div class="card">
            <div class="card-body">
            <form class="form" action="/admin/category/update/{{$data->id}}" method="post">
                    @csrf

                    <div class="card">

                            <h3 class="card-title">Detail Data</h3>

                        <div class="card-body p-0">
                            <table class="table table-striped">

                                <tr>
                                    <th style="width: 70px">Id</th>
                                    <td>{{$data->id}}</td>
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
                                    <td></td>

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
        </div>


@endsection
