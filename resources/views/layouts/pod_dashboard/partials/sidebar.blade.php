<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('welcome')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-microphone-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Podbuilder</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Customize -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSocial" aria-expanded="true" aria-controls="collapseGuest">
            <i class="fas fa-fw fa-grin-alt"></i>
            <span class="text-capitalize">SocialMedia links</span>
        </a>
        <div id="collapseSocial" class="collapse" aria-labelledby="headingGuest" data-parent="#accordionSidebar">
            @foreach($podcasts as $podcast)
                <a class="nav-link" href="{{route('dashboard.social-media.set-index')}}" onclick="event.preventDefault();
                                                     document.getElementById('socialmedia-index-{{$podcast['id']}}').submit();">
                    <form id="socialmedia-index-{{$podcast['id']}}" action="{{ route('dashboard.social-media.set-index') }}" method="POST" class="d-none">
                        <input type="hidden" name="podcast_id" value="{{$podcast['id']}}">
                        @csrf
                    </form>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{$podcast['podcast_title']}}</span></a>
            @endforeach

        </div>

    </li>

    <!-- Nav Item - Customize -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHost" aria-expanded="true" aria-controls="collapseGuest">
            <i class="fas fa-fw fa-grin-alt"></i>
            <span class="text-capitalize">Podcast Creators</span>
        </a>
        <div id="collapseHost" class="collapse" aria-labelledby="headingGuest" data-parent="#accordionSidebar">
            @foreach($podcasts as $podcast)
                <a class="nav-link" href="{{route('dashboard.podcast-hosts.set-index')}}" onclick="event.preventDefault();
                    document.getElementById('hosts-index-{{$podcast['id']}}').submit();">
                    <form id="hosts-index-{{$podcast['id']}}" action="{{ route('dashboard.podcast-hosts.set-index') }}" method="POST" class="d-none">
                        <input type="hidden" name="podcast_id" value="{{$podcast['id']}}">
                        @csrf
                    </form>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{$podcast['podcast_title']}}</span></a>
            @endforeach

        </div>
    </li>

    <!-- Nav Item - Guest -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGuest" aria-expanded="true" aria-controls="collapseGuest">
            <i class="fas fa-fw fa-grin-alt"></i>
            <span class="text-capitalize">Podcast Guests</span>
        </a>
        <div id="collapseGuest" class="collapse" aria-labelledby="headingGuest" data-parent="#accordionSidebar">
            @foreach($podcasts as $podcast)
                <a class="nav-link" href="{{route('dashboard.podcast-guests.set-index')}}" onclick="event.preventDefault();
                    document.getElementById('guests-index-{{$podcast['id']}}').submit();">
                    <form id="guests-index-{{$podcast['id']}}" action="{{ route('dashboard.podcast-guests.set-index') }}" method="POST" class="d-none">
                        <input type="hidden" name="podcast_id" value="{{$podcast['id']}}">
                        @csrf
                    </form>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{$podcast['podcast_title']}}</span></a>
            @endforeach

        </div>
    </li>
    <!-- Nav Item - FAQ -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFaqs" aria-expanded="true" aria-controls="collapseGuest">
            <i class="fas fa-fw fa-grin-alt"></i>
            <span class="text-capitalize">Podcast FAQ</span>
        </a>
        <div id="collapseFaqs" class="collapse" aria-labelledby="headingGuest" data-parent="#accordionSidebar">
            @foreach($podcasts as $podcast)
                <a class="nav-link" href="{{route('dashboard.podcast-faqs.set-index')}}" onclick="event.preventDefault();
                    document.getElementById('faqs-index-{{$podcast['id']}}').submit();">
                    <form id="faqs-index-{{$podcast['id']}}" action="{{ route('dashboard.podcast-faqs.set-index') }}" method="POST" class="d-none">
                        <input type="hidden" name="podcast_id" value="{{$podcast['id']}}">
                        @csrf
                    </form>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{$podcast['podcast_title']}}</span></a>
            @endforeach

        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
