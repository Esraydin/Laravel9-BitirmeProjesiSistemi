@extends('layouts.adminbase')


@section('title', 'Settings')


@section('content')



    <div class="main-panel">
        <div class="content-wrapper">


            <form class="form" action="{{route('admin.setting.update')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <ul class="nav nav-pills nav-pills-custom" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-tab-general" data-bs-toggle="pill"
                                           href="#pills-general-1" role="tab" aria-controls="pills-tab-general"
                                           aria-selected="true"> General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-tab-smtpemail" data-bs-toggle="pill"
                                           href="#pills-smtp-1" role="tab" aria-controls="pills-tab-smtpemail"
                                           aria-selected="false"> Smtp Email </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-tab-socialmedia" data-bs-toggle="pill"
                                           href="#pills-social" role="tab" aria-controls="pills-tab-socialmedia"
                                           aria-selected="false"> Social Media </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-tab-aboutus" data-bs-toggle="pill"
                                           href="#pills-about" role="tab" aria-controls="pills-tab-aboutus"
                                           aria-selected="false"> About Us </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-tab-contactpage" data-bs-toggle="pill"
                                           href="#pills-contact" role="tab" aria-controls="pills-tab-contactpage"
                                           aria-selected="false"> Contact Page </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-tab-reference" data-bs-toggle="pill"
                                           href="#pills-references-1" role="tab" aria-controls="pills-tab-reference"
                                           aria-selected="false"> References</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-content-custom-pill" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-general-1" role="tabpanel"
                                         aria-labelledby="pills-tab-general">
                                        <div class="d-flex mb-4">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="forms-sample">
                                                            <div class="form-group">

                                                                <input type="hidden" class="form-control" id="id"
                                                                       name="id" placeholder="id" value="{{$data->id}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail3">Title</label>
                                                                <input type="text" class="form-control" id="title"
                                                                       name="title" value="{{$data->title}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword4">Keywords</label>
                                                                <input type="text" class="form-control" name="Keyword"
                                                                       value="{{$data->keyword}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword4">Description</label>
                                                                <input type="text" class="form-control"
                                                                       name="Description"
                                                                       value="{{$data->description}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword4">Company</label>
                                                                <input type="text" class="form-control" name="company"
                                                                       value="{{$data->company}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword4">Adress</label>
                                                                <input type="text" class="form-control" name="adress"
                                                                       value="{{$data->adress}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword4">Phone</label>
                                                                <input type="text" class="form-control" name="phone"
                                                                       value="{{$data->phone}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword4">Email</label>
                                                                <input type="text" class="form-control" name="email"
                                                                       value="{{$data->email}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <select class="form-control form-control-lg "
                                                                        name="status">
                                                                    <option selected>{{$data->status}}</option>
                                                                    <option>True</option>
                                                                    <option>False</option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Icon</label>
                                                                <input type="file" name="image"
                                                                       class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text"
                                                                           class="form-control file-upload-info"
                                                                           disabled="" placeholder="Choose Icon File">
                                                                    <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">File</button>
                          </span>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="pills-smtp-1" role="tabpanel"
                                     aria-labelledby="pills-tab-smtpemail">
                                    <div class="d-flex mb-4">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="forms-sample">
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Smtp Server</label>
                                                            <input type="text" class="form-control" name="smtpserver"
                                                                   value="{{$data->smptserver}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Smtp Email</label>
                                                            <input type="text" class="form-control" name="smtpemail"
                                                                   value="{{$data->smtpemail}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Smtp Password</label>
                                                            <input type="text" class="form-control" name="smtppassword"
                                                                   value="{{$data->smtppassword}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Smtpport</label>
                                                            <input type="text" class="form-control" name="smtpport"
                                                                   value="{{$data->smtpport}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="pills-social" role="tabpanel"
                                     aria-labelledby="pills-tab-socialmedia">
                                    <div class="d-flex mb-4">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="forms-sample">
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Fax</label>
                                                            <input type="text" class="form-control" name="fax"
                                                                   value="{{$data->fax}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Facebook</label>
                                                            <input type="text" class="form-control" name="facebook"
                                                                   value="{{$data->facebook}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Instagram</label>
                                                            <input type="text" class="form-control" name="instagram"
                                                                   value="{{$data->instagram}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Youtube</label>
                                                            <input type="text" class="form-control" name="youtube"
                                                                   value="{{$data->youtube}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">Twitter</label>
                                                            <input type="text" class="form-control" name="twitter"
                                                                   value="{{$data->twitter}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
            </form>


            @endsection

            @section('foot')
                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#aboutus').summernote();
                        $('#contact').summernote();
                        $('#references').summernote();
                    });
                </script>
@endsection

