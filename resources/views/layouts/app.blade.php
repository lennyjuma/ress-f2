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
    <link rel="shortcut icon" href="{{ asset('assets/img/RR.png') }}">

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<body style="background-color: rgb(255,255,255);color: rgb(0,0,0);">
    <div id="app">

    <div  style="margin-right: 49px;margin-left: 0px;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <div class="d-flex">
                <a class="navbar-brand" href="/">
                    <h1 class="text-capitalize" style="margin-left: 0px;margin-bottom: 0;padding-left: 6px;padding-right: 180px;">RESS</h1>
                </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-left: 11px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="margin-top: 1px;margin-bottom: 0px;"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link active text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/article"><strong>article</strong></a></li>
                    <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/about"><strong>about</strong></a></li>
                    <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/service"><strong>services</strong></a></li>
                    <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/cv"><strong>work reference</strong></a></li>
                    <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/members"><strong>members</strong></a></li>
                    @can('crud')
                    <li class="nav-item" role="presentation" data-bs-hover-animate="jello"><a class="nav-link text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/admin"><strong>admin</strong></a></li>
                    @endcan
                    <li class="nav-item" role="presentation"><a class="nav-link text-uppercase" data-bs-hover-animate="jello" style="font-family:'Source Sans Pro', sans-serif;" href="/contact/create"><strong>Contacts</strong></a></li>
                    @guest
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                        </li>
                                                    @endif
                                                @else
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>
                                                @endguest
                </ul>
        </div>
        </div>
    </nav>

</div>

        <main class="py-4">
            @yield('content')
        </main>
        <div  style="background-color:  #ffffff; color: rgb(0,0,0);">
            <footer class="d-flex" style="height: 122px; font-family: Roboto, sans-serif;opacity: 1; ">
                    <p class="copyright" style="color: black; text-align: center; margin: auto; ">© 2020<br> Renewable Energy And Environmental Sustainable Solutions .<br> Made With <span style="color: red;">❤</span> by <a href="mailto:lennyndungu34@gmail.com">
                            <span style="color: #000000;">Lenny Ndungu</span></a><br /></p>


            </footer>
        </div>
        </div>


        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.min.js')}}"></script>

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
            window.open(encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${encodeURI(document.querySelector("#about > div > div > div > a:nth-child(1) > h2 > div").innerText)}`),"myWindow","height=300,width=300,menubar=no,status=no");
        }
        $("#hide").click(function(){
            $("p").hide();
        });

        $("#show").click(function(){
            $("p").show();
        });
        $(function() {
            document.querySelector("#about > div > div > div > div:nth-child(6) > a:nth-child(2)").href = `https://twitter.com/intent/tweet?url=${document.location}`;
            document.querySelector("#about > div > div > div > div:nth-child(6) > a:nth-child(1)").href = encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${encodeURI(document.querySelector("#about > div > div > div > a:nth-child(1) > h2 > div").innerText)}`);
            document.querySelector("#about > div > div > div > div:nth-child(6) > a:nth-child(1)").addEventListener("click", (x) => {x.preventDefault(); popBwi(); console.log("poping window")});
            // document.querySelector("b#about > div.container > div > div:nth-child(1) > a.link-block-6-copy.w-inline-block).src = `https://tripleoklaw.com/pdfjs/web/viewer.html?file=${document.querySelector("body > div:nth-child(3) > div > div.column-19.w-col.w-col-9 > div > div.columns-8.w-row > div.w-col.w-col-11 > div > p:nth-child(1) > iframe").src}`;
            // }
            /*setTimeout(function(){ document.querySelector(".sharable").style.display = "none"; }, 7000);
            $("body > div:nth-child(3) > div > div.column-19.w-col.w-col-9 > div > div.columns-8.w-row > div.column-18.w-col.w-col-1.exception > div > button").click((x) => {document.querySelector(".sharable").style.display = "block";setTimeout(function(){ document.querySelector(".sharable").style.display = "none"; }, 10000);});*/
        })
    </script>
</body>
</html>
