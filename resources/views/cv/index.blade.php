@extends('layouts.app')

@section('content')
    <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
        <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div class="col text-left" style="margin-left: -25px;">
                        <h2 class="text-uppercase section-heading" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 30px;">projects we have done</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                @foreach($ress as $art)
                <div class="col-12 col-lg-8 mx-auto">
                    <a data-toggle="tooltip" data-bs-tooltip="" href="/cv/{{$art->id}}" style="color: rgb(0,0,0);" title="Click To Read The Work Reference">
                        <h2 class="text-uppercase"  style="font-size: 28px;"><span style="text-decoration: underline;">{{$art->title}}</span></h2>
                    </a>
                    <h2 class="text-uppercase" data-toggle="tooltip" data-bs-tooltip=""  title="Duration of this work"  style="font-size: 15px;">{{$art->duration}}</h2>
                    <p style="color: rgb(0,0,0);font-size: 20px;">{!! str_limit($art->description, 650) !!}</p>
                    <h2 class="text-uppercase"  style="font-size: 25px;margin-top: -32px;"><br><span style="text-decoration: underline;">DUTIES AND RESPONSIBILITIES</span><br><br></h2>
                    <p style="color: rgb(0,0,0);font-size: 20px;margin-bottom: 2px;margin-top: -31px;">{!! str_limit($art->duties, 650) !!}</p>
                    <h2 class="text-uppercase"  style="font-size: 25px;"><span style="text-decoration: underline;">achievements</span></h2>
                    <p style="color: rgb(0,0,0);font-size: 20px;">{!! str_limit($art->achievements, 650) !!}</p><a class="flex-wrap"  href="/cv/{{$art->id}}" ><img class="align-self-center" data-toggle="tooltip" data-bs-tooltip="" title="Read More About This work reference" src="assets/img/bitt.png" style="width: 154px;color: rgb(3,3,3);" ></a>
                </div>
                    @endforeach
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-12  d-flex justify-content-center " style="margin:auto; ">--}}
{{--                {{$ress->links()}}--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
@stop
