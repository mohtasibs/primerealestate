<!-- resources/views/error.blade.php -->
@extends('layouts.main')

@section('title', 'Error Page')

@section('content')

@include('includes.navbar9')

<div id="preloader">
	<div class="preloader"><span></span><span></span></div>
</div>

<div class="clearfix"></div>
			
<!-- Page Title Start -->
<section class="bg-light">
	<div class="container">

		<!-- Search Form -->
		<div class="row justify-content-start align-items-center pt-lg-0 pt-5">
			<div class="col-xl-7 col-lg-9 col-md-12 col-sm-12">
				<div class="position-relative">
					<h1 class="xl-heading">404 Not Found</h1>
					<nav id="breadcrumbs" class="breadcrumbs">
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li>Eroor</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- </row> -->

	</div>
</section>
<!-- Page Title End -->

<!-- Error Content Start -->
<section class="position-relative">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-12">

				<div class="404-capstion text-center my-4">
					<div class="404-captions mb-5">
						<img src="{{ asset('assets/img/error.svg') }}" class="img-fluid mb-3" alt="">
						<h2>Ohhh ho, something went wrong!</h2>
						<p class="fs-6">Cicero famously orated against his political opponent.</p>
					</div>
					<div class="backHome">
						<a href="{{ url('/') }}" class="btn btn-lg btn-light-primary fw-medium rounded-pill">Back to Home</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- Error Content End -->

<!-- Call To Action Start -->
<section class="bg-cover bg-primary-2 position-relative py-5" style="background:url({{ asset('assets/img/brand-section.png') }})no-repeat;">
	<div class="container">
		
		<!-- includes/Home/index/subscribe.blade.php -->
		@include('includes.Home.index.subscribe')

	</div>
</section>
<!-- Call To Action Start -->

	<!-- includes/Home/index/log.blade.php -->
	@include('includes.Home.index.log')
			
	
	<!-- includes/Home/index/cart.blade.php -->
	@include('includes.Home.index.cart')
			
			
	<!-- includes/Home/index/search.blade.php -->
	@include('includes.Home.index.search')


	@include('includes.footer')

@endsection