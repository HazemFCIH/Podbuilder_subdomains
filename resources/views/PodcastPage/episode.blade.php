@extends('layouts.frontend.PodcastPage.app')
@section('top-section')
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url( @if(isset($episode['episode_image']))
    {{$episode['episode_image']}}
    @else
    {{$podcast->podcast_image}}
    @endif
);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <!-- RSS ATTRIBUTE! Latest Episode -->
                    <h2 class="text-white font-weight-light mb-2 display-4">{{$episode['episode_title']}}
                    </h2>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-white-opacity-05"><small>{{$episode['episode_author_name']}} <span
                                    class="sep">/</span> {{$episode['episode_date']}}</small></span></div>
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
                <source src="{{$episode['episode_audio']}}" type="audio/mp3">
            </audio>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- RSS ATTRIBUTE! Episode Description & Tags -->
                <p>{!! $episode['episode_description'] !!}</p>
            </div>
        </div>

    </div>


@endsection
