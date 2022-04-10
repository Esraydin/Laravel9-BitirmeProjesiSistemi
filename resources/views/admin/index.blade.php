@extends('layouts.adminbase')

@section('title', 'Admin Panel')
@section('slider')
    @include('home.slider')
@endsection


@section('content')
    --> Main content -->
  <section class = "content">
      <div class=""card>
          <div class="card-header">
              <h3 class="card-title">
                  Title
              </h3>
              <div class="card-tools">
                  <button type="button" class ="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title ="Collapse">
                      <i class = "fas fa-minus"></i></button>
                  <button type="button" class ="btn btn-tool" data-card-widget ="remove" data-toggle="tooltip" title="remove">
                      <i class="fas fa-minus"></i></button>

              </div>
          </div>
          <div class="card-body">
              Start creating your amazing application!
          </div>
          <!--/.card-body-->
          <div class="card-footer">
              Footer
          </div>
          <!--/.card-footer-->
      </div>
      <!--/.card-->
  </section>
    <!--/.content-->

@endsection