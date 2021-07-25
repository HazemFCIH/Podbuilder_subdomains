@extends('layouts.frontend.PodcastPage.app')
@section('top-section')
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{asset('assets/frontend/images/hero_bg_1.jpg')}});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="text-white font-weight-light mb-2 display-4">FAQ</h2>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('site-sections')

    <div class="site-section bg-light">
        <div class="container">
@foreach($podcast->podcastFaqs as $faq)
            <div class="d-block d-md-flex podcast-entry bg-white mb-3" data-aos="fade-up">
                <!-- DASHBOARD ATTRIBUTE! Question Image -->
                <div class="image" style="background-image: url({{$faq->image_path}});"></div>
                <div class="text">
                    <!-- DASHBOARD ATTRIBUTE! Question Head -->
                    <h3 class="font-weight-light text-info">{{$faq->name}}</h3>
                    <!-- DASHBOARD ATTRIBUTE! Question Answer -->
                    <p class="mb-4">{!! $faq->description !!}</p>
                </div>
            </div>
            @endforeach






        </div>
    </div>


@endsection
