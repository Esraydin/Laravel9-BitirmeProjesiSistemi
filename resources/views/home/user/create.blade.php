@extends('layouts.frontbase')

@section('title', 'Add Project')
@section('head')

@endsection


@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Elements</h4>

                        <form class="form" action="{{route('userpanel.store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="form-control select2" name="category_id" style="">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($data as $rs)
                                        <option
                                            value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>

                            </div>
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
                                <label for="exampleInputEmail3">Detail</label>
                                <textarea id="summernote" name="detail"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled=""
                                           placeholder="Choose Image File">
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

                            <button type="submit" class="btn btn-gradient-primary me-2">Save</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('foot')

@endsection
