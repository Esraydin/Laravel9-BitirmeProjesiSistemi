@extends('layouts.adminbase')

@section('title', 'Add Category')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">Add FAQ</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ List</li>
                    </ol>
                </nav>
            </div>


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">FAQ Elements</h4>

                        <form class="form" action="{{route('admin.faq.store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label for="exampleInputEmail3">Questions</label>
                                <input type="text" class="form-control" name="questions" placeholder="questions">

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Answer</label>
                                <textarea id="summernote" name="answer"></textarea>
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
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#summernote').summernote();
                });
            </script>
@endsection
