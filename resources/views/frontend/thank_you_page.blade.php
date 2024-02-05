@extends('frontend.layouts.app')
@section('page_title')
    Thank You
@endsection
@section('custom_css')
    <style>

    </style>
@endsection

@section('content')
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header mt-4">
                <p>THANK YOU!</p>
                <span>for your purchase.</span>
            </header>
            <div class="row gy-4 justify-content-center mt-2" data-aos="fade-left">

                <div class="col-md-8 col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box d-flex flex-column justify-content-center align-items-center"
                        style="min-height: 350px;">
                        <h3 style="color: #07d5c0;">An Email receipt including the details of your purchase has been sent to
                            the mail address you provided. Please keep it for your records.</h3>
                        {{-- <div class="price"><sup>$</sup>10</div> --}}
                        {{-- <img src="{{ asset('our_assets/assets/img/pricing-free.png') }}" class="img-fluid" alt=""> --}}
                        <h3 style="color: #07d5c0;" class="py-4 mb-0">Contact us on whatsapp</h3>

                        <a target="_blank" class="btn-buy basic_btn"
                            href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to talk about the details of my purchase.">
                            whatsapp
                        </a>
                    </div>
                </div>



            </div>

        </div>

    </section>
@endsection

@section('custom_js')
@endsection
