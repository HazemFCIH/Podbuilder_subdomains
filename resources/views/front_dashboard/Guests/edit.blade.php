@extends('layouts.pod_dashboard.partials.header')
@section('css-section')
    <!-- Custom styles for this page -->
    <link href="{{asset('assets/pod-dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@extends('layouts.pod_dashboard.app')
@section('top_section')

@endsection
@section('mid_section')
    <!-- Page Heading -->
    <div class="row mb-4">
        <div class="col-md-6">
            <a href="{{route('dashboard.podcast-guests.index')}}" class="h3 primary text-capitalize">
                <i class="fas fa-chevron-left fa-1x ml-1"></i>
                guests
            </a>
        </div>
        <div class="col-md-6">
            <h6 class="text-right text-sm-start">
                <a href="{{URL::to('/')}}/podcasts/{{$podcast_guest->podcast->sub_domain}}" class="text-capitalize">view site
                    <i class="fas fa-external-link-alt fa-1x ml-1"></i>
                </a>
            </h6>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">feature new guest</h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{route('dashboard.podcast-guests.update',$podcast_guest->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('layouts.general._errors')

                <div class="form-group">
                    <label for="image" class="form-label text text-capitalize">guest image
                    </label>
                    <input type="file" class="rounded-0 form-control image-preview" id="exampleImage" name="image_url" value="{{$podcast_guest->image_url}}">
                    <div id="exampleImage" class="form-text text text-xs">
                        Best size 800*800px
                    </div>
                </div>
                <div class="form-group">
                    <img src="{{$podcast_guest->image_path}}" style="width: 100px" class="img-thumbnail show-image">
                </div>
                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">guest
                        name</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="guest name" name="name" value="{{$podcast_guest->name}}" required>
                    <div id="examplePostName" class="form-text text text-xs">
                        guest name
                    </div>
                </div>
                <div class="form-group">
                    <label for="examplePostURL" class="form-label text text-capitalize">guest title</label>
                    <input type="text" class="form-control form-control-user rounded-0"
                           id="examplePostURL" placeholder="Podcast guest" name="title"  value="{{$podcast_guest->title}}" required>

                </div>
                <div class="form-group">
                    <label for="editor" class="form-label text text-capitalize">guest bio</label>
                    <textarea id="editor" class="form-control ckeditor" name="description">
 {!! $podcast_guest->description !!}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="examplePostURL" class="form-label text text-capitalize">guest Episode</label>
                    <input type="url" class="form-control form-control-user rounded-0"
                           id="examplePostURL" placeholder="https://podbuilder/podcasts/podcastname/ep" name="episode_number" value="{{$podcast_guest->episode_number}}" required>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="facebookURL" class="form-label text text-capitalize">guest
                                facebook profile
                            </label>
                            <input type="url" class="form-control form-control-user rounded-0"
                                   id="facebookURL" name="facebook_link" value="{{$podcast_guest->facebook_link}}" placeholder="https://facebook.com/podcast-guest">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="instagramURL" class="form-label text text-capitalize">guest
                                instagram profile
                            </label>
                            <input type="url" class="form-control form-control-user rounded-0"
                                   id="instagramURL"name="instagram_link" value="{{$podcast_guest->instagram_link}}" placeholder="https://instagram.com/podcast-guest">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="linkedInURL" class="form-label text text-capitalize">guest
                                linkedIn profile
                            </label>
                            <input type="url" class="form-control form-control-user rounded-0"
                                   id="linkedInURL" name="linkedIn_link" value="{{$podcast_guest->linkedIn_link}}" placeholder="https://linkin.com/podcast-guest">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="twitterURL" class="form-label text text-capitalize">guest
                                twitter profile
                            </label>
                            <input type="url" class="form-control form-control-user rounded-0"
                                   id="twitterURL" name="twitter_link" value="{{$podcast_guest->twitter_link}}" placeholder="https://twitter.com/podcast-guest">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-9 mb-3 mb-sm-0">
                    </div>
                    <div class="col-sm-3 mt-3 mb-sm-0">
                        <input type="hidden" name="podcast_id" value="{{$podcast_guest->podcast->id}}">

                        <input type="submit" class="btn btn-primary btn-user btn-block text-capitalize" value="feature guest">


                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.pod_dashboard.partials.scripts')
@section('js-section')
    <!-- Page level plugins -->
    <script src="{{asset('assets/pod-dashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/pod-dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('assets/pod-dashboard/js/demo/datatables-demo.js')}}"></script>
    <!-- CKE Editor -->
    <script src="{{asset('assets/pod-dashboard/js/demo/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
