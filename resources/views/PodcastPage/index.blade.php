@extends('layouts.frontend.PodcastPage.app')
@section('top-section')
    <div class="site-blocks-cover overlay" style="background-image: url({{$podcast->podcast_image}});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <!-- RSS ATTRIBUTE! Latest Episode -->
                    <h2 class="text-white font-weight-light mb-2 display-4">{{$episodes[0]['episode_title']}}
                    </h2>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-4"><span class="text-white-opacity-05"><small>{{$episodes[0]['episode_auhtor_name']}} |  {{$episodes[0]['episode_date']}}</small></span></div>
                    <p><a href="{{route('episode.show',[$podcast->sub_domain,0])}}" class="btn btn-primary btn-sm py-3 px-4 small">Episode details</a></p>

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
                {{$podcast->podcast_image}}
                @endif

                    );"></div>
                <div class="text">
                    <!-- RSS ATTRIBUTE! Episode details [title] -->
                    <h3 class="font-weight-light"><a href="{{route('episode.show',[$podcast->sub_domain,($loop->iteration-1)])}}">{{$episode['episode_title']}}</a></h3>
                    <!-- RSS ATTRIBUTE! Episode meta date [author, date, length] -->
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>{{$episode['episode_auhtor_name']}} <span
                                    class="sep">/</span> {{$episode['episode_date']}}</small></span></div>
                    <!-- RSS ATTRIBUTE! Episode meta date [description or summary] -->
{{--                    <p class="mb-4">{!!  $episode['episode_content']!!}</p>--}}
                  <p class="mb-4">{!!  substr($episode['episode_description'], 0, 100)." "."<a href = '".route('episode.show',[$podcast->sub_domain,($loop->iteration-1)])."'>see more</a>"!!} </p>

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


@endsection
