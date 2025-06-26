@extends('layouts.main')

@section('title', 'Missouri Properties')
@section('meta_description', 'Browse all available real estate listings in Missouri.')

@section('content')

@include('includes.navbar2')

<div id="preloader" aria-hidden="true">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- Listings Section -->
<section class="pt-5 pb-5 mt-navbar-adjust bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-3">Missouri Properties</h2>
            <p class="lead text-muted">Find the perfect home or investment property from our curated list of Missouri real estate listings.</p>
        </div>

        <!-- Buying Buddy Missouri Listings -->
        <div id="MBBv3_FeaturedGallery"
             filter="state:MO+representation_type:any_listing+limit:12+login-panel:false+header-menu:false">
        </div>
    </div>
</section>

@include('includes.footer')

@endsection
