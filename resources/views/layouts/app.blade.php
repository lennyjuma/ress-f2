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
{{--    service index--}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/-Filterable-Cards-.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Animation-Cards-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Animation-Cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Carousel_Image_Slider-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Carousel_Image_Slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Dot-nav-scroll-with-label-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Dot-nav-scroll-with-label.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Magazine.css') }}">
    <link rel="stylesheet" href="{{ asset('css/PJansari-Accordion-3-Columns.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive-Form-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive-Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-one-B4-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-one-B4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Video-Parallax-Background-v2.css') }}">

{{--    article ya pili--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('"bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&amp;subset=cyrillic">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Calendar-BS4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Calendar-BS4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Competences-Grid---3-Columns---Hover-Effect-Float-Up.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dh-row-text-image-right-responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Header--Menu--Sections.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Pop-Out-Tab.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Top--Right--Left-Navigation-by-Jigar-Mistry.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Vertical-Image-Scroll.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Zig-Zag-Timeline-v3.css')}}">

{{--    article index--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&amp;subset=cyrillic">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Calendar-BS4-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Calendar-BS4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Competences-Grid---3-Columns---Hover-Effect-Float-Up.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dh-row-text-image-right-responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Header--Menu--Sections.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Top--Right--Left-Navigation-by-Jigar-Mistry.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Vertical-Image-Scroll.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Zig-Zag-Timeline-v3.css') }}">
{{--    service index--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css') }}">

{{--footer--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Video-Parallax-Background-v2.css')}}">

{{--   home --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.cs')}}s">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">
{{--    cv--}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&amp;subset=cyrillic">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/-Filterable-Cards-.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Animation-Cards-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Animation-Cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Calendar-BS4-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Calendar-BS4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Carousel_Image_Slider-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Carousel_Image_Slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Competences-Grid---3-Columns---Hover-Effect-Float-Up.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dh-row-text-image-right-responsive.cs') }}">
    <link rel="stylesheet" href="{{ asset('css/Dot-nav-scroll-with-label-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Dot-nav-scroll-with-label.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Header--Menu--Sections.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="{{ asset('css/Magazine.css') }}">
    <link rel="stylesheet" href="{{ asset('css/PJansari-Accordion-3-Columns.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pop-Out-Tab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive-Form-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive-Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-one-B4-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-one-B4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Top--Right--Left-Navigation-by-Jigar-Mistry.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Vertical-Image-Scroll.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Video-Parallax-Background-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Zig-Zag-Timeline-v3.css') }}">
{{--    members index--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet"type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">
{{--    about create--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">

{{--    create members--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">
{{--    create service--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" href="css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">
{{--    create cv--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('"bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">
{{--    contacts--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('"fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">
{{--    about inex--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Animation-Cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel_Image_Slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dot-nav-scroll-with-label-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('"css/Dot-nav-scroll-with-label.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Magazine.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PJansari-Accordion-3-Columns.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Responsive-Form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-one-B4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Team-Presentation---2-Persons---Social-Media-Icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Video-Parallax-Background-v2.css')}}">
{{--    pop up navbar--}}
    <link rel="stylesheet" href=bootstrap/css/bootstrap.min.css">
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
    <link rel="stylesheet" href=fonts/font-awesome.min.css">
    <link rel="stylesheet" href=fonts/ionicons.min.css">
    <link rel="stylesheet" href=css/Fixed-navbar-starting-with-transparency-1.css">
    <link rel="stylesheet" href=css/Fixed-navbar-starting-with-transparency.css">
    <link rel="stylesheet" href=css/-Filterable-Cards-.css">
    <link rel="stylesheet" href=css/Animation-Cards-1.css">
    <link rel="stylesheet" href=css/Animation-Cards.css">
    <link rel="stylesheet" href=css/Article-Clean.css">
    <link rel="stylesheet" href=css/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu.css">
    <link rel="stylesheet" href=css/Calendar-BS4-1.css">
    <link rel="stylesheet" href=css/Calendar-BS4.css">
    <link rel="stylesheet" href=css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href=css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href=css/Carousel.css">
    <link rel="stylesheet" href=css/Competences-Grid---3-Columns---Hover-Effect-Float-Up.css">
    <link rel="stylesheet" href=css/Dark-NavBar.css">
    <link rel="stylesheet" href=css/dh-row-text-image-right-responsive.css">
    <link rel="stylesheet" href=css/Dot-nav-scroll-with-label-1.css">
    <link rel="stylesheet" href=css/Dot-nav-scroll-with-label.css">
    <link rel="stylesheet" href=css/Features-Boxed.css">
    <link rel="stylesheet" href=css/Footer-Clean.css">
    <link rel="stylesheet" href=css/Footer-Dark.css">
    <link rel="stylesheet" href=css/gradient-navbar-1.css">
    <link rel="stylesheet" href=css/gradient-navbar.css">
    <link rel="stylesheet" href=css/Header--Menu--Sections.css">
    <link rel="stylesheet" href=css/Header-Blue.css">
    <link rel="stylesheet" href=css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href=css/Magazine.css">
    <link rel="stylesheet" href=css/Navbar-Centered.css">
    <link rel="stylesheet" href=css/Navigation-Clean.css">
    <link rel="stylesheet" href=css/Navigation-with-Button.css">
    <link rel="stylesheet" href=css/PJansari-Accordion-3-Columns.css">
    <link rel="stylesheet" href=css/Pop-Out-Animated-Nav--Footer-1.css">
    <link rel="stylesheet" href=css/Pop-Out-Animated-Nav--Footer-2.css">
    <link rel="stylesheet" href=css/Pop-Out-Animated-Nav--Footer-3.css">
    <link rel="stylesheet" href=css/Pop-Out-Animated-Nav--Footer.css">
    <link rel="stylesheet" href=css/Pop-Out-Tab.css">
    <link rel="stylesheet" href=css/Responsive-Form-1.css">
    <link rel="stylesheet" href=css/Responsive-Form.css">
    <link rel="stylesheet" href=css/Services.css">
    <link rel="stylesheet" href=css/Team-one-B4-1.css">
    <link rel="stylesheet" href=css/Team-one-B4.css">
    <link rel="stylesheet" href=css/Team-Presentation---2-Persons---Social-Media-Icon.css">
    <link rel="stylesheet" href=css/Timeline.css">
    <link rel="stylesheet" href=css/Top--Right--Left-Navigation-by-Jigar-Mistry.css">
    <link rel="stylesheet" href=css/Vertical-Image-Scroll.css">
    <link rel="stylesheet" href=css/Video-Parallax-Background-v2.css">
    <link rel="stylesheet" href=css/Zig-Zag-Timeline-v3.css">
{{--service index--}}
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="css/Animation-Cards-1.css">
    <link rel="stylesheet" href="css/Animation-Cards.css">
    <link rel="stylesheet" href="css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="css/Carousel.css">
    <link rel="stylesheet" href="css/Dot-nav-scroll-with-label-1.css">
    <link rel="stylesheet" href="css/Dot-nav-scroll-with-label.css">
    <link rel="stylesheet" href="css/Footer-Dark.css">
    <link rel="stylesheet" href="css/gradient-navbar-1.css">
    <link rel="stylesheet" href="css/gradient-navbar.css">
    <link rel="stylesheet" href="css/Magazine.css">
    <link rel="stylesheet" href="css/PJansari-Accordion-3-Columns.css">
    <link rel="stylesheet" href="css/Responsive-Form-1.css">
    <link rel="stylesheet" href="css/Responsive-Form.css">
    <link rel="stylesheet" href="css/Services.css">
    <link rel="stylesheet" href="css/Team-one-B4-1.css">
    <link rel="stylesheet" href="css/Team-one-B4.css">
    <link rel="stylesheet" href="css/Team-Presentation---2-Persons---Social-Media-Icon.css">
    <link rel="stylesheet" href="css/Timeline.css">
    <link rel="stylesheet" href="css/Video-Parallax-Background-v2.css">
</head>
<body style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
    <div id="app">
{{--        <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">RESS</a>--}}
{{--                <button data-toggle="collapse"--}}
{{--                        class="navbar-toggler navbar-toggler-right"--}}
{{--                        data-target="#navbarResponsive"--}}
{{--                        type="button" aria-controls="navbarResponsive"--}}
{{--                        aria-expanded="false"--}}
{{--                        aria-label="Toggle navigation"--}}
{{--                        value="Menu"><i class="fa fa-bars"></i>--}}
{{--                </button>--}}
{{--                <div class="collapse navbar-collapse" id="navbarResponsive">--}}
{{--                    <ul class="nav navbar-nav ml-auto">--}}
{{--                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="{{ url('/about') }}">About</a></li>--}}
{{--                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="{{ url('/service') }}">Services</a></li>--}}
{{--                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="{{ url('/cv') }}">Work Reference</a></li>--}}
{{--                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="{{ url('/members') }}">Members</a></li>--}}
{{--                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Contact Us</a></li>--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}


        <nav style="margin-bottom: -25px" class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container">
                <div class="d-flex flex-row">
                    <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><h1  style="color: rgb(0,0,0);font-size: 50px;">ress</h1></a>
{{--                    <a href="{{ url('/') }}">--}}
{{--                        <h1  style="color: rgb(0,0,0);font-size: 50px;">ress</h1>--}}
{{--                    </a>--}}
                </div>
                <div class="d-flex flex-row"><button data-toggle="collapse" class="navbar-toggler align-self-center" data-target="#navcol-1" style="width: 54px;margin-left: 0px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                <div
                    class="collapse navbar-collapse justify-content-center" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active text-uppercase" style="font-family:'Source Sans Pro', sans-serif;" href="/article">Article </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="/about">About </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="/service">Services </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="/cv">Work Reference </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="/members">Members </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="/contact">Contact </a></li>
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
                    <p class="copyright" style="opacity: 1;">Renewable Energy And Environmental Sustainable Solutions © 2020.<br> Engineered With <span style="color: red;">❤</span> by <a href="mailto:lennyndungu34@gmail.com"><span
                                style="color: #000000;">Lenny Ndungu</span></a><br /></p></div>
            </footer>
        </div>
        </div>



{{--    contacts--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.j')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.j')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--    about index--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bs-animation.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--service index--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('') }}js/grayscale.js') }}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js') }}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js') }}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js') }}"></script>
{{--    create cv--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--            cv--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--    create members--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('"js/Video-Parallax-Background-v2.js')}}"></script>
{{--navabar --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js') }}"></script>
    <script src="{{ asset('js/grayscale.js') }}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js') }}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js') }}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js') }}"></script>
{{--home--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--    create service--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--footer--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="js/-Filterable-Cards-.js"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--    create about--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js') }}"></script>
    <script src="{{ asset('js/grayscale.js') }}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js') }}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js') }}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js') }}"></script>

{{--            memebers--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('"js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--cke4--}}
    <script src="{{asset('ckeditor4/ckeditor.js')}}"></script>
    <script src="{{asset('js/cke.js')}}"></script>


{{--article index--}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bs-init.js')}}')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{asset('js/grayscale.js')}}"></script>
    <script src="{{asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{asset('js/Video-Parallax-Background-v2.js')}}"></script>

{{--article ya pili--}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('"bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js')}}"></script>
    <script src="{{ asset('js/grayscale.js')}}"></script>
    <script src="{{ asset('js/Dot-nav-scroll-with-label.js')}}"></script>
    <script src="{{ asset('js/PJansari-Accordion-3-Columns.js')}}"></script>
    <script src="{{ asset('js/Video-Parallax-Background-v2.js')}}"></script>
{{--pop up navbar--}}
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="js/-Filterable-Cards-.js"></script>
    <script src="js/grayscale.js"></script>
    <script src="js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu-1.js"></script>
    <script src="js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu-2.js"></script>
    <script src="js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu.js"></script>
    <script src="js/Dot-nav-scroll-with-label.js"></script>
    <script src="js/Fixed-navbar-starting-with-transparency.js"></script>
    <script src="js/Navbar---Color-Change-on-Scroll.js"></script>
    <script src="js/PJansari-Accordion-3-Columns.js"></script>
    <script src="js/Pop-Out-Animated-Nav--Footer.js"></script>
    <script src="js/Video-Parallax-Background-v2.js"></script>
{{--navy--}}
    <script src=js/jquery.min.js"></script>
    <script src=bootstrap/js/bootstrap.min.js"></script>
    <script src=js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src=js/-Filterable-Cards-.js"></script>
    <script src=js/grayscale.js"></script>
    <script src=js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu-1.js"></script>
    <script src=js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu-2.js"></script>
    <script src=js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu.js"></script>
    <script src=js/Dot-nav-scroll-with-label.js"></script>
    <script src=js/Fixed-navbar-starting-with-transparency.js"></script>
    <script src=js/Navbar---Color-Change-on-Scroll.js"></script>
    <script src=js/PJansari-Accordion-3-Columns.js"></script>
    <script src=js/Pop-Out-Animated-Nav--Footer.js"></script>
    <script src=js/Video-Parallax-Background-v2.js"></script>

{{--  service index   --}}
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="js/-Filterable-Cards-.js"></script>

{{--aos--}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
