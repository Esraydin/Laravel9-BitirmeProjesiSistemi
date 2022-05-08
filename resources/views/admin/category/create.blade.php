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

                <form class="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group col-xs-12">

                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <input type="file" class="custom-file-input" name="image">
                                <div class="input-group-append">

                         </div>
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

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
