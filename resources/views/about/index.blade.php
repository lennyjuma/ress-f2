@extends('layouts.app')


@section('content')
    <div id="page-top" style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
    <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 12px;padding-bottom: 8px;">
        <section
            class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center"
            id="services" style="height: 20vh;margin: 0px;margin-top: -13px;padding-bottom: 50px;padding-top: 50px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div
                        data-aos="zoom-in-down"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000"
                        class="col text-left" style="margin-left: -25px;">
                        <h2 class="section-heading" style="background-image: url(&quot;img/titlt-bg-small.png&quot;);background-repeat: no-repeat;background-position: %;background-size: cover;margin-left: 9px;padding-left: 16px;">about us</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                @foreach($about as $about)
                <div
                    data-aos="zoom-in-up"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000"
                    class="col-lg-8 mx-auto">
                    <h2>{{$about->title}}</h2>
                    {{--{!! str_limit($about->nextPost()['description'], 10) !!}
                    {{ str_limit($about->description, 10) }}--}}
                    <p >{!! str_limit($about->description, 550) !!}</p>

                </div>
                    @endforeach
            </div>
        </div>
    </section>
    </div>
@endsection