@extends('layouts.main')

@section('title', 'Contact Us - Prime Real Estate')

@section('content')

@include('includes.navbar2')

<!-- Preloader -->
<div id="preloader" aria-hidden="true">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- Contact Banner -->
<section class="d-flex align-items-center justify-content-center text-center text-white position-relative"
         style="height: 65vh; background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/img/contact-banner.jpg') }}') center center / cover no-repeat;">
    <div class="container" style="margin-top: 13rem;">
        <h1 class="display-4 fw-bold text-uppercase mb-3 animate__animated animate__fadeInDown text-white">Contact Us</h1>
        <p class="lead animate__animated animate__fadeInUp text-white">We want to hear from you!</p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5" aria-label="Contact Section">
    <div class="container">
        <div class="row align-items-start justify-content-between g-4">

            <!-- Contact Info -->
            <div class="col-xl-5 col-lg-5">
                <div class="bg-light rounded p-4 shadow-sm h-100">
                    <h2 class="h4 mb-4">Contact Details</h2>
                    <p>
                        <strong>Email Address:</strong><br>
                        <a href="mailto:info@primerealestatepm.com" class="text-danger" aria-label="Email us">
                            info@primerealestatepm.com
                        </a>
                    </p>
                    <p>
                        <strong>Phone Numbers:</strong><br>
                        <a href="tel:3147325634" class="text-danger d-block" aria-label="Call 314-732-5634">314-732-5634</a>
                        <a href="tel:6184069775" class="text-danger d-block" aria-label="Call 618-406-9775">618-406-9775</a>
                    </p>
                    <p>
                        <strong>Office Address:</strong><br>
                        102 S Elder St, Mount Olive, IL 62069
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-xl-7 col-lg-7">
                <div class="contactForm pe-xl-5 pe-lg-4">
                    <form method="POST" action="{{ route('contact.send') }}" id="contactForm" role="form">
                        @csrf

                        <div class="touch-block d-flex flex-column mb-4">
                            <h2 class="h3">Get in Touch</h2>
                            <p class="text-muted">Please fill in the form below. We'll get back to you as soon as possible.</p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                        @endif

                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control bg-light" placeholder="Name *" aria-label="Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="number" class="form-control bg-light" placeholder="Phone Number *" aria-label="Phone Number" required>
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control bg-light" placeholder="Email Address *" aria-label="Email Address" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control bg-light" placeholder="Subject *" aria-label="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea name="query" class="form-control bg-light" rows="5" placeholder="Enter Your Message *" aria-label="Message" required></textarea>
                            </div>

                            <!-- Honeypot Anti-Spam Field -->
                            <div style="display: none;">
                                <input type="text" name="website" tabindex="-1" autocomplete="off">
                            </div>

                            <!-- reCAPTCHA v2 Checkbox -->
                            <div class="col-12">
                                <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger d-block mt-2">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>

                            <!-- TCPA Opt-In Checkbox -->
                            <div class="col-12">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="consent" id="consent" required>
                                    <label class="form-check-label" for="consent">
                                        I agree to be contacted by <strong>Prime Real Estate and Property Management</strong>
                                        via call, email, and text for real estate services. To opt out, you can reply 'stop'
                                        at any time or reply 'help' for assistance. You can also click the unsubscribe link
                                        in the emails. Message and data rates may apply. Message frequency may vary.

                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn no-hover w-100" role="button">
                                    Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Load reCAPTCHA v2 -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@include('includes.Home.index.log')
@include('includes.Home.index.cart')
@include('includes.Home.index.search')
@include('includes.footer')

@endsection
