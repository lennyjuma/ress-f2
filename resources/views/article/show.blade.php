@extends('layouts.app')


@section('content')
    <div id="page-top" style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
        <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
            <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
                <div class="container">
                    <div data-aos="zoom-in-up"
                         data-aos-easing="ease-out-cubic"
                         data-aos-duration="2000" class="row d-flex">
                        <div class="col text-left" style="margin-left: -25px;">
                            <h2 class="section-heading" style="background-image: url(&quot;img/titlt-bg-small.png&quot;);background-repeat: no-repeat;background-position: %;background-size: cover;margin-left: 24px;padding-left: 6px;">{{$article->title}}</h2>
                        </div>
                    </div>
                </div>
            </section>
            <one></one>
            <div class="container">
                <div class="row">
                    <div data-aos="zoom-in-up"
                         data-aos-easing="ease-out-cubic"
                         data-aos-duration="2000">
                        <a aria-role="link" rel="nofollow noopener noreferrer" aria-label="Share on LinkedIn" title="LinkedIn" target="_blank" class="link-block-6 w-inline-block">
                            <img src="https://tripleoklaw.com/images/linkedin2_1linkedin2.png" alt="" class="image-8">
                        </a>

                        <a rel="nofollow noopener noreferrer" target="_blank" title="Click to share on Twitter" class="link-block-6 w-inline-block">
                            <img src="https://tripleoklaw.com/images/twitter2_1twitter2.png" alt="" class="image-9">
                        </a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <a href="mailto:info@tripleoklaw.com" class="link-block-6-copy2 w-inline-block">
                            <img src="https://tripleoklaw.com/images/mail2_1mail2.png" alt="" class="image-10">
                        </a>
                        <a href="https://wa.me/254792722428?text=Welcome%20to%20TripleOKLaw%20LLP.%20Send%20this%20message%20to%20get%20in%20contact%20with%20us" class="link-block-6-copy w-inline-block">
                            <img src="https://tripleoklaw.com/images/WA-Logo2_1WA Logo2.png" alt="" class="image-11">
                        </a>
                    </div>
                        <div data-aos="zoom-in-up"
                             data-aos-easing="ease-out-cubic"
                             data-aos-duration="2000" class="col-12 col-lg-8 mx-auto">
{{--                            <h2 style="font-family: 'Architects Daughter', cursive;">{{$article->title}}</h2>--}}
{{--                            <img class="img-fluid" src="assets/img/arrow.png" style="width: 500px;margin-bottom: 0px;margin-top: -52px;" width="none">--}}
                            <p style="margin-top: -8px;">{!! str_limit($article->description, 2000) !!}</p>
{{--                            <a class="flex-wrap" data-toggle="tooltip" data-bs-tooltip="" href="#" title="Read Everything About this Article">--}}
{{--                                <img class="align-self-center" src="assets/img/bitt.png" style="width: 154px;">--}}
{{--                                <h1 style="color: rgb(255,255,255);font-size: 18px;margin-top: -42px;margin-left: 2px;font-family: 'Architects Daughter', cursive;">read more</h1>--}}
{{--                            </a>--}}
                        </div>
                </div>
            </div>
        </section>

    </div>
{{--@endsection--}}
@stop
