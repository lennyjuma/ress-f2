@extends('layouts.app')

@section('content')
<div id="page-top" style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
<section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
    <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
        <div class="container">
            <div class="row d-flex">
                <div data-aos="zoom-in-down"
                     data-aos-easing="ease-out-cubic"
                     data-aos-duration="2000" class="col text-left" style="margin-left: -25px;">
                    <h2 class="section-heading" style="background-image: url(&quot;img/titlt-bg-small.png&quot;);background-repeat: no-repeat;background-position: %;background-size: cover;margin-left: 24px;padding-left: 6px;">get to know more</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

        @foreach($article as $art)
        <div data-aos="zoom-in-up"
             data-aos-easing="ease-out-cubic"
             data-aos-duration="2000"
             class="row">

            <div class="col-12 col-lg-8 mx-auto">
                <a data-toggle="tooltip" data-bs-tooltip="" href="/article/{{$art->id}}" title="Read Everything About this Article">
                <h2                     style="font-family: 'Architects Daughter', cursive;">{{$art->title}}</h2>
                <img class="img-fluid" src="img/arrow.png" style="width: 500px;margin-bottom: 0px;margin-top: -52px;" width="none">
                </a>
                <p style="margin-top: -8px;">{!! str_limit($art->description, 700) !!}</p>
                <a data-toggle="tooltip" data-bs-tooltip="" href="/article/{{$art->id}}" title="Read Everything About this Article">
                    <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                    <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">read more</h1>
                </a>
            </div>
        </div>
            @endforeach
    </div>
</section>

</div>

@endsection
