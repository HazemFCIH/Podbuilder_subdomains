@extends('layouts.frontend.PodcastPage.app')
@section('top-section')
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{$podcast->podcast_image}});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="text-white font-weight-light mb-2 display-4">About {{$podcast->podcast_title}}</h2>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('site-sections')
    <div class="site-section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
{!! $podcast->podcast_description !!}
                </div>


            </div>
        </div>
    </div>

@endsection
