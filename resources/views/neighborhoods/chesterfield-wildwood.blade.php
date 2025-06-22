@extends('layouts.main')

@section('title', 'Chesterfield/Wildwood')
@section('meta_description', 'Explore Chesterfield/Wildwood: upscale community living in Missouri.')

@section('content')

@include('includes.navbar2')

<!-- Hero Section with Image Tag as Background -->
<section class="neighborhood-hero-img position-relative text-white text-center d-flex align-items-center justify-content-center">
    <!-- Image as background layer -->
    <img src="{{ asset('assets/img/community-1.avif') }}"
         alt="Chesterfield Wildwood Neighborhood"
         class="img-fluid w-100 h-100 position-absolute top-0 start-0 object-fit-cover"
         style="z-index: 0;" loading="lazy">

    <!-- Overlay -->
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <!-- Text Content -->
    <div class="container position-relative z-2 py-5">
        <p class="text-uppercase fw-semibold text-white">Welcome To</p>
        <h1 class="display-4 fw-bold text-white">Chesterfield/Wildwood</h1>
        <p class="mb-4 text-white">38.6631° N, 90.5771° W</p>

        <!-- Scroll Button -->
        <a href="#about-neighborhood" class="neighborhood-scroll-btn" aria-label="Scroll Down">
            <i class="bi bi-chevron-down fs-4"></i>
        </a>
    </div>
</section>

