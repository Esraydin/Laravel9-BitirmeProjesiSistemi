@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions | ' . $setting->title)
@section('description', $setting->description)
@section('keyword', $setting->keyword)
@section('icon', Storage::url($setting->icon))
@section('head')

@endsection



@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('home')}}">Home</a><i class="icon-angle-right"></i></li>
                        <li class="active">Frequently Asked Questions</li>
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


    <section id="bottom">
        <div class="container">
            <div class="span12">
                <div class="row">


                    <h5 class="widgetheading">Frequently Asked Questions</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9" id="faq">
                                <div id="accordion" class="accordion_styled">
                                    @foreach($datalist as $rs)
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>
                                                    <a class="accordion-toggle" data-toggle="collapse"
                                                       data-parent="#accordion"
                                                       href="#collapse{{$loop->iteration}}">{{$rs->questions}}<i
                                                            class="indicator icon-plus float-right"></i></a>
                                                </h5>

                                            </div>
                                            <div id="collapse{{$loop->iteration}}" class="collapse"
                                                 data-parent="#accordion">

                                                <div class="card-body">

                                                    {!! $rs->answer !!}

                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                <!--End payment -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
@endsection


