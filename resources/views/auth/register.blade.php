@extends('layouts.frontend.LandingPage.partials.app')
@section('top-section')
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{asset('assets/frontend/images/hero_bg_2.jpg')}});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="text-white font-weight-light mb-2 display-4">SIGNUP</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('mid-section')
    <div class="col-lg-5 d-none d-lg-block side_image">
        <img src="{{asset('assets/frontend/images/person_5.jpg')}}" class="img-thumbnail border-0 rounded-0 p-0" alt="...">
    </div>
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" action="{{route('register')}}" method="post">

                @method('POST')
                @csrf
                @include('layouts.general._errors')
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user"
                               id="exampleFirstName" name="name" placeholder="User Name" value="{{old('name')}}"/>

                    </div>

                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user"
                           id="exampleInputEmail" name="email" placeholder="Email Address">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user"
                               id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user"
                               id="exampleRepeatPassword" placeholder="Confirm Password" name="password_confirmation">
                    </div>
                </div>

                <input type="submit" class="btn btn-info btn-sm py-3 px-4 small btn-block" value="Signup">
            </form>
            <hr>

        </div>
    </div>
@endsection

