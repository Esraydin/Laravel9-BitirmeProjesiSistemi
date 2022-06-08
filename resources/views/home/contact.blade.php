@extends('layouts.frontbase')

@section('title','contact | '. $setting->title)
@section('description', $setting->title)
@section('keyword', $setting->keyword)
@section('icon', Storage::url($setting->icon))




@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('home')}}">Home</a><i class="icon-angle-right"></i></li>
                        <li class="active">Contact</li>
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
                    <div class="span4">
                        <ul>
                            <li><strong>We are available for any custom works this month</strong></li>
                            <li>Main office: Springville center X264, Park Ave S.01</li>
                            <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="content">
        <div class="span8">
            <aside class="left-sidebar">
                <div class="widget">
                    <h5 class="widgetheading">Contact Information</h5>
                    {!! $setting->contact !!}
                </div>
            </aside>
        </div>


        <div class="span4">
            <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
            @include('home.messages')
            <form action="{{route("storemessage")}}" method="post" role="form" class="contactForm">
                @csrf
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="row">
                    <div class="span4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name & Surname"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validation"></div>
                    </div>
                    <div class="span4 form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="span4 form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Your Email"
                               data-rule="email" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="span4 form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>

                    <div class="span4 margintop10 form-group">
                        <textarea class="form-control" name="message" rows="4" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                        <p class="text-center">
                            <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
        <div class="row">

        </div>
    </section>

    <section id="bottom">
        <div class="container">
            <div class="row">


            </div>
        </div>
    </section>
@endsection


