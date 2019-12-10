@extends('layouts.app')

@section('content')
<div>
        <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
            <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col text-left" style="margin-left: -25px;">
                            <h2 class="text-uppercase section-heading" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 38px;">edit work reference</h2>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div class="container">
            <div>
                <form>
                    <div class="form-group">
                        <div id="formdiv">
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Title</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" name="name" placeholder="Name"></div>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Duration</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" name="name" placeholder="Name"></div>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Description</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" name="name" placeholder="Name"></div>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Duties</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" name="name" placeholder="Name"></div>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Achievements</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" name="name" placeholder="Name"></div>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-12 col-md-4 offset-md-4"><button class="btn btn-light btn-lg" style="font-family:Roboto, sans-serif;" type="reset">Clear </button><button class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">Submit </button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
