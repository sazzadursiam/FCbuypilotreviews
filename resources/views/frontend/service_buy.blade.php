@extends('frontend.layouts.app')
@section('page_title')
    Buy Now
@endsection
@section('custom_css')
    <style>
        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #86b7fe;
            outline: 0;
            box-shadow: unset;
        }

        .form-select:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #86b7fe;
            outline: 0;
            box-shadow: unset;
        }
    </style>
@endsection

@section('content')
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">
            <div class="row gy-4 justify-content-start mt-5" data-aos="fade-left">

                <div class="col-lg-3 col-md-6">
                    <div class="row" id="package_section">
                        @if ($slug == 'basic-plan')
                            @php
                                $price = 10;
                                $category = 'Basic Plan';
                                $package_title = '1 TrustPilot Review';
                            @endphp
                            <div class="col-12" data-aos="zoom-in" data-aos-delay="100">
                                <div class="box">
                                    <h3 style="color: #07d5c0;">Basic Plan</h3>
                                    <div class="price"><sup>$</sup>10</div>
                                    <h3 style="color: #07d5c0;" class="py-4 mb-0">1 TrustPilot Review</h3>
                                    <ul>

                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Start Within 24 hours
                                        </li>
                                        <li>
                                            Custom Country
                                        </li>
                                        <li>
                                            Non Drop Reviews Only
                                        </li>
                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Permanent
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        @elseif($slug == 'starter-plan')
                            @php
                                $price = 50;
                                $category = 'Starter Plan';
                                $package_title = '5 TrustPilot Review';
                            @endphp
                            <div class="col-12" data-aos="zoom-in" data-aos-delay="200">
                                <div class="box">
                                    <span class="featured">Featured</span>
                                    <h3 style="color: #65c600;">Starter Plan</h3>
                                    <div class="price"><sup>$</sup>50</div>
                                    <h3 style="color: #65c600;" class="py-4 mb-0">5 TrustPilot Review</h3>
                                    <ul>
                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Start Within 24 hours
                                        </li>
                                        <li>
                                            Custom Country
                                        </li>
                                        <li>
                                            Non Drop Reviews Only
                                        </li>
                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Permanent
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        @elseif($slug == 'business-plan')
                            @php
                                $price = 100;
                                $category = 'Business Plan';
                                $package_title = '10 TrustPilot Review';
                            @endphp
                            <div class="col-12" data-aos="zoom-in" data-aos-delay="300">
                                <div class="box">
                                    <span class="featured" style="background:#ff901c;">Best</span>
                                    <h3 style="color: #ff901c;">Business Plan</h3>
                                    <div class="price"><sup>$</sup>100</div>
                                    <h3 style="color: #ff901c;" class="py-4 mb-0">10 TrustPilot Review</h3>
                                    <ul>
                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Start Within 24 hours
                                        </li>
                                        <li>
                                            Custom Country
                                        </li>
                                        <li>
                                            Non Drop Reviews Only
                                        </li>
                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Permanent
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        @elseif($slug == 'ultimate-plan')
                            @php
                                $price = 180;
                                $category = 'Ultimate Plan';
                                $package_title = '20 TrustPilot Review';
                            @endphp
                            <div class="col-12" data-aos="zoom-in" data-aos-delay="400">
                                <div class="box">
                                    <h3 style="color: #ff0071;">Ultimate Plan</h3>
                                    <div class="price"><sup>$</sup>180</div>
                                    <h3 style="color: #ff0071;" class="py-4 mb-0">20 TrustPilot Review</h3>
                                    <ul>
                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Start Within 24 hours
                                        </li>
                                        <li>
                                            Custom Country
                                        </li>
                                        <li>
                                            Non Drop Reviews Only
                                        </li>
                                        <li>
                                            Custom Content
                                        </li>
                                        <li>
                                            Permanent
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-9 col-md-6">
                    <div class="row" style="padding: 0 15px;">
                        <div class="col-12 pb-5" data-aos="zoom-in" data-aos-delay="100"
                            style="box-shadow:0px 0 5px rgba(1, 41, 112, 0.08); border-radius:5px;">
                            <div class="row">
                                <div class="col-12">
                                    <p class="my-3">Please complete this form before paying</p>
                                </div>
                            </div>
                            <form action="{{ route('pay-by-crypto') }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to Pay?')">
                                @csrf
                                <div class="row">

                                    <div class="col-md-4 mb-1">
                                        <label for="customer_name">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="customer_name" id="customer_name" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="customer_phone">Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="customer_phone" id="customer_phone" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="customer_email">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="customer_email" id="customer_email" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <label for="customer_message">Message</label>
                                        <textarea name="customer_message" id="customer_message" rows="4" class="form-control" placeholder="Optional"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label for="customer_business_link">Your Business Link</label>
                                        <input type="text" name="customer_business_link" id="customer_business_link"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="package_change">Change Package</label>
                                        <select name="" id="package_change" class="form-select">
                                            <option value="">Choose Package</option>
                                            <option value="basic-plan" data-price="10">Basic Plan / 1 TrustPilot Review / $
                                                10
                                            </option>
                                            <option value="starter-plan" data-price="50">Starter Plan / 5 TrustPilot
                                                Review
                                                / $
                                                50
                                            </option>
                                            <option value="business-plan" data-price="100">Business Plan / 10 TrustPilot
                                                Review
                                                / $
                                                100
                                            </option>
                                            <option value="ultimate-plan" data-price="180">Ultimate Plan / 20 TrustPilot
                                                Review
                                                / $
                                                180
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <h5>Total Amount: <b>$</b> <b id="package_total_price">
                                                @if ($slug == 'basic-plan')
                                                    10
                                                @elseif($slug == 'starter-plan')
                                                    50
                                                @elseif($slug == 'business-plan')
                                                    100
                                                @elseif($slug == 'ultimate-plan')
                                                    180
                                                @endif
                                            </b></h5>
                                        <input type="hidden" name="amount" id="amount" value="{{ $price }}">
                                        <input type="hidden" name="category" id="category"
                                            value="{{ $category }}">
                                        <input type="hidden" name="package_title" id="package_title"
                                            value="{{ $package_title }}">
                                    </div>
                                    <div class="col-6 text-end">
                                        <button type="submit" class="btn btn-md btn-primary px-5 text-white">Pay
                                            Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection

@section('custom_js')
    <script>
        $("#package_change").change(function(e) {
            let selected_package_total_price = $(this).find(':selected').attr('data-price');
            $("#package_total_price").text(selected_package_total_price);

            let package_slug = $(this).val();

            let basic_plan = `
            <div class="col-12" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3 style="color: #07d5c0;">Basic Plan</h3>
                            <div class="price"><sup>$</sup>10</div>
                            <h3 style="color: #07d5c0;" class="py-4 mb-0">1 TrustPilot Review</h3>
                            <ul>

                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Start Within 24 hours
                                </li>
                                <li>
                                    Custom Country
                                </li>
                                <li>
                                    Non Drop Reviews Only
                                </li>
                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Permanent
                                </li>

                            </ul>
                        </div>
                    </div>
            `;
            let starter_plan = `
            <div class="col-12" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #65c600;">Starter Plan</h3>
                            <div class="price"><sup>$</sup>50</div>
                            <h3 style="color: #65c600;" class="py-4 mb-0">5 TrustPilot Review</h3>
                            <ul>
                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Start Within 24 hours
                                </li>
                                <li>
                                    Custom Country
                                </li>
                                <li>
                                    Non Drop Reviews Only
                                </li>
                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Permanent
                                </li>

                            </ul>

                        </div>
                    </div>
            `;
            let business_plan = `
            <div class="col-12" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <span class="featured" style="background:#ff901c;">Best</span>
                            <h3 style="color: #ff901c;">Business Plan</h3>
                            <div class="price"><sup>$</sup>100</div>
                            <h3 style="color: #ff901c;" class="py-4 mb-0">10 TrustPilot Review</h3>
                            <ul>
                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Start Within 24 hours
                                </li>
                                <li>
                                    Custom Country
                                </li>
                                <li>
                                    Non Drop Reviews Only
                                </li>
                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Permanent
                                </li>
                            </ul>

                        </div>
                    </div>
            `;
            let ultimate_plan = `
            <div class="col-12" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #ff0071;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>180</div>
                            <h3 style="color: #ff0071;" class="py-4 mb-0">20 TrustPilot Review</h3>
                            <ul>
                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Start Within 24 hours
                                </li>
                                <li>
                                    Custom Country
                                </li>
                                <li>
                                    Non Drop Reviews Only
                                </li>
                                <li>
                                    Custom Content
                                </li>
                                <li>
                                    Permanent
                                </li>

                            </ul>

                        </div>
                    </div>
            `;

            if (package_slug == "basic-plan") {

                $("#package_section").html(basic_plan);
                $("#amount").val(10);
                $("#category").val("Basic Plan");
                $("#package_title").val("1 TrustPilot Review");

            } else if (package_slug == "starter-plan") {
                $("#package_section").html(starter_plan);
                $("#amount").val(50);
                $("#category").val("Starter Plan");
                $("#package_title").val("5 TrustPilot Review");

            } else if (package_slug == "business-plan") {
                $("#package_section").html(business_plan);
                $("#amount").val(100);
                $("#category").val("Business Plan");
                $("#package_title").val("10 TrustPilot Review");

            } else if (package_slug == "ultimate-plan") {
                $("#package_section").html(ultimate_plan);
                $("#amount").val(180);
                $("#category").val("Ultimate Plan");
                $("#package_title").val("20 TrustPilot Review");
            }


        });
    </script>
@endsection
