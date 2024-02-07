@extends('frontend.layouts.app')
@section('page_title')
    Home
@endsection
@section('custom_css')
@endsection

@section('content')
    <!-- ======= Pricing Section ======= -->
    @include('frontend._partials.pricing')
    <!-- End Pricing Section -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Enhance Your Reputation: Genuine Trustpilot Reviews for Credibility and Trust!
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Unlock Success: Your Path to Trustworthy Reviews Starts
                        Here!</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#pricing"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('our_assets/assets/img/hero___1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->




    <!-- ======= About Section ======= -->
    @include('frontend._partials.about')
    <!-- End About Section -->



    <!-- ======= Counts Section ======= -->
    @include('frontend._partials.counts')
    <!-- End Counts Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend._partials.contact')
    <!-- End Contact Section -->
@endsection

@section('custom_js')
@endsection
