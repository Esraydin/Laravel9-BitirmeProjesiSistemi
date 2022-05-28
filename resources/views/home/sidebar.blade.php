<section id="featured">
<!-- start slider -->
<!-- Slider -->
<div id="nivo-slider">
    <div class="nivo-slider">
@foreach($sliderdata as $rs)
        <!-- Slide  image -->
            <img src="{{Storage::url($rs->image)}}" alt="" title="#caption-{{$loop->iteration}}" />

    @endforeach
    </div>

    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- Slide  caption -->@foreach($sliderdata as $rs)
                <div class="nivo-caption" id="caption-{{$loop->iteration}}">
                    <div>
                        <h2>{{$rs->title}}</strong></h2>
                        <p>
                            {{$rs->title}}
                        </p>
                        <a href="#" class="btn btn-theme">Read More</a>
                    </div>
                </div>    @endforeach


            </div>
        </div>
    </div>


</section>
