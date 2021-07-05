@extends('layouts.frontend.LandingPage.partials.app')
@section('top-section')
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{asset('assets/frontend/images/hero_bg_2.jpg')}});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="text-white font-weight-light mb-2 display-4">LOGIN</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('mid-section')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block side_image">
                            <img src="{{asset('assets/frontend/images/img_2.jpg')}}" class="img-thumbnail img-fluid border-0 rounded-0 p-0"
                                 alt="...">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" method="post" action="{{route('login')}}">
                                    @method('POST')
                                    @csrf
                                    @include('layouts.general._errors')

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Email Address..." name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="customCheck" name="remember" value="{{ old('remember') ? 'checked' : '' }}">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-info btn-sm py-3 px-4 small btn-block" value="LOGIN">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small text-info" href="{{route('password.request')}}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small text-info" href="{{route('register')}}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
