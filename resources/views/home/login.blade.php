@extends('layouts.frontbase')

@section('title', 'User Login | ')





@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>User Login</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('home')}}">Home</a><i class="icon-angle-right"></i></li>
                        <li class="active">User Login</li>
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


        <section id="bottom">
            <div class="container">
                <div class="row">
                    @include('auth.login')
                </div>
            </div>
        </section>
@endsection


