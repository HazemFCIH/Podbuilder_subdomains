
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <!-- RSS ATTRIBUTE! Podcast Name -->
                    <h3 class="footer-heading mb-4">About {{$podcast->podcast_title}}</h3>
                    <!-- RSS ATTRIBUTE! Podcast Description -->
                    <p>{!! $podcast->podcast_description !!}</p>
                </div>

            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Quick Menu</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <!-- DASHBOARD ATTRIBUTE! Add depending on pages created -->
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Matches</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <!-- DASHBOARD ATTRIBUTE! Add depending on pages created -->
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Membership</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Follow Us</h3>

                        <div>
                            <!-- DASHBOARD ATTRIBUTE! Social Media -->
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Listen On Podcast Platforms</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <!-- RSS ATTRIBUTE! Apple Podcast Link -->
                            <li><a href="#"><img src="{{asset('assets/frontend/images/platform-logos_0003_applepodcastslogo.webp')}}" alt="Image"
                                                 class="img-fluid"></a></li>
                            <!-- RSS ATTRIBUTE! Google Podcast Link -->
                            <li><a href="#"><img src="{{asset('assets/frontend/images/platform-logos_0002_google-podcasts-logo.webp')}}" alt="Image"
                                                 class="img-fluid"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <!-- RSS ATTRIBUTE! Anghami Podcast Link -->
                            <li><a href="#"><img src="{{asset('assets/frontend/images/platform-logos_0004_anghami-logo-colored.webp')}}" alt="Image"
                                                 class="img-fluid"></a></li>
                            <!-- RSS ATTRIBUTE! Deezer Podcast Link -->
                            <li><a href="#"><img src="{{asset('assets/frontend/images/platform-logos_0005_1280px-Deezer_logo.webp')}}" alt="Image"
                                                 class="img-fluid"></li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync="false"
                                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                        /* RSS ATTRIBUTE! Podcast Name */
                    </script> All rights reserved | {{$podcast->podcast_title}} Website is powered
                    by <a href="#" target="_blank">Podbuilder from arcast</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>
