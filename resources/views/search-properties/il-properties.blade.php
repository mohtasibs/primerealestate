@extends('layouts.main')

@section('title', 'Illinois Properties')
@section('meta_description', 'Explore premium real estate listings in Illinois.')

@section('content')

@include('includes.navbar2')

<div id="preloader" aria-hidden="true">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- Listings Section -->
<section class="pt-5 pb-5 mt-navbar-adjust bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-3">Illinois Properties</h2>
            <p class="lead text-muted">Explore top-tier homes and properties available throughout Illinois, handpicked for your needs.</p>
        </div>

        <!-- Buying Buddy Illinois Listings -->
        <div id="MBBv3_FeaturedGallery"
             filter="state:IL+representation_type:any_listing+limit:12+login-panel:false+header-menu:false">
        </div>
    </div>
</section>

@include('includes.footer')

@endsection
