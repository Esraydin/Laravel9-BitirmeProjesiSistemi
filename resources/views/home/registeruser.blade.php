@extends('layouts.frontbase')

@section('title', 'User Registration Page | ' )




@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>User Registration Page</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('home')}}">Home</a><i class="icon-angle-right"></i></li>
                        <li class="active">User Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div id="wrapper">
        <!-- toggle top area -->
        <div class="hidden-top">
            <div class="hidden-top-inner container">
                <div class="row">
                    <div class="span12">
                        <ul>
                            <li><strong>We are available for any custom works this month</strong></li>
                            <li>Main office: Springville center X264, Park Ave S.01</li>
                            <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end toggle top area -->


    </div>
    <div class="row">
        <div class="span6">
            @include('auth.register')
        </div>
        <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
                <ul class="slides">
                    <li class="flex-active-slide" data-thumb-alt=""
                        style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                        <img src="img/works/full/image-01-full.jpg" alt="" draggable="false">
                    </li>
                    <li data-thumb-alt=""
                        style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                        class="">
                        <img src="img/works/full/image-02-full.jpg" alt="" draggable="false">
                    </li>
                    <li data-thumb-alt=""
                        style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                        class="">
                        <img src="img/works/full/image-03-full.jpg" alt="" draggable="false">
                    </li>
                </ul>
                <ol class="flex-control-nav flex-control-paging">
                    <li><a href="#" class="flex-active">1</a></li>
                    <li><a href="#" class="">2</a></li>
                    <li><a href="#" class="">3</a></li>
                </ol>
                <ul class="flex-direction-nav">
                    <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                    <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                </ul>
            </div>
            <!-- end flexslider -->
        </div>
    </div>

    <section id="bottom">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
@endsection


