@extends('layouts.app')

@section('content')
    <div id="page-top" style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
    <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
        <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div class="col text-left" style="margin-left: -25px;">
                        <h2  data-aos="zoom-in-down"
                             data-aos-easing="ease-out-cubic"
                             data-aos-duration="2000"
                             class="section-heading"
                             style="background-image: url(&quot;img/titlt-bg-small.png&quot;);
                                background-repeat: no-repeat;
                                background-position: top;
                                background-size: cover;margin-left: 24px;
                                padding-left: 6px;font-size: 38px;">admin panel</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">

                <div  data-aos="zoom-in-up"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000"  class="col-12 col-lg-8 mx-auto">

                    <div><div>
                            <a data-toggle="tooltip" data-bs-tooltip="" href="/cv/create" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">add cv</h1>
                            </a><a data-toggle="tooltip" data-bs-tooltip="" href="/cv/edit" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">edit cv</h1>
                            </a>

                            <a data-toggle="tooltip" data-bs-tooltip="" href="/about/create" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">add about</h1>
                            </a><a data-toggle="tooltip" data-bs-tooltip="" href="/about/edit" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">edit about</h1>
                            </a>

                            <a data-toggle="tooltip" data-bs-tooltip="" href="/article/create" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">add cv</h1>
                            </a><a data-toggle="tooltip" data-bs-tooltip="" href="/article/edit" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">edit cv</h1>
                            </a>

                            <a data-toggle="tooltip" data-bs-tooltip="" href="/members/create" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">add member</h1>
                            </a><a data-toggle="tooltip" data-bs-tooltip="" href="/members/edit" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">edit member</h1>
                            </a>

                            <a data-toggle="tooltip" data-bs-tooltip="" href="/service/create" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">add service</h1>
                            </a><a data-toggle="tooltip" data-bs-tooltip="" href="/service/edit" title="Read Everything About this Article">
                                <img class="align-self-center" src="img/bitt.png" style="width: 154px;">
                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">edit service</h1>
                            </a>
                        </div></div>


                </div>

            </div>
        </div>
    </section>

    </div>
{{--@endsection--}}
@stop
