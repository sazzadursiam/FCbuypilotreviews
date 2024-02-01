@extends('frontend.layouts.app')
@section('page_title')
    Home
@endsection

@section('content')
    <!-- ======= About Section ======= -->
    @include('frontend._partials.about')
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    @include('frontend._partials.counts')
    <!-- End Counts Section -->

    <!-- ======= Pricing Section ======= -->
    @include('frontend._partials.pricing')
    <!-- End Pricing Section -->

    <!-- ======= Services Section ======= -->
    @include('frontend._partials.services')
    <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend._partials.contact')
    <!-- End Contact Section -->
@endsection
