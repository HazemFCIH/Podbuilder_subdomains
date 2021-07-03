
<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-4 absolute transparent" role="banner">

    <div class="container">
        <div class="row align-items-center">


            <div class="col-3" data-aos="fade-down">
                <!-- RSS ATTRIBUTE! Podcast Name -->
                <h1><a href="index.html" class="text-white h2">{{$podcast->podcast_title}}</a></h1>
            </div>
            <div class="col-9" data-aos="fade-down">
                <nav class="site-navigation position-relative text-right text-md-right" role="navigation">
                    <div class="d-inline-block ml-md-0 mr-auto py-3"><a href="#"
                                                                        class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none">
                        <li class="active">
                            <a href="{{route('podcasts.show',$podcast->sub_domain)}}">Home</a>
                        </li>
                        <li><a href="{{route('podcasts.about.index',$podcast->sub_domain)}}">About</a></li>

                    </ul>
                </nav>


            </div>

        </div>
    </div>

</header>
