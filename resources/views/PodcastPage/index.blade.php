@extends('layouts.frontend.PodcastPage.app')
@section('top-section')
    <div class="site-blocks-cover overlay" style="background-image: url({{$podcast['image_path']}});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <!-- RSS ATTRIBUTE! Latest Episode -->
                    <h2 class="text-white font-weight-light mb-2 display-4">{{$episodes[0]['episode_title']}}
                    </h2>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-4"><span class="text-white-opacity-05"><small>{{$episodes[0]['episode_auhtor_name']}} |  {{$episodes[0]['episode_date']}}</small></span></div>
                    <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Episode details</a></p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="{{$episodes[0]['episode_audio']}}" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('site-sections')
    <div class="site-section bg-light">
        <div class="container">

            <div class="row mb-5" data-aos="fade-up">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bold text-black">Recent Episodes</h2>
                </div>
            </div>

            @foreach($episodes as $episode)
            <!-- RSS ATTRIBUTE! Recent Episode in descending order -->
            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                <!-- RSS ATTRIBUTE! Episode details [image] -->
                <div class="image" style="background-image: url(
                @if(isset($episode['episode_image']))
                {{$episode['episode_image']}}
                @else
                {{$podcast['image_path']}}
                @endif

                    );"></div>
                <div class="text">
                    <!-- RSS ATTRIBUTE! Episode details [title] -->
                    <h3 class="font-weight-light"><a href="episode-page.html">{{$episode['episode_title']}}</a></h3>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>{{$episode['episode_auhtor_name']}} <span
                                    class="sep">/</span> {{$episode['episode_date']}}</small></span></div>
                    <!-- RSS ATTRIBUTE! Episode meta date [description or summary] -->
                    <p class="mb-4">{!!  $episode['episode_content']!!}</p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="{{$episode['episode_audio']}}" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>
                @endforeach




        </div>

    </div>

    <div class="site-section">
        <div class="container" data-aos="fade-up">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bold text-black">Behind The Mic</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-5">
                    <div class="team-member">

                        <!-- DASHBOARD ATTRIBUTE! Host Image -->
                        <img src="{{asset('assets/frontend/images/person_1.jpg')}}" alt="Image" class="img-fluid">

                        <div class="text">
                            <!-- DASHBOARD ATTRIBUTE! Host Name -->
                            <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
                            <!-- DASHBOARD ATTRIBUTE! Host Profession -->
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <!-- DASHBOARD ATTRIBUTE! Host About -->
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                                <!-- DASHBOARD ATTRIBUTE! Host Social Media -->
                                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-6 mb-5 mb-lg-5">
                    <div class="team-member">
                        <!-- DASHBOARD ATTRIBUTE! Host Image -->
                        <img src="{{asset('assets/frontend/images/person_2.jpg')}}" alt="Image" class="img-fluid">

                        <div class="text">
                            <!-- DASHBOARD ATTRIBUTE! Host Name -->
                            <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                            <!-- DASHBOARD ATTRIBUTE! Host Profession -->
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <!-- DASHBOARD ATTRIBUTE! Host About -->
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                                <!-- DASHBOARD ATTRIBUTE! Host Social Media -->
                                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-light block-13">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bold text-black">Featured Guests</h2>
                </div>
            </div>
            <div class="nonloop-block-13 owl-carousel">

                <div class="text-center p-3 p-md-5 bg-white">
                    <div class="mb-4">
                        <!-- DASHBOARD ATTRIBUTE! Guest Image -->
                        <img src="{{asset('assets/frontend/images/person_1.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                    </div>
                    <div class="">
                        <!-- DASHBOARD ATTRIBUTE! Guest Name -->
                        <h3 class="font-weight-light h5">Megan Smith</h3>
                        <!-- DASHBOARD ATTRIBUTE! Guest About -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus
                            quos, ea?</p>
                        <p>
                            <!-- DASHBOARD ATTRIBUTE! Guest Social Media -->
                            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                        </p>
                        <!-- DASHBOARD ATTRIBUTE! Featured Episode Guest -->
                        <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Listen Now</a></p>
                    </div>
                </div>

                <div class="text-center p-3 p-md-5 bg-white">
                    <div class="mb-4">
                        <!-- DASHBOARD ATTRIBUTE! Guest Image -->
                        <img src="{{asset('assets/frontend/images/person_2.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                    </div>
                    <div class="">
                        <!-- DASHBOARD ATTRIBUTE! Guest Name -->
                        <h3 class="font-weight-light h5">Megan Smith</h3>
                        <!-- DASHBOARD ATTRIBUTE! Guest About -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus
                            quos, ea?</p>
                        <p>
                            <!-- DASHBOARD ATTRIBUTE! Guest Social Media -->
                            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                        </p>
                        <!-- DASHBOARD ATTRIBUTE! Featured Episode Guest -->
                        <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Listen Now</a></p>
                    </div>
                </div>

                <div class="text-center p-3 p-md-5 bg-white">
                    <div class="mb-4">
                        <!-- DASHBOARD ATTRIBUTE! Guest Image -->
                        <img src="{{asset('assets/frontend/images/person_3.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                    </div>
                    <div class="">
                        <!-- DASHBOARD ATTRIBUTE! Guest Name -->
                        <h3 class="font-weight-light h5">Megan Smith</h3>
                        <!-- DASHBOARD ATTRIBUTE! Guest About -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus
                            quos, ea?</p>
                        <p>
                            <!-- DASHBOARD ATTRIBUTE! Guest Social Media -->
                            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                        </p>
                        <!-- DASHBOARD ATTRIBUTE! Featured Episode Guest -->
                        <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Listen Now</a></p>
                    </div>
                </div>

                <div class="text-center p-3 p-md-5 bg-white">
                    <div class="mb-4">
                        <!-- DASHBOARD ATTRIBUTE! Guest Image -->
                        <img src="{{asset('assets/frontend/images/person_4.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                    </div>
                    <div class="">
                        <!-- DASHBOARD ATTRIBUTE! Guest Name -->
                        <h3 class="font-weight-light h5">Megan Smith</h3>
                        <!-- DASHBOARD ATTRIBUTE! Guest About -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus
                            quos, ea?</p>
                        <p>
                            <!-- DASHBOARD ATTRIBUTE! Guest Social Media -->
                            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                        </p>
                        <!-- DASHBOARD ATTRIBUTE! Featured Episode Guest -->
                        <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Listen Now</a></p>
                    </div>
                </div>

                <div class="text-center p-3 p-md-5 bg-white">
                    <div class="mb-4">
                        <!-- DASHBOARD ATTRIBUTE! Guest Image -->
                        <img src="{{asset('assets/frontend/images/person_5.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                    </div>
                    <div class="">
                        <!-- DASHBOARD ATTRIBUTE! Guest Name -->
                        <h3 class="font-weight-light h5">Megan Smith</h3>
                        <!-- DASHBOARD ATTRIBUTE! Guest About -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus
                            quos, ea?</p>
                        <p>
                            <!-- DASHBOARD ATTRIBUTE! Guest Social Media -->
                            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                        </p>
                        <!-- DASHBOARD ATTRIBUTE! Featured Episode Guest -->
                        <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Listen Now</a></p>
                    </div>
                </div>

                <div class="text-center p-3 p-md-5 bg-white">
                    <div class="mb-4">
                        <!-- DASHBOARD ATTRIBUTE! Guest Image -->
                        <img src="{{asset('assets/frontend/images/person_6.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                    </div>
                    <div class="">
                        <!-- DASHBOARD ATTRIBUTE! Guest Name -->
                        <h3 class="font-weight-light h5">Megan Smith</h3>
                        <!-- DASHBOARD ATTRIBUTE! Guest About -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus
                            quos, ea?</p>
                        <p>
                            <!-- DASHBOARD ATTRIBUTE! Guest Social Media -->
                            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                        </p>
                        <!-- DASHBOARD ATTRIBUTE! Featured Episode Guest -->
                        <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Listen Now</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
