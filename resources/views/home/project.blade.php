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
                                <h3><a href="#">{{$data->title}}</a></h3>
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
                            {{$data->description}}

                        </p>
                    </article>
                </div>
                <div class="span4">
                    <aside class="right-sidebar">
                        <div class="widget">
                            @include('home.messages')
                            <h5 class="widgetheading">Project information:{{$data->title}}</h5>
                            <ul class="folio-detail">
                                <li><label>Category:</label> Web design</li>
                                <li><label>Client :</label> ASU Company</li>
                                <li><label>Project date :</label> {{$data->created_at}}</li>
                                <li><label>Project URL :</label><a href="#">www.projectsiteurl.com</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Text widget</h5>
                            <p>
                                {!!$data->detail!!}
                            </p>
                        </div>
                    </aside>

                </div>


                <div class="comment-area">
                    <h4>{{$data->comment->count('id')}} Comments</h4>
                    @foreach($comment as $rs)
                        <div class="media">
                            {{--                        <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt=""></a>--}}
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>{{$rs->created_at}}</span> {{$rs->user->name}}</h6>
                                    <span>Rate:{{$rs->rate}}</span>
                                    <p>
                                        {{$rs->subject}}
                                    </p>
                                </div>
                            </div>
                        </div>@endforeach

                    <h4>Leave your comment</h4>
                    <form id="commentform" action="{{route('storecomment')}}" method="post" name="comment-form">
                        @csrf
                        <div class="row">

                            <input type="hidden" value="{{$data->id}}" name="project_id">

                            <div class="span6">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>

                            <div class="span8">
                                <p>
                                    <textarea rows="5" class="input-block-level"
                                              placeholder="*Your comment here"></textarea>
                                </p>
                                <p>
                                    @auth()
                                        <button class="btn btn-theme margintop10" type="submit">Submit comment</button>
                                    @else
                                        <a href="/login" class="primary-button"> For submit your comment,please
                                            login</a>

                                @endauth
                                <div class="form-group">
                                    <label class="form-group" for="star">Rating:</label>
                                    <select style="width: 100%;" name="rate" id="star">
                                        <option value="1">*</option>
                                        <option value="2">**</option>
                                        <option value="3">***</option>
                                        <option value="4">****</option>
                                        <option value="5">*****</option>
                                    </select>
                                </div>

                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </form>


        </div>
        </div>
        </div>
    </section>

@endsection


