@extends('layouts.app')
@section('meta')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="{{$article->title}}"/>
  <meta property="og:description" content="RESS: Article"/>
  <meta property="article:published_time" content="{{$article->created_at}}">
  <meta property="article:modified_time" content="{{$article->updated_at}}">
  <meta name="description" content="{{$article->title}}"/>
  <meta property="og:site_name" content="Renewable Energy Solutions"/>
  <meta property="og:image" content"images/banner.jpg"/>
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="800"/>
  <meta property="og:locale" content="en_GB"/>
  <meta name="twitter:text:title" content="{{$article->title}}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@le_nux"/>
@endsection

@section('content')
<section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
        <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div class="col text-left" style="margin-left: -25px;">
                        <h2 class="text-uppercase section-heading" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 38px;">{{$article->title}}</h2>
		    </div>
		    <div class="col text-right">
			<a aria-role="link" rel="nofollow noopener noreferrer" aria-label="Share on LinkedIn" title="LinkedIn" target="_blank" class="link-block-6 w-inline-block">
                    <img src="https://tripleoklaw.com/images/linkedin2_1linkedin2.png" alt="" class="image-8">
                  </a>
                  
                  <a rel="nofollow noopener noreferrer" target="_blank" title="Click to share on Twitter" class="link-block-6 w-inline-block">
                      <img src="https://tripleoklaw.com/images/twitter2_1twitter2.png" alt="" class="image-9">
                  </a>
			</div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto"><a data-toggle="tooltip" data-bs-tooltip="" href="#" style="color: rgb(0,0,0);" title="Click To Read The Article"></a>
                    <p style="color: rgb(0,0,0);font-size: 20px;">{!! $article->description !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('customJs')
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script>
$(() => {
	console.log("document ready");
	let title = `{{ $article->title }}`;
	function popBwi() {	
	window.open(encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${encodeURI(document.querySelector("#services > div > div > div.col.text-left > h2").innerText)}`),"myWindow","height=300,width=300,menubar=no,status=no");
	}
	document.querySelector("#services > div > div > div.col.text-right > a:nth-child(2)").href = `https://twitter.com/intent/tweet?url=${document.location}`;
	document.querySelector("#services > div > div > div.col.text-right > a:nth-child(1)").href = encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${encodeURI(document.querySelector("#services > div > div > div.col.text-left > h2").innerText)}`);
	document.querySelector("#services > div > div > div.col.text-right > a:nth-child(1)").addEventListener("click", (x) => {x.preventDefault(); popBwi(); console.log("poping window")});
})
</script>
@endsection
