@extends('layouts.main')

@section('title', 'Edwardsville')
@section('meta_description', 'Explore vibrant community living in Edwardsville with beautiful homes and scenic neighborhoods.')

@section('content')

@include('includes.navbar2')

<div id="preloader" aria-hidden="true">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- Hero Section -->
<section class="neighborhood-hero-img position-relative text-white text-center d-flex align-items-center justify-content-center">
    <img src="{{ asset('assets/img/community-7.jpeg') }}"
         alt="Edwardsville"
         class="img-fluid w-100 h-100 position-absolute top-0 start-0 object-fit-cover"
         style="z-index: 0;" loading="lazy">
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <div class="container position-relative z-2 py-5">
        <p class="text-uppercase fw-semibold small text-white">Welcome To</p>
        <h1 class="display-4 fw-bold text-white">Edwardsville</h1>
        <p class="mb-4 text-white">38.8114° N, 89.9532° W</p>
        <a href="#featured-properties" class="neighborhood-scroll-btn" aria-label="Scroll Down">
            <i class="bi bi-chevron-down fs-4"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about-neighborhood" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Welcome to Edwardsville </h2>
        <div class="row g-4">
            @php
                $ladueImages = [
                    'edwardsville-1.jpeg',
                    'edwardsville-2.jpeg',
                ];
            @endphp

            @foreach($ladueImages as $img)
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <img src="{{ asset('assets/img/' . $img) }}"
                         class="img-fluid rounded shadow w-100 h-auto"
                         alt=" Edwardsville Neighborhood Image"
                         loading="lazy"
                         style="object-fit: cover; max-height: 350px;">
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Featured Properties -->
<section id="featured-properties" class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-semibold text-center mb-3 pb-4">Featured Properties</h3>
        <div id="MBBv3_FeaturedGallery"
             filter="city:edwardsville+state:IL+representation_type:any_listing+limit:6+order:price desc">
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-white">
    <div class="container">
        <h3 class="fw-semibold text-center mb-3 pb-4">Explore on the Map</h3>
        <div class="ratio ratio-16x9 rounded shadow">
            <iframe
                src="https://www.google.com/maps/embed/v1/view?key=AIzaSyCFeHHlboPct7Yj6LmMVDcao4R_qlQNTlc&center=38.8114,-89.9532&zoom=13&maptype=roadmap"
                allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="border-0">
            </iframe>
        </div>
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
