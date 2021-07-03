@extends('layouts.frontend.PodcastPage.app')
@section('top-section')
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/hero_bg_2.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <!-- RSS ATTRIBUTE! Latest Episode -->
                    <h2 class="text-white font-weight-light mb-2 display-4">Episode 06: How To Create Web Page Using Bootstrap 4
                    </h2>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-white-opacity-05"><small>By Mike Smith <span
                                    class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('site-sections')
    <div class="container site-section">

        <div class="player mb-5">
            <audio id="player2" preload="none" controls style="max-width: 100%">
                <!-- RSS ATTRIBUTE! Latest Episode .mp3 -->
                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
            </audio>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- RSS ATTRIBUTE! Episode Description & Tags -->
                <p><strong class="font-weight-bold font-weight-bold">Matt:</strong> Impedit, inventore, nesciunt? In
                    laboriosam optio mollitia dolores temporibus deserunt, enim assumenda facilis quas blanditiis qui omnis unde
                    nam nostrum dolorum totam repellendus saepe quidem ad aperiam delectus. Cum, aspernatur!</p>
                <p><strong class="font-weight-bold font-weight-bold">John:</strong> Temporibus molestias in quae quasi officia
                    quis obcaecati dolorem earum dignissimos voluptatum sunt aliquam laborum nesciunt deserunt beatae, ex
                    possimus unde provident voluptates labore, exercitationem eius quisquam perspiciatis! Similique, facilis.
                </p>
            </div>
        </div>

    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bold text-black">Recent Episodes</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- RSS ATTRIBUTE! Recent Episode in descending order -->
                    <div class="d-block podcast-entry bg-white mb-5" data-aos="fade-up">
                        <!-- RSS ATTRIBUTE! Episode details [image] -->
                        <div class="image w-100" style="height: 300px; background-image: url('images/img_2.jpg');"></div>
                        <div class="text w-100">
                            <!-- RSS ATTRIBUTE! Episode details [title] -->
                            <h3 class="font-weight-light"><a href="episode-page.html">Episode 07: How To Create Web Page Using
                                    Bootstrap 4</a></h3>
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
                </div>
                <div class="col-md-6">
                    <!-- RSS ATTRIBUTE! Recent Two Episodes in descending order -->
                    <div class="d-block podcast-entry bg-white mb-5" data-aos="fade-up">
                        <!-- RSS ATTRIBUTE! Episode details [image] -->
                        <div class="image w-100" style="height: 300px; background-image: url('images/img_3.jpg');"></div>
                        <div class="text w-100">
                            <!-- RSS ATTRIBUTE! Episode details [title] -->
                            <h3 class="font-weight-light"><a href="episode-page.html">Episode 07: How To Create Web Page Using
                                    Bootstrap 4</a></h3>
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
                </div>
            </div>
        </div>
    </div>

@endsection
