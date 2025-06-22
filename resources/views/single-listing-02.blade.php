@extends('layouts.main')

@section('title', '2 Bedroom 1 Bath Duplex for Lease in Stonington, IL')

@push('meta')
<meta name="description" content="Explore a 2 Bedroom 1 Bath Duplex for lease in Stonington, IL. Includes garage, lawn care, and trash service. Rent $750/month.">
<link rel="canonical" href="{{ url()->current() }}">
@endpush

@section('content')

@include('includes.navbar2')

<div id="preloader" aria-hidden="true">
	<div class="preloader"><span></span><span></span></div>
</div>

<div class="clearfix"></div>

<!-- Hero Section -->
<section class="bg-cover position-relative ht-500 py-0" style="background: url('{{ asset('assets/img/list-1.jpg') }}') no-repeat center center/cover;" data-overlay="5">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="text-center px-3" role="banner">
            <h1 class="fw-bold display-4 mb-3 text-white text-shadow-lg">For Lease, 2 Bedroom 1 Bath Duplex</h1>
            <p class="lead text-light mb-1 text-shadow-sm">202 W. Wabash Ave, Stonington, IL 62567</p>
        </div>
    </div>
</section>

<!-- Main Property Details -->
<main class="gray-simple pt-5" role="main">
	<div class="container">
		<div class="row g-5">

			<!-- Property Content -->
			<div class="col-lg-8">
				<!-- Gallery -->
				<div class="row g-3">
                    @php
                        $gallery = [
                            ['img' => 'list-1.jpg', 'alt' => 'Front View'],
                            ['img' => 'gallery-2.jpg', 'alt' => 'Living Room'],
                            ['img' => 'gallery-3.jpg', 'alt' => 'Kitchen'],
                            ['img' => 'gallery-7.jpg', 'alt' => 'Bedroom 1'],
                            ['img' => 'gallery-8.jpg', 'alt' => 'Bedroom 2'],
                            ['img' => 'gallery-9.JPG', 'alt' => 'Bathroom'],
                        ];
                    @endphp

                    @foreach($gallery as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="card h-100 overflow-hidden shadow-sm border-0 rounded-3">
                                <img src="{{ asset('assets/img/' . $item['img']) }}"
                                    alt="{{ $item['alt'] }}"
                                    class="img-fluid object-fit-cover h-100 w-100"
                                    style="aspect-ratio: 4 / 3;"
                                    loading="lazy">
                            </div>
                        </div>
                    @endforeach

                </div>

				<!-- Description -->
				<div class="card mb-4 border-0 shadow-sm rounded-3">
					<div class="card-body">
						<h2 class="fw-bold text-primary border-bottom pb-3 mb-4">Property Description</h2>

						<!-- Key Info -->
						<span class="badge bg-white border border-danger text-danger fw-semibold py-2 px-4 fs-5 shadow-sm">
							$750 / Month
						</span>

						<ul class="list-unstyled mt-3 text-muted">
							<li><i class="bi bi-building me-2 text-danger"></i>Type: Duplex</li>
							<li><i class="bi bi-currency-dollar me-2 text-danger"></i>Rent: $750</li>
							<li><i class="bi bi-wallet2 me-2 text-danger"></i>Deposit: $950</li>
							<li><i class="bi bi-door-closed me-2 text-danger"></i>2 Bed, 1 Bath</li>
							<li><i class="bi bi-car-front-fill me-2 text-danger"></i>1 Car Attached Garage</li>
							<li><i class="bi bi-trash3-fill me-2 text-danger"></i>Trash Included</li>
						</ul>

						<!-- Highlight Cards -->
						<div class="d-flex flex-wrap gap-3 mt-4">
							@foreach([
								['Type', 'Multifamily'],
								['Year Built', '2012'],
								['Size', '1000 sqft'],
								['Status', 'For Lease']
							] as [$label, $value])
								<div class="flex-fill text-center border rounded-3 p-3 bg-light" style="min-width: 150px;">
									<h6 class="mb-1 text-dark fw-semibold">{{ $label }}</h6>
									<p class="mb-0 text-muted">{{ $value }}</p>
								</div>
							@endforeach
						</div>
					</div>
				</div>

				<!-- Map Section -->
				<div class="card mb-4">
					<div class="card-body">
						<h2 class="fw-semibold mb-3">Property Location</h2>
						<div id="map" style="height: 300px; width: 100%;" class="rounded shadow-sm" aria-label="Map showing property location"></div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="card mb-4">
					<div class="card-body">
						<h2 class="fw-semibold mb-3">Contact Us About This Property</h2>

						@if(session('success'))
							<div class="alert alert-success mt-2">{{ session('success') }}</div>
						@endif

						<form method="POST" action="{{ route('contact.send') }}" id="contactForm">
							@csrf
							<div class="row g-3">
								<div class="col-md-6">
									<input type="text" name="name" class="form-control bg-light" placeholder="Your Name *" required>
								</div>
								<div class="col-md-6">
									<input type="text" name="number" class="form-control bg-light" placeholder="Phone Number *" required>
								</div>
								<div class="col-md-12">
									<input type="email" name="email" class="form-control bg-light" placeholder="Email Address *" required>
								</div>
								<div class="col-12">
									<input type="text" name="subject" class="form-control bg-light" value="Inquiry about: For Lease, 2 Bedroom 1 Bath Duplex" readonly>
								</div>
								<div class="col-12">
									<textarea name="query" class="form-control bg-light" rows="5" placeholder="Enter Your Message *" required></textarea>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-danger">
										Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<aside class="col-lg-4" role="complementary">
				<div class="card mb-4">
					<div class="card-body">
						<h5 class="fw-semibold mb-3">Related Properties</h5>

						@foreach([
							['route' => 'property.stonington', 'img' => 'list-1.jpg', 'desc' => '2 Bedroom 1 Bath Duplex, 1 car garage', 'price' => '$750'],
							['route' => 'property.mount-olive', 'img' => 'list-2.jpg', 'desc' => '2 Bedroom 1 Bath Duplex, 1 car garage', 'price' => '$750']
						] as $related)
							<div class="d-flex gap-3 mb-3 pb-3 border-bottom">
								<a href="{{ route($related['route']) }}">
									<img src="{{ asset('assets/img/' . $related['img']) }}" alt="{{ $related['desc'] }}" class="rounded" style="width: 90px; height: 70px; object-fit: cover;" loading="lazy">
								</a>
								<div class="flex-grow-1">
									<div class="mb-1">
										<span class="badge bg-danger me-1">For Lease</span>
										<span class="badge bg-primary">{{ $related['price'] }}</span>
									</div>
									<a href="{{ route($related['route']) }}" class="text-dark fw-medium d-block mb-1 text-decoration-none">
										{{ $related['desc'] }}
									</a>
									<small class="text-muted">Bedrooms: 2 | Bathrooms: 1 | Parking: 1</small>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</aside>

		</div>
	</div>
</main>

@include('includes.Home.index.log')
@include('includes.Home.index.cart')
@include('includes.Home.index.search')
@include('includes.footer')

@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" defer></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
	const map = L.map('map').setView([39.6411, -89.1798], 14);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
	}).addTo(map);

	const icon = L.icon({
		iconUrl: 'https://unpkg.com/leaflet@1.9.3/dist/images/marker-icon.png',
		shadowUrl: 'https://unpkg.com/leaflet@1.9.3/dist/images/marker-shadow.png',
		iconSize: [25, 41],
		iconAnchor: [12, 41],
		popupAnchor: [1, -34],
		shadowSize: [41, 41]
	});

	const marker = L.marker([39.6411, -89.1798], { icon: icon }).addTo(map)
		.bindPopup(`<b>📍 202 W. Wabash Ave</b><br>Stonington, IL`)
		.openPopup();

	setTimeout(() => {
		marker._icon.classList.add("animate__animated", "animate__bounceInDown");
		map.invalidateSize();
	}, 200);
});
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
