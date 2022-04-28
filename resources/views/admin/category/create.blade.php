@extends('layouts.adminbase')

@section('title', 'Add Category')



@section('content')

    <div class="page-header">
        <h3 class="page-title">Add Category</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category List</li>
            </ol>
        </nav>
    </div>


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category Elements</h4>

                <form class="form" action="{{route('admin.category.create')}}" method="post">
                    @csrf

                    <div class="form-group">

                        <label for="exampleInputEmail3">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>
                        <input type="text" class="form-control" name="Description" placeholder="Description">
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
                            <option>True</option>
                            <option>False</option>

                        </select>
                    </div>
                   <div  class="card-footer">
                    <button type="submit" class="btn btn-gradient-primary me-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                   </div>
                </form>
            </div>
        </div>
    </div>

@endsection
