<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')

<body class="loading" data-layout="detached"
    data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

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


    <!-- Right Sidebar -->
    {{-- <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="compact" value="fixed" id="fixed-check"
                            checked />
                        <label class="form-check-label" for="fixed-check">Scrollable</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="compact" value="condensed"
                            id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                   <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
                        Now</a>
                   </div>
                </div> <!-- end padding-->

            </div>
        </div> --}}

<<<<<<< HEAD
    {{-- <div class="rightbar-overlay"></div> --}}
    <!-- /End-bar -->


    <!-- bundle -->
    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('admin/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('admin/js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->

</body>

=======
        {{-- <div class="rightbar-overlay"></div> --}}
        <!-- /End-bar -->


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
>>>>>>> c81a19cf2d2d314e6e83ad6377204c09cb35214c
</html>
