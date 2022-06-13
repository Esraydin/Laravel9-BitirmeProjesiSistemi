@extends('layouts.frontbase')

@section('title', 'Bitirme Projesi Sistemi')
@section('description', $setting->title)
@section('keyword', $setting->keyword)
@section('icon', Storage::url($setting->icon))




@section('content')
@section('sidebar')
    @include("home.sidebar")
@show


<section class="callaction">
</section>
<div class="container">


    <div class="row">
        <div class="span12">
            <h4 class="heading">Some of recent <strong>Projects</strong></h4>
            <div class="row">
                <section id="projects">
                    <ul id="thumbs" class="portfolio">
                        <!-- Item Project and Filter Name -->
                        @foreach($datalist as $rs)
                            <li class="item-thumbs span3 design" data-id="id-{{$loop->iteration}}"
                                data-type="web">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                   title="{{$rs->title}}" href="{{route('project',['id'=>$rs->id])}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{Storage::url($rs->image)}}" alt="{{$rs->detail}}">
                                <a href="">{{$rs->title}}</a>
                            </li>
                        @endforeach


                    </ul>

            </div>
        </div>
    </div>
</div>

<section id="bottom">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="aligncenter">
                    <div id="twitter-wrapper">
                        <div id="twitter">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


