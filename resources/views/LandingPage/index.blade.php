@extends('layouts.frontend.LandingPage.partials.app')
@section('top-section')
    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-white font-weight-light mb-2 display-4">Podbuilder is your powerful tool to build your
            podcast presence
        </h2>
        <p><a href="login.html" class="btn btn-info btn-sm py-3 px-4 mt-5 small">Create my Podsite</a></p>
    </div>
@endsection
@section('mid-section')
    <div class="col-lg-5 d-none d-lg-block side_image">
        <img src="{{asset('assets/frontend/images/person_1.jpg')}}" class="img-thumbnail border-0 rounded-0 p-0" alt="...">
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 text-capitalize">create my podcast website</h1>
            </div>
            <form class="user">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputRss"
                           aria-describedby="rss" placeholder="ENTER PODCAST RSS FEED...">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                           aria-describedby="emailHelp" placeholder="ENTER THE EMAIL ASSOCIATED WITH RSS...">
                </div>
                <p><a href="index.html" class="btn btn-info btn-sm py-3 px-4 small btn-block">Create my
                        Podsite</a>
                </p>

            </form>
        </div>
    </div>
@endsection
