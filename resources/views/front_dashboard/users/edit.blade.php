@extends('layouts.pod_dashboard.partials.header')
@section('css-section')
    <!-- Custom styles for this page -->
    <link href="{{asset('assets/pod-dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@extends('layouts.pod_dashboard.app')
@section('top_section')

@endsection
@section('mid_section')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-capitalize">Edit Profile</h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{route('dashboard.UpdateProfile')}}" method="post" >
                @csrf
                @method('POST')
                @include('layouts.general._errors')



                <div class="form-group">
                    <label for="examplePostName" class="form-label text text-capitalize">User Name</label>
                    <input type="text" class="form-control form-control-user rounded-0 text-capitalize"
                           id="examplePostName" placeholder="User Name" name="name" value="{{auth()->user()->name}}">
                    <div id="examplePostName" class="form-text text text-xs">
                        user name
                    </div>
                </div>
                <div class="form-group">
                    <label for="examplePostURL" class="form-label text text-capitalize">User Email</label>
                    <input type="text" class="form-control form-control-user rounded-0"
                           id="examplePostURL" placeholder="User Email" name="email" value="{{auth()->user()->email}}">

                </div>
                <div class="form-group">
                    <label for="examplePostURL" class="form-label text text-capitalize">Password</label>
                    <input type="password" class="form-control form-control-user rounded-0"
                           id="examplePostURL" placeholder="password" name="password" >

                </div>
                <div class="form-group">
                    <label for="examplePostURL" class="form-label text text-capitalize">New Password</label>
                    <input type="password" class="form-control form-control-user rounded-0"
                           id="examplePostURL" placeholder="New password" name="new_password" >

                </div>
                <div class="form-group">
                    <label for="examplePostURL" class="form-label text text-capitalize"> Confirm Password</label>
                    <input type="password" class="form-control form-control-user rounded-0"
                           id="examplePostURL" placeholder="Confirm password" name="new_password_confirmation" >

                </div>

                <div class="form-group row">
                    <div class="col-sm-9 mb-3 mb-sm-0">
                    </div>
                    <div class="col-sm-3 mt-3 mb-sm-0">

                        <input type="submit" class="btn btn-primary btn-user btn-block text-capitalize" value="Edit Profile">


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
