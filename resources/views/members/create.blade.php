@extends('layouts.app')

@section('content')
    <div id="page-top" style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
    <section id="about" class="content-section text-center" style="padding: 0px;padding-top: -51px;padding-bottom: 8px;margin-top: -91px;">
        <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services" style="height: 20vh;margin: 0px;margin-top: 90px;padding-bottom: 50px;padding-top: 39px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
            <div class="container">
                <div class="row d-flex">
                    <div class="col text-left" style="margin-left: -25px;">
                        <h2 class="section-heading" style="background-image: url(&quot;assets/img/titlt-bg-small.png&quot;);background-repeat: no-repeat;background-position: %;background-size: cover;padding-left: 13px;">our team</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Add-member</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div>
            <form method="POST"  enctype="multipart/form-data" action="/members">
                @csrf
                <div class="form-group" style="margin-top: -129px;">
                    <div id="formdiv">
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Title</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input type="text"
                                                                      class="form-control @error('name') is-invalid @enderror"
                                                                      style="margin-left:0px;font-family:Roboto, sans-serif;"
                                                                      name="name"
                                                                      value="{{ old('name') }}"
                                                                      autocomplete="name"
                                                                      placeholder="Name" />
                                @error('name')
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
                            <div class="col-md-10 offset-md-1"><input type="text"
                                                                      class="form-control @error('description') is-invalid @enderror"
                                                                      style="margin-left:0px;font-family:Roboto, sans-serif;"
                                                                      name="description"
                                                                      value="{{ old('description') }}"
                                                                      autocomplete="title"
                                                                      placeholder="Description" />
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-4 offset-md-4"><button class="btn btn-light btn-lg" style="font-family:Roboto, sans-serif;" type="reset">Clear </button><button class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">Submit </button></div>
                        </div>
                    </div>
                </div></form>
        </div>
    </div>

    </div>


@endsection
