@extends('layouts.main')

@section('title', 'Leased Property Details - Property 2')

@section('content')

@include('includes.navbar2')

<div id="preloader">
	<div class="preloader"><span></span><span></span></div>
</div>

<div class="clearfix"></div>

<!-- Hero Section -->
<section class="bg-cover position-relative ht-500 py-0" style="background: url({{ asset('assets/img/list-2.JPG') }}) no-repeat center center/cover;" data-overlay="5">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="text-center px-3" style="position: relative; z-index: 2;">
            <h1 class="fw-bold display-4 mb-3 text-white text-shadow-lg">2 Bedroom 1 Bath Duplex for Lease</h1>
            <p class="lead text-light mb-1 text-shadow-sm">102-108 S Elder St, Mount Olive, IL 62069</p>
        </div>
    </div>
</section>

<!-- Property Details Content -->
<section class="gray-simple pt-5">
	<div class="container">
		<div class="row g-5">

			<!-- Left Content -->
			<div class="col-lg-8">

				<!-- SEO Gallery -->
                <div class="row g-3 mb-4">
                    @php
                        $gallery = [
                            ['img' => 'list-2.JPG', 'alt' => 'Exterior Front View'],
                            ['img' => 'gallery-4.JPG', 'alt' => 'Rear View'],
                            ['img' => 'gallery-5.jpg', 'alt' => 'Kitchen with Dishwasher'],
                            ['img' => 'gallery-10.jpg', 'alt' => 'Bathroom'],
                            ['img' => 'gallery-11.jpg', 'alt' => 'Living Room'],
                            ['img' => 'gallery-12.jpg', 'alt' => 'Laundry Room'],
                        ];
                    @endphp
                    @foreach($gallery as $item)
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/' . $item['img']) }}" class="img-fluid rounded w-100 h-100 object-fit-cover" alt="{{ $item['alt'] }}" loading="lazy" style="aspect-ratio: 4/3;">
                        </div>
                    @endforeach
                </div>

                <!-- Description -->
                <div class="card mb-4 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h4 class="fw-bold text-primary border-bottom pb-3 mb-4">Property Description</h4>

                        <span class="badge bg-white border border-danger text-danger fw-semibold py-2 px-4 fs-5 shadow-sm">$750 / Month</span>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-1 text-muted"><i class="bi bi-building me-2 text-danger"></i>Duplex Unit</li>
                            <li class="mb-1 text-muted"><i class="bi bi-currency-dollar me-2 text-danger"></i>Rent: $750</li>
                            <li class="mb-1 text-muted"><i class="bi bi-wallet2 me-2 text-danger"></i>Deposit: $950</li>
                            <li class="mb-1 text-muted"><i class="bi bi-door-closed me-2 text-danger"></i>2 Bedrooms, 1 Bathroom</li>
                            <li class="mb-1 text-muted"><i class="bi bi-car-front-fill me-2 text-danger"></i>Attached Garage</li>
                            <li class="mb-1 text-muted"><i class="bi bi-trash3-fill me-2 text-danger"></i>Trash Service Included</li>
                        </ul>

                        <!-- Features -->
                        <div class="d-flex flex-wrap gap-3">
                            @php
                                $features = [
                                    ['label' => 'Property Type', 'value' => 'Multifamily'],
                                    ['label' => 'Year Built', 'value' => '2012'],
                                    ['label' => 'Size', 'value' => '1000 sqft'],
                                    ['label' => 'Status', 'value' => 'Available for Lease'],
                                ];
                            @endphp
                            @foreach($features as $feature)
                                <div class="flex-fill text-center border rounded-3 p-3 bg-light" style="min-width: 150px;">
                                    <h6 class="mb-1 text-dark fw-semibold">{{ $feature['label'] }}</h6>
                                    <p class="mb-0 text-muted">{{ $feature['value'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="fw-semibold mb-3">Location Map</h4>
                        <div id="map" style="height: 300px; width: 100%;" class="rounded shadow-sm"></div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="fw-semibold mb-3">Contact About This Listing</h4>
                        <form method="POST" action="{{ route('contact.send') }}">
                            @csrf
                            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name *" required>
                            <input type="text" name="number" class="form-control mb-3" placeholder="Phone Number *" required>
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email Address *" required>
                            <input type="text" name="subject" value="Inquiry about Mount Olive Duplex" class="form-control mb-3" required>
                            <textarea name="query" class="form-control mb-3" rows="4" placeholder="Message *" required></textarea>
                            @if(session('success'))
                                <div class="alert alert-success mt-2">{{ session('success') }}</div>
                            @endif
                            <button type="submit" class="btn btn-danger">Send Message <i class="fa-solid fa-paper-plane ms-2"></i></button>
                        </form>
                    </div>
                </div>

			</div>

			<!-- Related Properties -->
			<div class="col-lg-4">
				<div class="card mb-4">
					<div class="card-body">
						<h5 class="fw-semibold mb-3">Related Properties</h5>
                        @php
                            $related = [
                                [
                                    'route' => 'property.stonington',
                                    'img' => 'list-1.jpg',
                                    'title' => '2 Bed 1 Bath Duplex, Stonington, IL',
                                    'price' => '$750',
                                    'features' => 'Bedrooms: 2 | Bathrooms: 1 | Parking: 1'
                                ],
                                [
                                    'route' => 'property.mount-olive',
                                    'img' => 'list-2.jpg',
                                    'title' => '2 Bed 1 Bath Duplex, Mount Olive, IL',
                                    'price' => '$750',
                                    'features' => 'Bedrooms: 2 | Bathrooms: 1 | Parking: 1'
                                ],
                            ];
                        @endphp
                        @foreach($related as $item)
                            <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                                <a href="{{ route($item['route']) }}">
                                    <img src="{{ asset('assets/img/' . $item['img']) }}" alt="{{ $item['title'] }}" class="rounded" width="90" height="70" style="object-fit: cover;">
                                </a>
                                <div class="flex-grow-1">
                                    <div class="mb-1">
                                        <span class="badge bg-danger me-1">For Lease</span>
                                        <span class="badge bg-primary">{{ $item['price'] }}</span>
                                    </div>
                                    <a href="{{ route($item['route']) }}" class="text-dark fw-medium text-decoration-none d-block mb-1">{{ $item['title'] }}</a>
                                    <small class="text-muted">{{ $item['features'] }}</small>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

@include('includes.Home.index.log')
@include('includes.Home.index.cart')
@include('includes.Home.index.search')
@include('includes.footer')

@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
	const map = L.map('map').setView([38.9942, -89.7832], 14);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
	}).addTo(map);
	const icon = L.icon({
		iconUrl: 'https://unpkg.com/leaflet@1.9.3/dist/images/marker-icon.png',
		shadowUrl: 'https://unpkg.com/leaflet@1.9.3/dist/images/marker-shadow.png',
		iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34], shadowSize: [41, 41]
	});
	const marker = L.marker([38.9942, -89.7832], { icon: icon }).addTo(map)
		.bindPopup('<b>102-108 S Elder St</b><br>Mount Olive, IL')
		.openPopup();
	setTimeout(() => {
		marker._icon.classList.add("animate__animated", "animate__bounceInDown");
		map.invalidateSize();
	}, 200);
});
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
