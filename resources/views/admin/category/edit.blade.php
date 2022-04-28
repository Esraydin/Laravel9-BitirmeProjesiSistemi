@extends('layouts.adminbase')

@section('title', 'Edit Category: '.$data->title)



@section('content')

    <div class="page-header">
        <h3 class="page-title">Edit Category: {{$data->title}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
            </ol>
        </nav>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category Elements</h4>

                <form class="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post">
                    @csrf

                    <div class="form-group">

                        <label for="exampleInputEmail3">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Keywords</label>
                        <input type="text" class="form-control" name="keywords"  value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>

                            <input type="text" class="form-control" name="description"  value="{{$data->description}}">

                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control form-control-lg " name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Update Data</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>

@endsection
