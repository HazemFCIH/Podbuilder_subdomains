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
                <a class="nav-link" href="{{route('dashboard.social-media.index')}}" onclick="event.preventDefault();
                                                     document.getElementById('socialmedia-index-{{$podcast['id']}}').submit();">
                    <form id="socialmedia-index-{{$podcast['id']}}" action="{{ route('dashboard.social-media.index') }}" method="POST" class="d-none">
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
        <a class="nav-link" href="customize.html">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Podcasts Creators</span></a>
    </li>

    <!-- Nav Item - Guest -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-grin-alt"></i>
            <span>Guests</span></a>
    </li>
    <!-- Nav Item - FAQ -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-question"></i>
            <span>FAQ</span></a>
    </li>
    <!-- Nav Item - FAQ -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
