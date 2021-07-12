<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.PodcastPage.partials.header')

<body>

<div class="site-wrap">



@include('layouts.frontend.PodcastPage.partials.navbar')

@yield('top-section')

@yield('site-sections')

@include('layouts.frontend.PodcastPage.partials.podcast_hosts')

@include('layouts.frontend.PodcastPage.partials.podcast_guests')




@include('layouts.frontend.PodcastPage.partials.footer')
</div>

@include('layouts.frontend.PodcastPage.partials.scripts')

</body>

</html>
