@extends('layouts.app')

@section('content')
<section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
        <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div class="col text-left" style="margin-left: -25px;">
                        <h2 class="text-uppercase section-heading" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 30px;">{{$contact->title}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <h2 class="text-uppercase"  style="font-size: 25px;"><span style="text-decoration: underline;">phone number</span></h2>

                        <h2 class="text-uppercase"  style="font-size: 15px;">{{$contact->phone}}</h2>

                        <h2 class="text-uppercase"  style="font-size: 25px;"><span style="text-decoration: underline;">email address</span></h2>
                        <p style="color: rgb(0,0,0);font-size: 20px;">{!! $contact->email !!}</p>

                    <h2 class="text-uppercase" title="Click To Read More" style="font-size: 25px;"><span style="text-decoration: underline;">The message</span></h2>
                    <p style="color: rgb(0,0,0);font-size: 20px;">{!! $contact->description !!}</p>
                    </div>
            </div>
        </div>
    </section>
@stop
