@extends('layouts.main')

@section('title', 'Our Listings')
@section('meta_description', 'Browse exclusive listings from our real estate portfolio.')

@section('content')

@include('includes.navbar2')

<div id="preloader" aria-hidden="true">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- Listings -->
<section class="pt-5 pb-5 mt-navbar-adjust bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-3">Our Featured Listings</h2>
            <p class="lead text-muted">Explore top properties.</p>
        </div>

        <!-- Buying Buddy Listings -->
        <div id="MBBv3_FeaturedGallery"
             filter="mls_id:mo294+listing_status:active,active-rental+representation_type:any_listing+office_id:PMPM01+limit:12+order:FIELD(agent_id,'SYEDJ') desc, create_dt desc,price desc">
        </div>
    </div>
</section>

@include('includes.footer')

@endsection
