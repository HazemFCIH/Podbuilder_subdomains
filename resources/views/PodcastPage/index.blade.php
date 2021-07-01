@extends('layouts.frontend.PodcastPage.app')
@section('top-section')
    <div class="site-blocks-cover overlay" style="background-image: url({{asset('assets/frontend/images/hero_bg_1.jpg')}});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <!-- RSS ATTRIBUTE! Latest Episode -->
                    <h2 class="text-white font-weight-light mb-2 display-4">Episode 09: How To Create Web Page Using Bootstrap 4
                    </h2>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-4"><span class="text-white-opacity-05"><small>By Mike Smith | 16 September 2017 |
                  1:30:20</small></span></div>
                    <p><a href="episode-page.html" class="btn btn-primary btn-sm py-3 px-4 small">Episode details</a></p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
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

            <!-- RSS ATTRIBUTE! Recent Episode in descending order -->
            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                <!-- RSS ATTRIBUTE! Episode details [image] -->
                <div class="image" style="background-image: url('images/img_1.jpg');"></div>
                <div class="text">
                    <!-- RSS ATTRIBUTE! Episode details [title] -->
                    <h3 class="font-weight-light"><a href="episode-page.html">Episode 08: How To Create Web Page Using Bootstrap
                            4</a></h3>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                    class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
                    <!-- RSS ATTRIBUTE! Episode meta date [description or summary] -->
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat mollitia
                        consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>


            <!-- RSS ATTRIBUTE! Recent Episode in descending order -->
            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                <!-- RSS ATTRIBUTE! Episode details [image] -->
                <div class="image" style="background-image: url('images/img_2.jpg');"></div>
                <div class="text">
                    <!-- RSS ATTRIBUTE! Episode details [title] -->
                    <h3 class="font-weight-light"><a href="episode-page.html">Episode 07: How To Create Web Page Using Bootstrap
                            4</a></h3>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                    class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
                    <!-- RSS ATTRIBUTE! Episode meta date [description] -->
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat mollitia
                        consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>


            <!-- RSS ATTRIBUTE! Recent Episode in descending order -->
            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                <!-- RSS ATTRIBUTE! Episode details [image] -->
                <div class="image" style="background-image: url('images/img_3.jpg');"></div>
                <div class="text">
                    <!-- RSS ATTRIBUTE! Episode details [title] -->
                    <h3 class="font-weight-light"><a href="episode-page.html">Episode 06: How To Create Web Page Using Bootstrap
                            4</a></h3>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                    class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
                    <!-- RSS ATTRIBUTE! Episode meta date [description] -->
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat mollitia
                        consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>


            <!-- RSS ATTRIBUTE! Recent Episode in descending order -->
            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                <!-- RSS ATTRIBUTE! Episode details [image] -->
                <div class="image" style="background-image: url('images/img_4.jpg');"></div>
                <div class="text">
                    <!-- RSS ATTRIBUTE! Episode details [title] -->
                    <h3 class="font-weight-light"><a href="episode-page.html">Episode 05: How To Create Web Page Using Bootstrap
                            4</a></h3>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                    class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
                    <!-- RSS ATTRIBUTE! Episode meta date [description] -->
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat mollitia
                        consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>


            <!-- RSS ATTRIBUTE! Recent Episode in descending order -->
            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                <!-- RSS ATTRIBUTE! Episode details [image] -->
                <div class="image" style="background-image: url('images/img_5.jpg');"></div>
                <div class="text">
                    <!-- RSS ATTRIBUTE! Episode details [title] -->
                    <h3 class="font-weight-light"><a href="episode-page.html">Episode 04: How To Create Web Page Using Bootstrap
                            4</a></h3>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                    class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
                    <!-- RSS ATTRIBUTE! Episode meta date [description] -->
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat mollitia
                        consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                            <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>


        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid">

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
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid">

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
                        <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
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
                        <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
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
                        <img src="images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
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
                        <img src="images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
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
                        <img src="images/person_5.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
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
                        <img src="images/person_6.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
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
