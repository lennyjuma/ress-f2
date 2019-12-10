@extends('layouts.app')

@section('content')
<div>
        <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
            <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col text-left" style="margin-left: -25px;">
                            <h2 class="text-uppercase section-heading" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 38px;">create an article</h2>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div class="container">
            <div>
                <form method="POST"  enctype="multipart/form-data" action="/article">
                    @csrf
                    <div class="form-group">
                        <div id="formdiv">
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Title</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><input type="text"
                                                                          class="form-control @error('title') is-invalid @enderror"
                                                                          style="margin-left:0px;font-family:Roboto, sans-serif;"
                                                                          name="title"
                                                                          value="{{ old('title') }}"
                                                                          autocomplete="title"
                                                                          placeholder="Title" />
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Description</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><textarea
                                        name="description"
                                        autocomplete="description"
                                        class="form-control @error('description') is-invalid @enderror"--}}
                                        value="{{ old('description') }}"
                                        style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                        id="editor2">

                                </textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror</div>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-12 col-md-4 offset-md-4">
                                    <button class="btn btn-light btn-lg" style="font-family:Roboto, sans-serif;" type="reset">Clear </button>
                                    <button class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
