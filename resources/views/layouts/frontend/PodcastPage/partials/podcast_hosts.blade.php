@if($hosts)

    <div class="site-section">
    <div class="container" data-aos="fade-up">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="font-weight-bold text-black">Behind The Mic</h2>
            </div>
        </div>
        @foreach(array_chunk($hosts, 2) as $chunk)

        <div class="row">
            @foreach($chunk as $host)

            <div class="col-md-6 col-lg-6 mb-5 mb-lg-5">
                <div class="team-member">

                    <!-- DASHBOARD ATTRIBUTE! Host Image -->
                    <img src="{{$host['image_path']}}" alt="Image" class="img-fluid">

                    <div class="text ">
                        <!-- DASHBOARD ATTRIBUTE! Host Name -->
                        <h2 class="mb-2 font-weight-light h4">{{$host['name']}}</h2>
                        <!-- DASHBOARD ATTRIBUTE! Host Profession -->
                        <span class="d-block mb-2 text-white-opacity-05">{{$host['title']}}</span>
                        <!-- DASHBOARD ATTRIBUTE! Host About -->
                        <p class="mb-4">{!! $host['description'] !!}</p>
                        <p>
                            <!-- DASHBOARD ATTRIBUTE! Host Social Media -->
                            <a href="{{$host['facebook_link']}}" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="{{$host['twitter_link']}}" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="{{$host['instagram_link']}}" class="text-white p-2"><span class="icon-instagram"></span></a>
                            <a href="{{$host['linkedIn_link']}}" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>


            @endforeach
        </div>
        @endforeach
    </div>

</div>
@endif
