@extends('layouts.app')

@section('content')

<div id="home" class="content-section text-center" style="padding-top: 0px;">
    <div class="parallax">
        <div class="container d-flex justify-content-center align-items-center parallax-content">
            <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center flex-column">
                <h1 data-aos="zoom-in-up"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000" >Renewable Energy And Environmental <br>  Sustainable Solutions</h1>
            </div>
        </div>
                <video class="parallax-background" autoplay="" loop="" muted=""><source src="vid/wt.mp4" type="video/mp4"
                              wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]"
                            wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]"></video>
        <div
            class="parallax-placeholder" style="background-image:url(&quot;assets/img/placeholder.jpg&quot;);"></div>
    </div>
    <div class="container">
        <div class="row" id="about">
            <div class="col-lg-8 mx-auto">
                <h2>About RESS</h2>
                <p>Grayscale is a free Bootstrap theme. It can be yours right now, simply download the template on&nbsp;<a href="#">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                <p>This theme features stock photos by&nbsp;<a href="#">Gratisography</a>&nbsp;along with a custom Google Maps skin courtesy of&nbsp;<a href="#">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with SASS and LESS files for easy customization!</p>
            </div>
        </div>
    </div>
</div>
<div class="parallax">
    <div class="container d-flex justify-content-center align-items-center parallax-content">
        <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center flex-column">
            <h1 data-aos="zoom-in-up"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">Renewable Energy And Environmental <br>  Sustainable Solutions</h1>
        </div>
    </div>
    <video class="parallax-background" autoplay="" loop="" muted=""><source src="vid/tt.mp4" type="video/mp4"
                                                                            wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]"
                                                                            wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]"></video>
    <div
        class="parallax-placeholder" style="background-image:url(&quot;assets/img/placeholder.jpg&quot;);"></div>
</div>

<div>
    <div id="dot-nav" class="affix" data-spy="affix">
        <ul class="list-group">
            <li class="list-group-item awesome-tooltip active" title="Home"><a href="#home"> </a></li>
            <li class="list-group-item awesome-tooltip" title="Knowledge Bites"><a href="#bits"> </a></li>
            <li class="list-group-item awesome-tooltip" title="Contact"><a href="#contact"> </a></li>
        </ul>
    </div>
    <div id="main"></div>
</div>

</div>

</html>
@endsection
