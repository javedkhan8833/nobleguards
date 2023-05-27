<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">


@include('website.includes.head')

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:info@nobleguards.co.uk">info@nobleguards.co.uk</a>
                <i class="bi bi-phone-fill phone-icon"></i>+44 7916 627255, +44 7767 818809
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
