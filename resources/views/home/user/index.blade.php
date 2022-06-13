@extends('layouts.frontbase')

@section('title','User Panel')




@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Blank Page</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('home')}}">Home</a><i class="icon-angle-right"></i></li>
                        <li class="active">Blank Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="span8">
            <aside class="left-sidebar">
                <div class="widget">
                    @include('profile.show')

                </div>
            </aside>
        </div>


        <div class="span4">
            @include('home.user.usermenu')


        </div>


        <div class="row">

        </div>
    </section>
@endsection


