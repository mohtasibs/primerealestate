<!-- resources/views/home-3.blade.php -->
@extends('layouts.main')

@section('title', 'Home-3 Page')

@section('content')

@include('includes.navbar2')

<div id="preloader">
	<div class="preloader"><span></span><span></span></div>
</div>

<div class="clearfix"></div>

<!-- Hero Start -->
<div class="video-hero-section mt-navbar-adjust">

    <!-- Video Background -->
    <video autoplay muted loop playsinline>
        <source src="{{ asset('assets/video/Homepage Video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Optional dark overlay -->
    <div class="video-overlay"></div>

    <div class="container">
        <form class="row justify-content-center align-items-center g-2 search-bar-wrapper">
            <!-- Text Input -->
            <div class="col-lg-6 col-md-5 col-sm-12">
                <input type="text" name="query" class="form-control search-field" placeholder="street, city, state, zip code or MLS#" />
            </div>
             <!-- Dropdown -->
             <div class="col-lg-3 col-md-4 col-sm-12">
                <select class="form-select search-field category-dropdown" name="category">
                    <option value="">Property Type</option>
                    <option value="house">House</option>
                    <option value="apartment">Apartment</option>
                    <option value="land">Land</option>
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
<section>
	<div class="container">

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-11 col-sm-12">
				<div class="secHeading-wrap text-center">
					<h3 class="">Featured Listing</h3>
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

	<!-- includes/Home/index/log.blade.php -->
	@include('includes.Home.index.log')


	<!-- includes/Home/index/cart.blade.php -->
	@include('includes.Home.index.cart')


	<!-- includes/Home/index/search.blade.php -->
	@include('includes.Home.index.search')


@include('includes.footer')

@endsection
