@extends('layouts.app')

@section('content')

<div>
    <div class="parallax">
        <div class="container d-flex justify-content-center align-items-center parallax-content" style="height: 75vh;">
            <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center flex-column">
                <h1 style="font-size: 30px;">RENEWABLE ENERGY AND ENVIRONMENTAL<br>SUSTAINABLE SOLUTIONS</h1>
            </div>
        </div><video style="width: 100% !important;"  class="parallax-background" autoplay="" loop="" muted=""><source src="vid/wt.mp4"
	 type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]" 
	wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]"></video>
        <div
            class="parallax-placeholder" style="background-image:url(&quot;assets/img/placeholder.jpg&quot;);"></div>
    </div>
    <div class="row" style="margin-top;15px;">
        <div class="col-12 col-lg-8 text-left d-flex flex-column m-auto">
            <a data-toggle="tooltip" data-bs-tooltip="" href="#" style="color: rgb(0,0,0);" title="Click To Read The Article">
                <h2 class="text-uppercase text-center" style="font-size: 28px;"><span style="text-decoration: underline;">knowledge bites</span></h2>
            </a>
            <p class="text-center" style=" margin-top;-25px; color: rgb(0,0,0);font-size: 20px;">To be a world class Renewable Energy Company of choice offering the illusive Energy trillema (energy security, energy equity and environmental sustainability) trade-off balance for growth and macroeconomic stability, equity and poverty
                reduction and improving governance.<br><br></p><a class="text-right align-self-center flex-wrap" data-toggle="tooltip" data-bs-tooltip="" href="#" title="Read Everything About this Article"></a></div>
    </div>
    <div class="parallax">
        <div class="container d-flex justify-content-center align-items-center parallax-content" style="height:80vh;">
            <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center flex-column">
                <h1 style="font-size: 36px;"><br>RENEWABLE ENERGY AND ENVIRONMENTAL<br>SUSTAINABLE SOLUTIONS<br><br></h1>
            </div>
        </div><video class="parallax-background" autoplay="" loop="" muted=""><source src="vid/tt.mp4" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]" wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]"></video>
        <div
            class="parallax-placeholder" style="background-image:url(&quot;assets/img/placeholder1.jpg&quot;);"></div>
    </div>

</div>


@endsection
@section('customJs')

<script>
$( document ).ready(() => {
	console.log(" pop booing" )
    document.querySelector("#app > main > div > div:nth-child(1) > video").style.width=0;
});
</script>

@endsection
