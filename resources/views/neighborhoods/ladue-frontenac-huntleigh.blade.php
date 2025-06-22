@extends('layouts.main')

@section('title', 'Ladue / Frontenac / Huntleigh')
@section('meta_description', 'Discover upscale living in Ladue, Frontenac, and Huntleigh with beautiful estates and serene landscapes.')

@section('content')
@include('includes.navbar2')

<!-- Hero Section -->
<section class="neighborhood-hero-img position-relative text-white text-center d-flex align-items-center justify-content-center">
    <img src="{{ asset('assets/img/community-2.avif') }}"
         alt="Ladue / Frontenac / Huntleigh"
         class="img-fluid w-100 h-100 position-absolute top-0 start-0 object-fit-cover"
         style="z-index: 0;" loading="lazy">
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <div class="container position-relative z-2 py-5">
        <p class="text-uppercase fw-semibold small">Welcome To</p>
        <h1 class="display-4 fw-bold text-white">Ladue / Frontenac / Huntleigh</h1>
        <p class="mb-4 text-white">38.6498° N, 90.3807° W</p>
        <a href="#about-neighborhood" class="neighborhood-scroll-btn" aria-label="Scroll Down">
            <i class="bi bi-chevron-down fs-4"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about-neighborhood" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Welcome to Ladue / Frontenac / Huntleigh</h2>
        <div class="row g-4">

            @php
                $ladueImages = [
                    'ladue-1.jpeg',
                    'ladue-2.jpeg',
                    'ladue-3.jpeg',
                    'ladue-4.jpeg',
                ];
            @endphp

            @foreach($ladueImages as $img)
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <img src="{{ asset('assets/img/' . $img) }}"
                         class="img-fluid rounded shadow w-100 h-auto"
                         alt="Ladue Neighborhood Image"
                         loading="lazy"
                         style="object-fit: cover; max-height: 350px;">
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
