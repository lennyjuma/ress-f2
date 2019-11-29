@extends('layouts.app')
@section('meta')

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$article->title}}"/>
    <meta property="og:description" content="{!! str_limit($article->description, 125) !!}"/>
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
    <meta name="twitter:site" content="@TripleOKlawLLP"/>....
    <meta property="title" content="Place your data here">
    <meta property="keywords" content="Place your data here">

@endsection
