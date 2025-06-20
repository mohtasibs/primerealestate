@extends('layouts.main')

@section('title', 'Home Valuation | Prime Real Estate')

@section('meta_description', 'Get a free and accurate home valuation from Prime Real Estate. Discover your property’s true worth today in Missouri or Illinois.')

@section('content')

@include('includes.navbar2')

<!-- Valuation Section -->
<section class="bg-light py-5" style="padding-top: 11rem;">
    <div class="container valuation-container-top mb-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark">Find Out What Your Home is Worth</h1>
            <p class="text-muted">Receive a personalized estimate from our real estate experts — absolutely free.</p>
        </div>
        <div class="row align-items-center">

            <!-- Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img
                    src="{{ asset('assets/img/card-connect.png') }}"
                    alt="Get your home valuation image"
                    class="img-fluid rounded shadow"
                    loading="lazy"
                >
            </div>

            <!-- Valuation Form -->
            <div class="col-lg-6">
                <div class="card shadow p-4">
                    <h2 class="h4 fw-semibold mb-4">Get Your Free Home Estimation</h2>

                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('valuation.send') }}" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="first_name" class="visually-hidden">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="visually-hidden">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="visually-hidden">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email *" required>
                            </div>
                            <div class="col-md-6">
                                <label for="mobile" class="visually-hidden">Phone</label>
                                <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Phone Number *" required>
                            </div>

                            <div class="col-12">
                                <label for="address" class="visually-hidden">Address</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Full Address" required>
                            </div>
                            <div class="col-md-4">
                                <label for="city" class="visually-hidden">City</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="City">
                            </div>
                            <div class="col-md-4">
                                <label for="state" class="visually-hidden">State</label>
                                <input type="text" id="state" name="state" class="form-control" placeholder="State">
                            </div>
                            <div class="col-md-4">
                                <label for="zip" class="visually-hidden">Zip Code</label>
                                <input type="text" id="zip" name="zip" class="form-control" placeholder="Zip">
                            </div>

                            <div class="col-12">
                                <label for="message" class="visually-hidden">Message</label>
                                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Message *" required></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input border-danger" type="checkbox" name="consent" id="consent" required>
                                    <label class="form-check-label" for="consent">
                                        I consent to having my information saved.
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn no-hover w-100">Send Request</button>
                            </div>
                        </div>
                    </form>
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
