<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')

<body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    @php

        $success = session('success');
        $warning = session('warning');
        $danger = session('danger');
        if (session()->has('success')) {
            echo '<script>
                toastr.success("' . $success . '");
            </script>';
        }
        if (session()->has('warning')) {
            echo '<script>
                toastr.warning("' . $warning . '");
            </script>';
        }
        if (session()->has('danger')) {
            echo '<script>
                toastr.error("' . $danger . '");
            </script>';
        }

        $errors = '';
        if (session()->has('errors')) {
            foreach (session('errors')->all() as $error) {
                $errors .= '<p>' . $error . '</p>';
            }
            echo '<script>
                toastr.error("' . $errors . '");
            </script>';
        }
        session()->forget('success');
        session()->forget('warning');
        session()->forget('danger');
    @endphp
    <!-- Topbar Start -->
    @include('admin.includes.topbar')
    <!-- end Topbar -->

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.includes.sidebar')
            <!-- Left Sidebar End -->

            <div class="content-page">
                <div class="content">
                    <!-- start page title -->
                    @yield('content')
                </div> <!-- End Content -->

                <!-- Footer Start -->
                @include('admin.includes.footer')
                <!-- end Footer -->

            </div>
            <!-- content-page -->

        </div> <!-- end wrapper-->
    </div>
    <!-- END Container -->
        <!-- bundle -->
        <script src="{{asset('admin/js/vendor.min.js')}}"></script>
        <script src="{{asset('admin/js/app.min.js')}}"></script>

        <!-- third party js -->
        <script src="{{asset('admin/js/vendor/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('admin/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('admin/js/pages/demo.dashboard.js')}}"></script>
        <!-- end demo js-->

    </body>
</html>
