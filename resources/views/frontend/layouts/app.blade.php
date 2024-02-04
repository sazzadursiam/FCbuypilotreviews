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
    <style>
        .basic_btn {
            border: 1px solid #07d5c0;
            color: #07d5c0;
        }

        .basic_btn:hover {
            background: #07d5c0;
            color: #ffffff;
        }

        .starter_btn {
            border: 1px solid #65c600;
            color: #65c600;
        }

        .starter_btn:hover {
            background: #65c600;
            color: #ffffff;
        }

        .business_btn {
            border: 1px solid #ff901c;
            color: #ff901c;
        }

        .business_btn:hover {
            background: #ff901c;
            color: #ffffff;
        }

        .ultimate_btn {
            border: 1px solid #ff0071;
            color: #ff0071;
        }

        .ultimate_btn:hover {
            background: #ff0071;
            color: #ffffff;
        }

        .hero .btn-get-started:hover {
            margin-top: 30px;
            line-height: 0;
            padding: 15px 40px;
            border-radius: 4px;
            transition: 0.5s;
            color: #fff;
            background: #012970;
            box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
        }
    </style>
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
