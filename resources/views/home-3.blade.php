<!-- resources/views/home-3.blade.php -->
@extends('layouts.main')

@section('title', 'Home-3 Page')

@section('content')

@include('includes.navbar2')

<div id="preloader">
	<div class="preloader"><span></span><span></span></div>
</div>

<div class="clearfix"></div>

@php
    $videoPath = base_path('assets/video/Homepage Video.mp4');
    $videoVersion = file_exists($videoPath) ? filemtime($videoPath) : time();
@endphp

<!-- Hero Start -->
<div class="video-hero-section mt-navbar-adjust position-relative">
    <!-- Optimized Video Background -->
    <video id="bgVideo" autoplay muted loop playsinline preload="none" poster="...">
        <source data-src="{{ asset('assets/video/Homepage Video.webm') }}" type="video/mp4">
    </video>

    <div class="position-absolute video-bg-clr top-0 start-0 w-100 h-100"></div>

    <div class="container position-relative" style="z-index: 2;">
        <form action="{{ url('/listing-results') }}" method="GET" class="row justify-content-center align-items-center g-2 search-bar-wrapper">
            <!-- Text Input -->
            <div class="col-lg-6 col-md-5 col-sm-12">
                <input type="text" name="location" class="form-control search-field" placeholder="City, State, Zip or MLS#" />
            </div>

            <!-- Dropdown -->
            <div class="col-lg-3 col-md-4 col-sm-12">
                <select class="form-select search-field category-dropdown" name="propertyType">
                    <option value="">Property Type</option>
                    <option value="house">Any</option>
                    <option value="apartment">Residential</option>
                    <option value="land">Residential Income</option>
                    <option value="lease">Residential Lease</option>
                    <option value="commercial-sale">Commercial Sale</option>
                    <option value="commercial-lease">Commercial Lease</option>
                    <option value="lots">Land and Lots</option>
                    <option value="farms">Farms</option>
                </select>
            </div>

            <!-- Search Button -->
            <div class="col-lg-2 col-md-3 col-sm-12">
                <button type="submit" class="btn btn-primary search-btn w-100">
                    <i class="bi bi-search me-1"></i> SEARCH
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Popular Listings Start -->
<section class="hide-on-mobile">
	<div class="container">

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-11 col-sm-12">
				<div class="secHeading-wrap text-center">
					<h3 class="fw-bold text-dark main-title-heading">Featured Listing</h3>
				</div>
			</div>
		</div>


		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="owl-carousel owl-theme itemslider">

					<!-- includes/Home/home-3/listings2.blade.php -->
					@include('includes.Home.home-3.listings2')

				</div>
			</div>
		</div>

	</div>
</section>
<!-- Popular Listings End -->

<!-- Buying Buddy Quick Search Widget for Testing -->
<div id="MBBv3_QuickSearch" filter="formType:simple2"></div>

<!-- Buying Buddy Script (if not already included in layout) -->
<script async src="https://cdn.buyingbuddy.com/widgets/bb.js?key=AIzaSyCFeHHlboPct7Yj6LmMVDcao4R_qlQNTlc"></script>


<!-- Passionate Section Start -->
<div class="passionate-section pb-5 bg-light text-center">
    <div class="container">
        <div class="wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
            <h2 class="fw-bold mb-4 display-5 text-dark main-title-heading">Passionate About Being Different</h2>
            <p class="lead text-muted mb-5" style="max-width: 800px; margin: 0 auto;">
                At <strong>Prime Real Estate</strong>, we stand out to clients, developers, and professionals alike — thanks to our innovative mindset, industry expertise, and commitment to guiding every transaction with care. Backed by an extensive network across Missouri &amp; Illinois, we deliver results that consistently exceed expectations.
            </p>
        </div>

        <div class="row g-0 g-md-4 mt-4">
          <!-- Card 1 -->
            <div class="col-md-4 wow animate__animated animate__fadeInUp hide-on-mobile-sm" data-wow-delay="0.3s">
                <a href="{{ url('/home-search') }}" class="card h-100 border-0 text-white text-decoration-none position-relative overflow-hidden card-hover shadow-lg" aria-label="Explore Home Search">
                    <img src="{{ asset('assets/img/card-home-search.jpg') }}" alt="Explore home search options at Prime Real Estate" loading="lazy"
                        class="card-img h-100 object-fit-cover" width="100%" height="auto">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50 hover-overlay">
                        <h4 class="fw-bold fs-4 text-uppercase mb-0 text-white">Home Search</h4>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 wow animate__animated animate__fadeInUp hide-on-mobile-sm" data-wow-delay="0.5s">
                <a href="{{ url('/home-valuation') }}" class="card h-100 border-0 text-white text-decoration-none position-relative overflow-hidden card-hover shadow-lg" aria-label="Request Home Valuation">
                    <img src="{{ asset('assets/img/card-home-valuation.png') }}" alt="Get your home valuation with Prime Real Estate" loading="lazy"
                        class="card-img h-100 object-fit-cover" width="100%" height="auto">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50 hover-overlay">
                        <h4 class="fw-bold fs-4 text-uppercase mb-0 text-white">Home Valuation</h4>
                    </div>
                </a>
            </div>


            <!-- Card 3 -->
            <div class="col-md-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                <a href="{{ url('/contact-us') }}" class="card h-100 border-0 text-white text-decoration-none position-relative overflow-hidden card-hover shadow-lg" aria-label="Connect with Agent">
                    <img
                        src="{{ asset('assets/img/card-connect.png') }}"
                        alt="Connect with James Syed and the Prime Real Estate team"
                        loading="lazy"
                        class="card-img h-100 object-fit-cover"
                        width="100%" height="auto">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50 hover-overlay">
                        <h4 class="fw-bold fs-4 text-uppercase mb-0 text-white">Let's Connect</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- About Us Section - SEO Optimized with Lazy-Loaded Video -->
<section class="aboutus-section bg-light pb-3">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <!-- Video Column -->
            <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="position-relative rounded shadow-lg overflow-hidden aboutus-video-wrapper">

                    <!-- Static Thumbnail with Play Button -->
                    <div class="video-thumbnail-wrapper position-relative">
                        <img
                            src="{{ asset('assets/img/about-us-thumbnail.svg') }}"
                            alt="About Us Video Thumbnail"
                            class="img-fluid w-100"
                            id="videoPoster"
                            loading="lazy"
                        >

                        <!-- Custom Play Button -->
                        <button
                            id="customPlayBtn"
                            class="btn custom-play-btn position-absolute top-50 start-50 translate-middle animate__animated animate__pulse animate__infinite"
                            aria-label="Play About Us video">
                            <i class="bi bi-play-fill fs-2 text-white"></i>
                        </button>
                    </div>

                    <!-- Hidden Video initially -->
                    <video
                        id="aboutUsVideo"
                        class="w-100 d-none"
                        preload="metadata"
                        playsinline
                        controls>
                        <source src="{{ asset('assets/video/about-us.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <!-- Text Column -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="aboutus-content ps-lg-4">
                    <h2 class="fw-bold text-dark mb-4 main-title-heading">About Us</h2>
                    <p class="lead text-muted mb-3 text-justify" style="max-width: 800px; margin: 0 auto;">
                        At <strong class="text-dark">Prime Real Estate & Property Management</strong>, our mission is rooted in excellence and client satisfaction. We proudly serve clients across Missouri and Illinois with a deep understanding of regional markets and a commitment to personalized service.
                    </p>
                    <p class="lead text-muted mb-3 text-justify" style="max-width: 800px; margin: 0 auto;">
                        Backed by years of experience and a strong network in the real estate industry, we help our clients navigate property buying, selling, leasing, and management with clarity and confidence.
                    </p>
                    <p class="lead text-muted text-justify" style="max-width: 800px; margin: 0 auto;">
                        Whether you're entering the market for the first time or expanding your investment portfolio, our team is here to guide you every step of the way — ensuring that your goals become reality.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Popular Listings Start -->
<section class="light-top-gredient py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="row align-items-center justify-content-center mb-4">
            <div class="col-xl-7 col-lg-8 col-md-11 text-center">
                <h2 class="fw-bold main-title-heading">For Lease</h2>
            </div>
        </div>

        <!-- Listings Row -->
        <div class="row g-4 justify-content-center">

            <!-- Property 1 -->
            <div class="col-lg-6">
                <article class="property-card shadow-sm rounded overflow-hidden border h-100">
                    <div class="position-relative">
                        <a href="{{ route('single-listing-02', ['title' => Str::slug('Leased, 2 Bedroom 1 Bath Duplex, 1 car attached garage, Lawn Care included')]) }}" target="_blank" aria-label="View property details for Stonington, IL">
                            <img src="{{ asset('assets/img/list-1.jpg') }}"
                                 alt="2 Bedroom 1 Bath Duplex in Stonington, IL"
                                 class="img-fluid w-100 property-img-hover small-property-img"
                                 loading="lazy">
                        </a>
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3">For Lease</span>
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">$750</span>
                    </div>
                    <div class="p-3">
                        <h5 class="fw-semibold mb-2">
                            <a href="{{ route('single-listing-02', ['title' => Str::slug('Leased, 2 Bedroom 1 Bath Duplex, 1 car attached garage, Lawn Care included')]) }}"
                               class="text-decoration-none text-dark">
                                2 Bedroom 1 Bath Duplex, 1 Car Garage, Lawn Care Included
                            </a>
                        </h5>
                        <p class="text-muted mb-2">
                            <i class="bi bi-geo-alt me-1"></i>202 W. Wabash Ave, Stonington, IL 62567
                        </p>
                        <ul class="list-inline text-muted mb-0">
                            <li class="list-inline-item"><i class="bi bi-door-closed me-1"></i>2 Bedrooms</li>
                            <li class="list-inline-item"><i class="bi bi-droplet me-1"></i>1 Bathroom</li>
                            <li class="list-inline-item"><i class="bi bi-car-front me-1"></i>1 Parking</li>
                        </ul>
                    </div>
                </article>
            </div>

            <!-- Property 2 -->
            <div class="col-lg-6">
                <article class="property-card shadow-sm rounded overflow-hidden border h-100">
                    <div class="position-relative">
                        <a href="{{ route('property.mount-olive') }}" target="_blank" aria-label="View property details for Mount Olive, IL">
                            <img src="{{ asset('assets/img/list-2.JPG') }}"
                                 alt="2 Bedroom 1 Bath Duplex in Mount Olive, IL"
                                 class="img-fluid w-100 property-img-hover small-property-img"
                                 loading="lazy">
                        </a>
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3">For Lease</span>
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">$750</span>
                    </div>
                    <div class="p-3">
                        <h5 class="fw-semibold mb-2">
                            <a href="{{ route('property.mount-olive') }}" class="text-decoration-none text-dark">
                                2 Bedroom 1 Bath Duplex, 1 Car Garage, Lawn Care Included
                            </a>
                        </h5>
                        <p class="text-muted mb-2">
                            <i class="bi bi-geo-alt me-1"></i>102-108 S Elder St, Mount Olive, IL 62069
                        </p>
                        <ul class="list-inline text-muted mb-0">
                            <li class="list-inline-item"><i class="bi bi-door-closed me-1"></i>2 Bedrooms</li>
                            <li class="list-inline-item"><i class="bi bi-droplet me-1"></i>1 Bathroom</li>
                            <li class="list-inline-item"><i class="bi bi-car-front me-1"></i>1 Parking</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- Popular Listings End -->

<!-- Featured Neighborhoods Section -->
<div class="pb-5 pt-4 bg-white">
    <div class="container">
        <h3 class="fw-bold text-center mb-5 main-title-heading">Featured Neighborhoods</h3>
        <div class="row gx-0"> {{-- No gutter between cards --}}

            @php
                $communities = [
                    [
                        'slug' => 'chesterfield-wildwood',
                        'name' => 'Chesterfield/Wildwood',
                        'img' => 'community-1.avif',
                        'lat' => '38.6631° N',
                        'lon' => '90.5771° W'
                    ],
                    [
                        'slug' => 'ladue-frontenac-huntleigh',
                        'name' => 'Ladue / Frontenac / Huntleigh',
                        'img' => 'community-2.avif',
                        'lat' => '38.6498° N',
                        'lon' => '90.3807° W'
                    ],
                    [
                        'slug' => 'kirkwood-webster',
                        'name' => 'Kirkwood/Webster',
                        'img' => 'community-3.avif',
                        'lat' => '38.5834° N',
                        'lon' => '90.4068° W'
                    ],
                    [
                        'slug' => 'clayton-university-city',
                        'name' => 'Clayton/University City',
                        'img' => 'community-4.avif',
                        'lat' => '38.6426° N',
                        'lon' => '90.3237° W'
                    ],
                    [
                        'slug' => 'stcharles-ofallon-stlouis',
                        'name' => 'St. Charles/O\'Fallon/ Lake St. Louis',
                        'img' => 'community-5.avif',
                        'lat' => '38.7881° N',
                        'lon' => '90.4974° W'
                    ],
                    [
                        'slug' => 'town-country',
                        'name' => 'Town & Country',
                        'img' => 'community-6.avif',
                        'lat' => '38.6248° N',
                        'lon' => '90.4690° W'
                    ]
                ];
            @endphp

            @foreach($communities as $community)
                <div class="col-lg-4 col-md-6 position-relative">
                    <a href="{{
                        $community['slug'] === 'chesterfield-wildwood'
                            ? route('community.cfw')
                            : (
                                $community['slug'] === 'ladue-frontenac-huntleigh'
                                    ? route('community.ladue')
                                    : url('/community/' . $community['slug'])
                              )
                    }}"
                    class="d-block position-relative community-card text-decoration-none"
                    aria-label="{{ $community['name'] }}">
                        <img src="{{ asset('assets/img/' . $community['img']) }}"
                             alt="{{ $community['name'] }}"
                             class="img-fluid w-100 h-100 community-img"
                             loading="lazy"
                             style="object-fit: cover;">
                        <div class="overlay"></div>
                        <div class="community-caption text-white fw-bold">
                            {{ $community['name'] }}
                        </div>
                        <div class="coordinates-overlay text-white fw-normal small">
                            {{ $community['lat'] }}, {{ $community['lon'] }}
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>


<!-- Why Choose Us Section -->
<section class="py-5 bg-light" style="background: #fefaf7;">
    <div class="container">
        <div class="row align-items-center justify-content-between g-5">

            <!-- Text Column -->
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4 display-5 text-dark main-title-heading">Why Choose Us</h2>
                <p class="text-justify text-muted">
                    At <strong>Prime Real Estate &amp; Property Management</strong>, we’re more than just property agents — we’re your trusted partners in every step of your real estate journey. Whether you're buying, selling, or managing properties, our team provides tailored solutions built on years of experience, market insight, and unmatched dedication.
                </p>
                <p class="text-justify text-muted">
                    With a client-first approach, deep roots in Missouri &amp; Illinois, and award-winning service, we’re committed to helping you make confident, informed decisions. Experience professionalism, transparency, and real results with Prime Real Estate.
                </p>

                <!-- Stats Section -->
                <div class="row mt-4 gy-4 text-center">
                    <div class="col-4">
                        <div class="border rounded p-3 h-100 bg-white">
                            <h5 class="fw-bold text-dark mb-1">4.8</h5>
                            <p class="text-muted mb-0">Zillow Rating</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border rounded p-3 h-100 bg-white">
                            <h5 class="fw-bold text-dark mb-1">5.0</h5>
                            <p class="text-muted mb-0">Realtor.com Rating</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border rounded p-3 h-100 bg-white">
                            <h5 class="fw-bold text-dark mb-1">12+ Years</h5>
                            <p class="text-muted mb-0">Experience</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="col-lg-6">
                <div class="position-relative overflow-hidden rounded shadow">
                    <img src="{{ asset('assets/img/why-choose-us.jpg') }}"
                         alt="Experienced Real Estate Professionals at Prime"
                         class="img-fluid w-100"
                         loading="lazy"
                         style="object-fit: cover; max-height: 460px;">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-5 bg-light hide-on-mobile-sm">
    <div class="container text-center">
        <h2 class="fw-bold text-dark mb-3 main-title-heading">What Our Clients Say</h2>
        <p class="text-muted mb-4">Real experiences from satisfied homeowners and investors</p>

        <div class="owl-carousel owl-theme testimonial-carousel">
            <!-- Testimonial 1 -->
            <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                <p class="mb-3 text-dark text-lg">"James was always open to questions and helped us along every step of the journey. We received calls and texts on random days just to check up on us and made sure our questions were answered. He truly did a fabulous job and was very non-biased along every step of the journey."</p>
                <h6 class="fw-bold text-danger mb-0">sherfinator</h6>
                <small class="text-muted">Staunton, IL</small>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                <p class="mb-3 text-dark text-lg">"I was a first time home buyer and James truly went out of his way to walk me through the process. I can't thank the A-1 Illinois Realty team enough for their knowledge, time and dedication."</p>
                <h6 class="fw-bold text-danger mb-0">user7010</h6>
                <small class="text-muted">Staunton, IL</small>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                <p class="mb-3 text-dark text-lg">"James is a hard worker. He is courteous and informative. He showed us all houses we wanted to see. He worked hard for us getting our property. James is very nice to work with. Thank you James."</p>
                <h6 class="fw-bold text-danger mb-0">rhondamsc28</h6>
                <small class="text-muted">Los Angeles, CA</small>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                <p class="mb-3 text-dark text-lg">"James was amazing, stuck with us through many houses and issues through the process. He explained everything thoroughly, and dealt with my frustrations smoothly. I'll use him again if I ever purchase more property. "</p>
                <h6 class="fw-bold text-danger mb-0">zuser2017</h6>
                <small class="text-muted">Nokomis, IL</small>
            </div>
        </div>
    </div>
</section>

<!-- Sellers & Buyers Section Start -->
<section class="sellers-buyers-section">
    <div class="container-fluid px-0">
        <div class="row g-0">

            <!-- Sellers Block -->
            <div class="col-md-6">
                <div class="position-relative bg-image-section" style="background-image: url('{{ asset('assets/img/sell-house.jpg') }}');">
                    <div class="overlay d-flex flex-column justify-content-center align-items-center text-white text-center px-4 h-100">
                        <h6 class="text-uppercase text-light mb-2">For Sellers</h6>
                        <h2 class="display-5 fw-semibold text-light mb-4">Are You Selling Your Home?</h2>
                        <a href="{{ url('/home-valuation') }}" class="btn btn-outline-light rounded-pill px-4 py-2">Get Estimation</a>
                    </div>
                </div>
            </div>

            <!-- Buyers Block -->
            <div class="col-md-6">
                <div class="position-relative bg-image-section" style="background-image: url('{{ asset('assets/img/buy-house.jpg') }}');">
                    <div class="overlay d-flex flex-column justify-content-center align-items-center text-white text-center px-4 h-100">
                        <h6 class="text-uppercase text-light mb-2">For Buyers</h6>
                        <h2 class="display-5 fw-semibold text-light mb-4">Are You Looking To Buy A Home?</h2>
                        <a href="{{ url('/home-search') }}" class="btn btn-outline-light rounded-pill px-4 py-2">Search Listings</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Our Partners Section -->
<div class="bg-white position-relative pb-5">
    <div class="container">
        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-2 main-title-heading">Our Partners</h2>
        </div>

        <!-- Partner Logos Carousel -->
        <div class="owl-carousel owl-theme" id="partner-carousel">
            @php
                $partners = [
                    ['file' => 'partner1.webp', 'alt' => 'Trusted Home Services'],
                    ['file' => 'partner2.webp', 'alt' => 'Elite Realty Group'],
                    ['file' => 'partner3.webp', 'alt' => 'Mortgage Solutions Inc.'],
                    ['file' => 'partner4.webp', 'alt' => 'Smart Developers LLC'],
                    ['file' => 'partner5.png', 'alt' => 'Global Investment Partners'],
                ];
            @endphp

            @foreach ($partners as $partner)
                <div class="item px-3">
                    <div class="bg-white border rounded shadow-sm p-3 d-flex align-items-center justify-content-center" style="min-height: 100px;">
                        <img
                            src="{{ asset('assets/img/partners/' . $partner['file']) }}"
                            class="img-fluid"
                            alt="{{ $partner['alt'] }}"
                            loading="lazy"
                            style="max-height: 70px; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'"
                        >
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



<script>
    window.addEventListener('load', () => {
        const video = document.getElementById('bgVideo');
        const sources = video.querySelectorAll('source');
        sources.forEach(source => {
            source.src = source.getAttribute('data-src');
        });
        video.load();
    });
</script>


<script>
    window.addEventListener("scroll", function () {
        const header = document.getElementById("custom-header");
        if (window.scrollY > 50) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const playBtn = document.getElementById("customPlayBtn");
        const video = document.getElementById("aboutUsVideo");
        const thumbnailWrapper = document.querySelector(".video-thumbnail-wrapper");

        // When play button is clicked
        playBtn.addEventListener("click", function () {
            thumbnailWrapper.style.display = "none";      // Hide thumbnail wrapper
            video.classList.remove("d-none");             // Show video
            video.play();                                 // Start video
        });

        // When video ends
        video.addEventListener("ended", function () {
            video.classList.add("d-none");                // Hide video again
            thumbnailWrapper.style.display = "block";     // Show thumbnail again
            video.currentTime = 0;                        // Rewind video to start
        });
    });
</script>




	<!-- includes/Home/index/log.blade.php -->
	@include('includes.Home.index.log')


	<!-- includes/Home/index/cart.blade.php -->
	@include('includes.Home.index.cart')


	<!-- includes/Home/index/search.blade.php -->
	@include('includes.Home.index.search')


@include('includes.footer')

@endsection
