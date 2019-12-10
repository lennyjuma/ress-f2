@extends('layouts.app')

@section('content')
    <div  style="background-color: rgb(251,251,251);color: rgb(13,12,12);">
    <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
        <section id="about" class="content-section text-center" style="padding: 0px;padding-top: 0px;padding-bottom: 8px;">
            <section class="d-flex d-xl-flex flex-row justify-content-start align-items-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="services"
                     style="height: 20vh;margin: 0px;margin-top: 0px;padding-bottom: 50px;padding-top: 25px;min-height: 15vh;max-height: 30vh;background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #607d8b;">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col text-left" style="margin-left: -25px;">
                            <h2 class="text-uppercase section-heading" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: top;background-size: cover;margin-left: 24px;padding-left: 6px;font-size: 38px;">contact us</h2>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </section>
    <div class="container">
        <div>
            <form
                method="POST"  enctype="multipart/form-data" action="/contact"
                class="bootstrap-form-with-validation">
                @csrf
                <div class="form-group"><label for="text-input">Company/Individual Name</label><input class="form-control" type="text" id="text-input" name="title"></div>
                <div class="form-group"><label for="password-input">Phone Number</label><input type="text" class="form-control" id="phone-input" name="phone" /></div>
                <div class="form-group"><label for="email-input">Email&nbsp;</label><input type="email" class="form-control" id="email-input" name="email" /></div>
                <div class="form-group"><label for="textarea-input">Your Message </label><textarea class="form-control" id="editor3" name="description"></textarea></div>
                <div class="form-group">
                    <button class="btn btn-primary" type="reset">clear</button>
                    <button class="btn btn-primary" type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>

    </div>

@endsection
