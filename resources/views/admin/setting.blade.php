
@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Setting</li>
                    </ol>
                </nav>
            </div>
            <div class="content">
                <!-- her content sayfasında main-panel clasına sahip bir div açılmalı -->

                <form class="form" action="{{route('admin.setting.update',['id'=>$data->id])}}" method="post"
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
                                               href="#pills-reference" role="tab" aria-controls="pills-tab-reference"
                                               aria-selected="false"> References</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                                        <div class="tab-pane fade show active" id="pills-general-1" role="tabpanel"
                                             aria-labelledby="pills-home-tab-nobd">
                                            <h4 class="card-title">General Settings</h4>
                                            <input type="hidden" id="id" name="id"
                                                   value="{{$data->id}}">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Title</label>
                                                <input type="text" class="form-control"
                                                       name="title" value="{{$data->title}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Keywords</label>
                                                <input type="text" class="form-control"
                                                       name="keywords" value="{{$data->keyword}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Description</label>
                                                <input type="text" class="form-control"
                                                       name="description"
                                                       value="{{$data->description}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Company</label>
                                                <input type="text" class="form-control"
                                                       name="company" value="{{$data->company}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Address</label>
                                                <input type="text" class="form-control"
                                                       name="address" value="{{$data->address}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Phone</label>
                                                <input type="tel" class="form-control"
                                                       name="phone" value="{{$data->phone}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">Email address</label>
                                                <input type="email" class="form-control"
                                                       name="email" value="{{$data->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectGender">Status</label>
                                                <select class="form-control" name="status">
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


                                        <div class="tab-pane fade" id="pills-smtp-1" role="tabpanel"
                                             aria-labelledby="pills-profile-tab-nobd">
                                            <h4 class="card-title">SMTP E-MAIL SETTINGS</h4>
                                            <div class="form-group">
                                                <label for="exampleInputName1">SMTP SERVER</label>
                                                <input type="email" name="smtpSERVER"
                                                       class="form-control" id="exampleInputEmail3"
                                                       value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">SMTP E-mail</label>
                                                <input type="email" name="smtpemail"
                                                       class="form-control" id="exampleInputEmail3"
                                                       value="{{$data->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">SMTP
                                                    Passsword</label>
                                                <input type="password" name="smtppassword"
                                                       class="form-control"
                                                       id="exampleInputPassword4"
                                                       value="{{$data->password}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">SMTP Port</label>
                                                <input type="number" class="form-control"
                                                       name="smtpport" value="{{$data->smtpport}}">
                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="pills-social" role="tabpanel"
                                             aria-labelledby="pills-contact-tab-nobd">
                                            <h4 class="card-title">SOCIAL MEDIA</h4>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Fax</label>
                                                <input type="text" class="form-control"
                                                       name="fax" value="{{$data->fax}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Facebook</label>
                                                <input type="text" class="form-control"
                                                       name="facebook" value="{{$data->facebook}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Instagram</label>
                                                <input type="text" class="form-control"
                                                       name="instagram" value="{{$data->instagram}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Twitter</label>
                                                <input type="text" class="form-control"
                                                       name="twitter" value="{{$data->twitter}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Youtube</label>
                                                <input type="text" class="form-control"
                                                       name="youtube" value="{{$data->youtube}}">
                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="pills-about" role="tabpanel"
                                             aria-labelledby="pills-contact-tab-nobd">
                                            <h4 class="card-title">About Us</h4>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">About Us</label>
                                                <textarea name="aboutus"
                                                          class="aboutus"
                                                          rows="4">{{$data->aboutus}}
                                                            </textarea>
                                            </div>

                                        </div>


                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                             aria-labelledby="pills-contact-tab-nobd">
                                            <h4 class="card-title">Contact Page</h4>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Contact</label>
                                                <textarea name="contact"
                                                          class="contact"
                                                          rows="4">{{$data->contact}}
                                                            </textarea>
                                            </div>

                                        </div>


                                        <div class="tab-pane fade" id="pills-reference" role="tabpanel"
                                             aria-labelledby="pills-contact-tab-nobd">
                                            <h4 class="card-title">References</h4>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">References</label>
                                                <textarea name="references"
                                                          class="references"
                                                >{{$data->references}}</textarea>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3 col-12">
                                            Update
                                            Setting
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @endsection
            @section('foot')
                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('.aboutus').summernote();
                        $('.contact').summernote();
                        $('.references').summernote();
                    });
                </script>
@endsection
