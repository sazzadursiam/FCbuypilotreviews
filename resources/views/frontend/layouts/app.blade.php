<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Buy Trustpilot Reviews</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicons -->
    <link href="{{ asset('our_assets/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('our_assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('our_assets/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('our_assets/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('our_assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('our_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('our_assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('our_assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">



    <link href="{{ asset('our_assets/assets/css/style.css') }}" rel="stylesheet">

    <!-- ====Bootstrap v5.3.2====== -->
    @yield('custom_css')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('frontend.layouts._header')
    <!-- End Header -->


    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layouts._footer')
    <!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('our_assets/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('our_assets/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('our_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('our_assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('our_assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('our_assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('our_assets/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('our_assets/assets/js/main.js') }}"></script>
    @yield('custom_js')

</body>


</html>
