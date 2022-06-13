@extends('layouts.frontbase')







@section('content')
    <section id="inner-headline">
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        @foreach($project as $rs)
                            <article>
                                <div class="row">
                                    <div class="span8">
                                        <div class="post-image">
                                            <div class="post-heading">
                                                <h3><a href="/project/{{$rs->id}}">{{$rs->title}}</a></h3>
                                            </div>
                                            <img src="{{Storage::url($rs->image)}}" alt="">
                                        </div>
                                        <p>
                                            {{$rs->detail}}</p>
                                        <div class="bottom-article">
                                            <ul class="meta-post">
                                                <li><i class="icon-calendar"></i><a href="#"> {{$rs->created_at}}</a>
                                                </li>
                                                <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                                                <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                            </ul>
                                            <a href="{{$rs->id}}" class="pull-right">Continue reading <i
                                                    class="icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        @endforeach
                        <div id="pagination">
                            <span class="all">Page 1 of 3</span>
                            <span class="current">1</span>
                            <a href="#" class="inactive">2</a>
                            <a href="#" class="inactive">3</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection


