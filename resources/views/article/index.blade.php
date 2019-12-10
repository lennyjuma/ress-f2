@extends('layouts.app')

@section('content')
<section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
        <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services"
                 style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div class="col text-left" style="margin-left: -25px;">
                        <h2 class="text-uppercase section-heading" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 38px;">articles</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                @foreach($article as $art)
                <div class="col-12 col-lg-8 mx-auto">
                    <a data-toggle="tooltip" data-bs-tooltip="" href="/article/{{$art->id}}" style="color: rgb(0,0,0);" title="Click To Read The Article">
                        <h2 class="text-uppercase" data-toggle="tooltip" data-bs-tooltip="" title="Click To Read More" style="font-size: 28px;"><div style="text-decoration: underline;">{{$art->title}}</div></h2>
                    </a>
                    <p style="color: rgb(0,0,0);font-size: 20px;">{!! str_limit($art->description, 650) !!}</p>
                    <a class="flex-wrap" data-toggle="tooltip" data-bs-tooltip="" href="/article/{{$art->id}}" title="Read Everything About this Article">
                        <img class="align-self-center" data-toggle="tooltip" data-bs-tooltip="" src="assets/img/bitt.png" style="width: 154px;color: rgb(3,3,3);" title="Read More About This Article"></a>
                    <div style="font-max-size:25px; ">
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
                    </div
                </div>
                    @endforeach
            </div>
        </div>
    <div class="row">
        <div class="col-12  d-flex justify-content-center " style="margin:auto; ">
            {{$article->links()}}
        </div>
    </div>
    </section>

@endsection
