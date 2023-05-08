<!DOCTYPE html>
<html lang="en">

@include('website.includes.head')

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
            </div>
            <div class="cta d-none d-md-block">
                <a href="{{route('firstpage')}}" class="scrollto">Register/Login</a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    @include('website.includes.header')
    <!-- End Header -->


    <!-- End Cta Section -->
    <main id="main">

        @yield('content')

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('website.includes.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('website.includes.script')


</body>

</html>
