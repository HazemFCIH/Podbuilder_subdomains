<!DOCTYPE html>
<html lang="en">
@include('layouts.pod_dashboard.partials.header')

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.pod_dashboard.partials.sidebar')
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->

                <!-- Topbar Navbar -->
@include('layouts.pod_dashboard.partials.navbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    @yield('top_section')
                </div>
                <!-- Content Row -->
                @yield('mid_section')

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
@include('layouts.pod_dashboard.partials.footer')
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@include('layouts.pod_dashboard.partials.scripts')
</body>

</html>
