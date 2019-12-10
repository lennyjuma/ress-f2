@extends('layouts.app')

@section('content')
    <div style="background-color: rgb(255,255,255);color: rgb(0,0,0);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Contact us</h2>
                <form
                    method="POST"  enctype="multipart/form-data" action="/contact"
                    @csrf
                    class="bootstrap-form-with-validation">
                    <div class="form-group"><label for="text-input">Company/Individual Name</label><input class="form-control" type="text" id="text-input" name="title"></div>
                    <div class="form-group"><label for="password-input">Phone Number</label><input type="text" class="form-control" id="phone-input" name="phonee" /></div>
                    <div class="form-group"><label for="email-input">Email&nbsp;</label><input type="email" class="form-control" id="email-input" name="email" /></div>
                    <div class="form-group"><label for="textarea-input">Textarea </label><textarea class="form-control" id="cke1" name="description"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary" type="submit">submit</button></div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection
