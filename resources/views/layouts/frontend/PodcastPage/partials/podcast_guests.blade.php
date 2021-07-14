<div class="site-section bg-light block-13">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="font-weight-bold text-black">Featured Guests</h2>
            </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">
            @if(isset($guests))
@foreach($guests as $guest)
                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <!-- DASHBOARD ATTRIBUTE! Guest Image -->
                            <img src="{{$guest->image_path}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <!-- DASHBOARD ATTRIBUTE! Guest Name -->
                            <h3 class="font-weight-light h5">{{$guest->name}}</h3>
                            <h4 class="font-weight-light h5">{{$guest->title}}</h4>
                            <!-- DASHBOARD ATTRIBUTE! Guest About -->
                            <p>{!! $guest->description !!}</p>
                            <p>
                                <!-- DASHBOARD ATTRIBUTE! Guest Social Media -->
                                <a href="{{$guest->facebook_link}}" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="{{$guest->twitter_link}}" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="{{$guest->linkedIn_link}}" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                <a href="{{$guest->instagram_link}}" class="text-black p-2"><span class="icon-instagram"></span></a>
                            </p>
                            <!-- DASHBOARD ATTRIBUTE! Featured Episode Guest -->
                            <p><a href="{{$guest->episode_number}}" class="btn btn-primary btn-sm py-3 px-4 small">Listen Now</a></p>
                        </div>
                    </div>

                @endforeach
            @endif


        </div>
    </div>
</div>
