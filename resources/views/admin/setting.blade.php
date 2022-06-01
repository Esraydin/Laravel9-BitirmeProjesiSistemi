@extends('layouts.adminbase')


@section('title', 'Settings')


@section('content')



    <div class="main-panel">
        <div class="content-wrapper">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                <form class="form" action="{{route('admin.setting.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                </form>

            </ol>
        </div>




@endsection

