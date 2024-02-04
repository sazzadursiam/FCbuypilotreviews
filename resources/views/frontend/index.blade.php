@extends('frontend.layouts.app')
@section('page_title')
    Home
@endsection
@section('custom_css')
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
@endsection

@section('content')
    <!-- ======= About Section ======= -->
    @include('frontend._partials.about')
    <!-- End About Section -->

    <!-- ======= Pricing Section ======= -->
    @include('frontend._partials.pricing')
    <!-- End Pricing Section -->

    <!-- ======= Counts Section ======= -->
    @include('frontend._partials.counts')
    <!-- End Counts Section -->



    <!-- ======= Services Section ======= -->
    {{-- @include('frontend._partials.services') --}}
    <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend._partials.contact')
    <!-- End Contact Section -->
@endsection
