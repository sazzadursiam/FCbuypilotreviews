<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('our_assets/assets/img/favicon.png') }}" alt="">
            {{-- <span>Logo</span> --}}
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                {{-- <li><a class="nav-link scrollto active" href="/#hero">Home</a></li> --}}
                <li><a class="nav-link scrollto active" href="{{ route('home') }}#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Contact</a></li>
                <li><a class="getstarted nav-link scrollto text-white" href="{{ route('home') }}#pricing">Get
                        Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
