<header class="site-navbar py-4 absolute transparent" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3" data-aos="fade-down">
                <!-- RSS ATTRIBUTE! Podcast Name -->
                <h1><a href="{{route('welcome')}}" class="text-white h2">PODBUILDER</a></h1>
            </div>
            <div class="col-9" data-aos="fade-down">
                <nav class="site-navigation position-relative text-right text-md-right" role="navigation">
                    <div class="d-inline-block ml-md-0 mr-auto py-3"><a href="#"
                                                                        class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none">
                        <li class="active">
                            <a href="{{route('welcome')}}">Home</a>
                        </li>
                        @auth
                            <li><a href="{{route('dashboard.home')}}">Dashboard</a></li>
                            <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <li><a href="{{route('register')}}">Signup</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            @endauth

                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
