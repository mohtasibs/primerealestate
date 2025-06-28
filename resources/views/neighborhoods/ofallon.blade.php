@extends('layouts.main')

@section('title', 'OFallon')
@section('meta_description', "Discover beautiful homes in O'Fallon, IL – a growing community with charm and convenience.")

@section('content')

@include('includes.navbar2')

<div id="preloader" aria-hidden="true">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- Hero Section -->
<section class="neighborhood-hero-img position-relative text-white text-center d-flex align-items-center justify-content-center">
    <img src="{{ asset('assets/img/community-9.png') }}"
         alt="Glen Carbon, IL"
         class="img-fluid w-100 h-100 position-absolute top-0 start-0 object-fit-cover"
         style="z-index: 0;" loading="lazy">
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <div class="container position-relative z-2 py-5">
        <p class="text-uppercase fw-semibold small text-white">Welcome To</p>
        <h1 class="display-4 fw-bold text-white">O'Fallon</h1>
        <p class="mb-4 text-white">38.5922° N, 89.9112° W</p>
        <a href="#featured-properties" class="neighborhood-scroll-btn" aria-label="Scroll Down">
            <i class="bi bi-chevron-down fs-4"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about-neighborhood" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Welcome to O'Fallon</h2>
        <div class="row g-4 justify-content-center align-items-stretch">
            @php
                $ofallonImages = [
                    'ofallon-1.png',
                    'ofallon-2.jpeg',
                ];
            @endphp

            @foreach($ofallonImages as $img)
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="w-100 shadow rounded overflow-hidden" style="height: 380px;">
                        <img src="{{ asset('assets/img/' . $img) }}"
                             alt="O'Fallon Neighborhood Image"
                             class="w-100 h-100"
                             loading="lazy"
                             style="object-fit: cover;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




<!-- Featured Properties -->
<section id="featured-properties" class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-semibold text-center mb-3 pb-4">Featured Properties</h3>
        <div id="MBBv3_FeaturedGallery" filter="mls_id:mo294+listing_status:active,active-rental+city:o'fallon+representation_type:any_listing+limit:12+order:price"></div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container-fluid p-0">
        <iframe
            src="https://www.google.com/maps?q=38.592272,-89.911212&z=13&output=embed"
            width="100%"
            height="500"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>


<!-- Contact With Us Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                <img src="{{ asset('assets/img/contact-illustration.png') }}" alt="Contact Illustration"
                     class="img-fluid rounded shadow-sm contact-illustration-small">
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="fw-bold mb-3 text-black">Get In Touch</h3>
                <p class="mb-4 text-black fs-6">
                    Whether you're buying, selling, or just exploring your options, our team is here to support you every step of the way. Reach out to us to start your real estate journey with confidence.
                </p>
                <div class="col-12 col-md-8 col-lg-6 px-0 mx-auto mx-lg-0">
                    <a href="{{ url('/contact-us') }}" class="btn no-hover w-100" target="_blank" role="button">
                        Contact Us <i class="fa-solid fa-paper-plane ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection
