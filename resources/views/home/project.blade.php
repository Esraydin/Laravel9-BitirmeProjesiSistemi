@extends('layouts.frontbase')

@section('title', $data->title)


@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Portfolio detail</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">{{$data->category->title}}</a><i class="icon-angle-right"></i></li>
                        <li class="active">{{$data->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <article>
                        <div class="top-wrapper">
                            <div class="post-heading">
                                <h3><a href="#">This is an example of portfolio detail</a></h3>
                            </div>
                            <!-- start flexslider -->
                            <div class="flexslider">
                                <ul class="slides">

                                    <li>
                                        <img src="{{Storage::url($data->image)}}" alt=""/>
                                    </li>
                                    <ul class="slides">
                                        @foreach($images as $rs)

                                            <li>
                                                <img src="{{Storage::url($rs->image)}}" alt=""/>
                                            </li>
                                        @endforeach

                                    </ul>
                                </ul>
                            </div>

                            <!-- end flexslider -->
                        </div>
                        <p>
                            {!!$data->detail!!}
                        </p>
                    </article>
                </div>
                <div class="span4">
                    <aside class="right-sidebar">
                        <div class="widget">
                            <h5 class="widgetheading">Project information:{{$data->title}}</h5>
                            <ul class="folio-detail">
                                <li><label>Category:</label> Web design</li>
                                <li><label>Client :</label> ASU Company</li>
                                <li><label>Project date :</label> 26 March, 2013</li>
                                <li><label>Project URL :</label><a href="#">www.projectsiteurl.com</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Text widget</h5>
                            <p>
                                {{$data->description}}
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection


