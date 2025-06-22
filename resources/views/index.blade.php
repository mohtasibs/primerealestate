<!-- resources/views/index.blade.php -->
<!-- -->
@extends('layouts.main')

@section('title', 'Index Page')

@section('content')

@include('includes.navbar')

<div class="clearfix"></div>

<!-- Hero Start -->
<div class="image-cover hero-header position-relative" style="background:url({{ asset('assets/img/banner-1.jpg') }})no-repeat;" data-overlay="6">
	<div class="container">

		<!-- Heading Rwo -->
		<div class="row justify-content-center align-items-center mb-5 pt-lg-0 pt-5">
			<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
				<div class="position-relative text-center">
					<h1>Explore Your Perfect Places</h1>
					<p class="subtitle">Browse high-rated hotels, restaurants, attractions, activities and more!</p>
				</div>
			</div>
		</div>
		<!-- </row> -->

		<!-- Search Form row -->
		<div class="row align-items-start justify-content-center mb-lg-5 mb-4">
			<div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
				<div class="heroSearch style-01 shadow">
					<div class="row gx-lg-2 gx-md-2 gx-3 gy-sm-2 gy-2">
						<div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
							<div class="form-group position-relative">
								<input type="text" class="form-control fs-6 fw-medium border-0 ps-md-2" placeholder="What are you looking for?">
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 side-border">
							<div class="form-group position-relative">
								<input type="text" class="form-control fs-6 fw-medium border-0" placeholder="Location">
								<span class="position-absolute top-50 end-0 translate-middle me-2"><i class="fa-solid fa-location-dot text-muted opacity-50 fs-5"></i></span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
							<div class="form-group fw-medium lights-bg no-border">
								<div class="selects">
									<select class="categories form-control">
									<option label="option"></option>
									<option value="lv">Eat & Drinking</option>
									<option value="la">Rental Property</option>
									<option value="kc">Classifieds</option>
									<option value="no">Bank Services</option>
									<option value="kc">Shopping</option>
									<option value="lb">Fintess & Gym</option>
									<option value="cl">Coaching</option>
									<option value="cn">Other Services</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12">
							<div class="form-group">
								<button type="button" class="btn btn-primary full-width fw-medium"><i class="bi bi-search me-2"></i>Search</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Search Form Row -->

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-2">
				<div class="text-center"><h6 class="fw-semibold">Explore Popular Categories</h6></div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-md-12 col-12">
				<div class="popularSearches d-flex align-items-center justify-content-center column-gap-3 row-gap-1 flex-wrap">
					<div class="singleItem"><a href="#" class="badge badge-transparent rounded-pill">Real Estate</a></div>
					<div class="singleItem"><a href="#" class="badge badge-transparent rounded-pill">Eat & Drink</a></div>
					<div class="singleItem"><a href="#" class="badge badge-transparent rounded-pill">Shopping</a></div>
					<div class="singleItem"><a href="#" class="badge badge-transparent rounded-pill">Nightlife</a></div>
					<div class="singleItem"><a href="#" class="badge badge-transparent rounded-pill">Services</a></div>
				</div>
			</div>
		</div>

	</div>
	<div class="mousedrop z-1"><a href="#mains" class="mousewheel"><i class="bi bi-mouse"></i></a></div>
</div>
<!-- Hero End -->

<!-- Brand Start -->
<section class="py-4 pb-0">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-12">
				<div class="owl-carousel brand-slider">

					<!-- includes/Home/index/brand.blade.php -->
					@include('includes.Home.index.brand')

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Brand End -->

<!-- Trending Category Start -->
<section class="pb-0" id="mains">
	<div class="container">

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-11 col-sm-12">
				<div class="secHeading-wrap text-center">
					<h3 class="sectionHeading">Hot & Trending <span class="text-primary">Categories</span></h3>
					<p>Explore all types of popular category for submit your listings</p>
				</div>
			</div>
		</div>

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="owl-carousel categorySlider">

					<!-- includes/Home/index/categories.blade.php -->
					@include('includes.Home.index.categories')

				</div>
			</div>
		</div>

	</div>
</section>
<!-- Trending Category End -->

<!-- Popular Listings Start -->
<section>
	<div class="container">

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-11 col-sm-12">
				<div class="secHeading-wrap text-center">
					<h3 class="sectionHeading">Trending & Popular <span class="text-primary">Listings</span></h3>
					<p>Explore Hot & Popular Business Listings</p>
				</div>
			</div>
		</div>

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="owl-carousel owl-theme itemslider">

					<!-- includes/Home/index/listings.blade.php -->
					@include('includes.Home.index.listings')

				</div>
			</div>
		</div>

	</div>
</section>
<!-- Popular Listings End -->

<!-- Our Reviews Start -->
<section class="bg-light">
	<div class="container">

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-11 col-sm-12">
				<div class="secHeading-wrap text-center">
					<h3 class="sectionHeading">Our Great <span class="text-primary">Reviews</span></h3>
					<p>Our cliens love our services and give great & positive reviews</p>
				</div>
			</div>
		</div>

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="owl-carousel owl-theme reviewsSlide">

					<!-- includes/Home/index/reviews.blade.php -->
					@include('includes.Home.index.reviews')

				</div>
			</div>
		</div>

	</div>
</section>
<!-- Our Reviews End -->

<!-- Latest Updates Start -->
<section>
	<div class="container">

		<div class="row align-items-center justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-11 col-sm-12">
				<div class="secHeading-wrap text-center">
					<h3 class="sectionHeading">Latest Updates <span class="text-primary">News</span></h3>
					<p>Join ListingHub and get latest & trending updates about listing</p>
				</div>
			</div>
		</div>


		<div class="row align-items-center justify-content-center g-4">

			<!-- includes/Home/index/blog.blade.php -->
			@include('includes.Home.index.blog')

		</div>

	</div>
</section>
<!-- Latest Updates End -->

<!-- Call To Action Start -->
<section class="bg-cover bg-primary-2 position-relative py-5" style="background:url({{ asset('assets/img/brand-section.png') }})no-repeat;">
	<div class="container">

		<!-- includes/Home/index/subscribe.blade.php -->
		@include('includes.Home.index.subscribe')

	</div>
</section>
<!-- Call To Action End -->

	<!-- includes/Home/index/log.blade.php -->
	@include('includes.Home.index.log')


	<!-- includes/Home/index/cart.blade.php -->
	@include('includes.Home.index.cart')


	<!-- includes/Home/index/search.blade.php -->
	@include('includes.Home.index.search')


@include('includes.footer')

@endsection
