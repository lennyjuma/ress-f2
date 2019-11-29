@extends('layouts.app')

@section('content')
    <div id="page-top" style="background-color: rgb(251,251,251);margin-top:-90px; color: rgb(13,12,12);">
    <section id="about" class="content-section text-center" style="padding: 0px;padding-top: -44px;padding-bottom: 8px;">
        <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services"
                 style="height: 20vh;margin: 0px;margin-top: 90px;
                 padding-bottom: 50px;padding-top: 50px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div  class="col text-left" style="margin-left: -25px;">
                        <h2 data-aos="zoom-in-down"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000" class="section-heading" style="background-image: url(&quot;img/titlt-bg-small.png&quot;);background-repeat: no-repeat;background-position: %;background-size: cover;">our members</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                @foreach($members as $member)
                <div  class="col-lg-8 mx-auto">
                    <h2 data-aos="zoom-in-up"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">{{$member->name}}</h2>
                    <p data-aos="zoom-in-up"
                       data-aos-easing="ease-out-cubic"
                       data-aos-duration="2000">{{$member->description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    </div>


@endsection
