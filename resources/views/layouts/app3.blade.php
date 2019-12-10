<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--  social metaas   --}}
{{--    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>--}}

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Client Alert: What The New Data Protection Act In Kenya Means For Your Business"/>
    <meta property="og:description" content="TripleOK Law LLP Publication"/>
    <meta property="article:published_time" content="2019-11-19 14:17:32">
    <meta property="article:modified_time" content="2019-11-19 14:48:35">
    <meta name="description" content="Client Alert: What The New Data Protection Act In Kenya Means For Your Business"/>
    <meta property="og:site_name" content="TripleOK Law LLP"/>
    <meta property="og:image" content="https://tripleoklaw.com/images/perspect.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="800"/>
    <meta property="og:locale" content="en_GB"/>
    <meta name="twitter:text:title" content="Client Alert: What The New Data Protection Act In Kenya Means For Your Business">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@le_nux"/>
    <meta name="robots" content="noarchive,noodp">

    <title>{{ config('app.name', 'RESS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
{{--    aos--}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--  minified  --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&amp;subset=cyrillic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">

<body style="background-color: rgb(255,255,255);color: rgb(0,0,0);">
    <div id="app">

        <nav style="margin-bottom: -25px" class="navbar navbar-light navbar-expand-md shadow-sm navigation-clean">
            <div class="container">
                <div class="d-flex">
                    <a href="#">
                        <h1 style="color: rgb(17,17,17);font-size: 45px;font-family: 'Architects Daughter', cursive;padding: auto;margin: auto;margin-top: 0px;width: auto;height: auto;padding-right: 39px;margin-right: 60px;padding-left: 0px;">ress</h1>
                    </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-left: 11px;margin-left: 56px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="margin-top: 1px;margin-bottom: 0px;"></span></button></div>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
{{--                        <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link active text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/article">article</a></li>--}}
                        <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/article">article</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/about">about</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/services">services</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/cv">work reference</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/members">members</a></li>
                        @can('crud')
                        <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/admin">admin</a></li>
                        @endcan
                        <li class="nav-item" role="presentation"><a class="nav-link text-uppercase" data-bs-hover-animate="jello" style="font-family:'Source Sans Pro', sans-serif;" href="/contact/create">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class=" py-4">
            @yield('content')
        </main>
        <div class="footer-dark" style="background-color:  #ffffff; color: rgb(0,0,0);">
            <footer style="font-family: Roboto, sans-serif;opacity: 1;">
                <div class="container">
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6 col-md-3 item">--}}
{{--                            <h3>Services</h3>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#" style="opacity: 1;filter: saturate(110%);color: rgb(0,0,0);background-color: #ffffff;">Web design</a></li>--}}
{{--                                <li><a href="#" style="font-family: Cabin, sans-serif;opacity: 1;">Development</a></li>--}}
{{--                                <li><a href="#" style="opacity: 1;">Hosting</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6 col-md-3 item">--}}
{{--                            <h3>About</h3>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#" style="opacity: 1;">Work Reference</a></li>--}}
{{--                                <li><a href="#" style="opacity: 1;">Team</a></li>--}}
{{--                                <li><a href="#" style="opacity: 1;">Contact Us</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 item text">--}}
{{--                            <h3>Company Name</h3>--}}
{{--                            <p style="opacity: 1;">Renewable Energy And Environmental Sustainable Solutions<br></p>--}}
{{--                        </div>--}}
{{--                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-linkedin"></i></a><a href="#"><i class="icon ion-email"></i></a></div>--}}
{{--                    </div>--}}
                    <p class="copyright" style="color: black; ">Renewable Energy And Environmental Sustainable Solutions © 2020.<br> Engineered With <span style="color: red;">❤</span> by <a href="mailto:lennyndungu34@gmail.com"><span
                                style="color: #000000;">Lenny Ndungu</span></a><br /></p></div>
            </footer>
        </div>
        </div>


    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{asset('assets/js/script.min.js')}}"></script>

    {{--cke4--}}
    <script src="{{asset('ckeditor4/ckeditor.js')}}"></script>
    <script src="{{asset('js/cke.js')}}"></script>
{{--social share--}}
    <script type="text/javascript">
        var link1 = document.createElement('meta');
        link1.setAttribute('property', 'og:url');
        link1.content = document.location;
        document.getElementsByTagName('head')[0].appendChild(link1);
        var link = document.createElement('meta');
        link.setAttribute('name', 'shareaholic:url');
        link.content = document.location;
        document.getElementsByTagName('head')[0].appendChild(link);

        function popBwi() {
            window.open(encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${encodeURI(document.querySelector("#services > div > div > div > h2").innerText)}`),"myWindow","height=300,width=300,menubar=no,status=no");
        }
        $("#hide").click(function(){
            $("p").hide();
        });

        $("#show").click(function(){
            $("p").show();
        });
        $(function() {
            document.querySelector("#about > div.container > div > div:nth-child(1) > a:nth-child(2)").href = `https://twitter.com/intent/tweet?url=${document.location}`;
            document.querySelector("#about > div.container > div > div:nth-child(1) > a:nth-child(1)").href = encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${encodeURI(document.querySelector("#services > div > div > div > h2").innerText)}`);
            document.querySelector("#about > div.container > div > div:nth-child(1) > a:nth-child(1)").addEventListener("click", (x) => {x.preventDefault(); popBwi(); console.log("poping window")});
            // document.querySelector("b#about > div.container > div > div:nth-child(1) > a.link-block-6-copy.w-inline-block).src = `https://tripleoklaw.com/pdfjs/web/viewer.html?file=${document.querySelector("body > div:nth-child(3) > div > div.column-19.w-col.w-col-9 > div > div.columns-8.w-row > div.w-col.w-col-11 > div > p:nth-child(1) > iframe").src}`;
            // }
            /*setTimeout(function(){ document.querySelector(".sharable").style.display = "none"; }, 7000);
            $("body > div:nth-child(3) > div > div.column-19.w-col.w-col-9 > div > div.columns-8.w-row > div.column-18.w-col.w-col-1.exception > div > button").click((x) => {document.querySelector(".sharable").style.display = "block";setTimeout(function(){ document.querySelector(".sharable").style.display = "none"; }, 10000);});*/
        })
    </script>
</body>
</html>
