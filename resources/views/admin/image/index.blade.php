@extends('layouts.adminwindow')

@section('title', 'Project Image Gallery')



@section('content')



                <h2>{{$project->title}}</h2>
                <form class="form" action="{{route('admin.image.store',['pid'=>$project->id])}}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label>Title</label>

                        <input type="text" class="form-control" name="title" placeholder="Title">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info"  placeholder="Choose Image File" name="image">
                            <span class="input-group-append">

                          </span>
                        </div>
                    </div>

                <button type="submit" class="btn btn-gradient-primary me-2">Save</button>

                </form>
<div class="page-header">
    <h3 class="page-title"></h3>
    <div class="card-body">
        <table class="table table-bordered">
            <h3 class="page-title">Project Image List</h3>
            <thead>
            <tr>
                <th style="width: 10px">Id</th>
                <th>Title</th>
                <th>Image</th>
                <th style="width: 40px">Delete</th>


            </tr>
            </thead>
            <tbody>
            @foreach($images as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>
                        @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 60px">
                        @endif
                    </td>

                    <td><a href="{{route('admin.image.destroy',['pid'=>$project->id,'id'=>$rs->id])}}" class="btn btn-gradient-danger btn-rounded btn-fw"
                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a> </td>


                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection

