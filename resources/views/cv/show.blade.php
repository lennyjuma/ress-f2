@extends('layouts.app')

@section('content')
    <div id="page-top" style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
    <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
        <section  data-aos="zoom-in-up"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="2000" class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div class="col text-left" style="margin-left: -25px;">
{{--                        <h2 class="section-heading" style="background-image: url(&quot;assets/img/titlt-bg-small.png&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 38px;">projects we have done</h2>--}}
                        <h2 style="font-family: 'Architects Daughter', cursive;">{{$ress->title}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div  data-aos="zoom-in-down"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000" class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">

                    {{--<a href="/cv/{{$ress->id}}">
--}}{{--                        <h2 style="font-family: 'Architects Daughter', cursive;">{{$ress->title}}</h2>--}}{{--
                        <img class="img-fluid" src="assets/img/arrow.png" style="width: 500px;margin-bottom: 0px;margin-top: -49px;" width="none">
                    </a>--}}
{{--                    <h2 style="font-size: 18px;margin-top: -12px;font-family: 'Architects Daughter', cursive;"><span style="text-decoration: underline;">{{$cv->duration}}</span></h2>--}}
                    <p  >{!! $ress->description !!}</p>
                    <h2 style="font-size: 25px;font-family: 'Architects Daughter', cursive;"><span style="text-decoration: underline;">duties</span> &amp; <span style="text-decoration: underline;">responsibilities</span></h2>
                    <p>{!! $ress->duties !!}</p>
                    <h2 style="font-family: 'Architects Daughter', cursive;font-size: 25px;"><span style="text-decoration: underline;">achievements</span></h2>
                    <p>{!! $ress->achievements !!}</p>
                    {{--<a data-toggle="tooltip" data-bs-tooltip="" href="/cv/{{$ress->id}}" title="Read Everything About this Article">
                        <img class="align-self-center" src="assets/img/bitt.png" style="width: 154px;">
                        <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">read more</h1>
                    </a>--}}
                </div>
            </div>
        </div>
    </section>

    </div>
{{--@endsection--}}
@stop
