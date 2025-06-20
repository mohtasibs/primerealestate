@extends('layouts.main')

@section('title', 'Meet James Syed - Prime Real Estate')

@section('content')
@include('includes.navbar2')

<!-- Animated Hero Section -->
<!-- Hero Section with Gradient BG -->
<section class="py-5 mt-navbar-adjust text-white" style="background: linear-gradient(to right, #001f3f, #003366); overflow: hidden;">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Text Column -->
            <div class="col-lg-7 mb-4 mb-lg-0 animate__animated animate__fadeInLeft animate__faster">
                <h1 class="display-4 fw-bold text-danger mb-3">James Syed.</h1>
                <p class="lead text-white">
                    I’m James Syed, a dedicated real estate professional with a deep passion for helping my clients achieve their real estate goals. My journey in real estate began in 2006 when I started investing, and in 2013, I became a licensed broker. Today, I’m licensed in both Missouri and Illinois, offering a full range of services including property management, buying, selling, leasing, and real estate investment.
                </p>
            </div>

            <!-- Image Column -->
            <div class="col-lg-5 text-center animate__animated animate__fadeInRight custom-img-animation">
                <img src="{{ asset('assets/img/james-syed.jpg') }}" alt="James Syed" class="img-fluid rounded shadow" style="max-height: 450px; object-fit: contain;">
            </div>
        </div>
    </div>
</section>
<!-- About Section with Animated Video Logo -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Video Logo -->
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <video autoplay muted loop playsinline width="300" height="300" class="img-fluid" loading="lazy" aria-label="Animated Prime Real Estate Logo">
                    <source src="{{ asset('assets/video/logo-ani.mp4') }}" type="video/mp4">
                    <!-- Fallback Image -->
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Prime Logo" width="300">
                </video>
            </div>

            <!-- Text Content -->
            <div class="col-lg-6">
                <p>
                    What sets me apart is my client-focused approach. I know that every real estate journey is unique, and I take the time to understand each client’s specific needs, providing personalized solutions that align with their goals.
                </p>
                <p>
                    My commitment to integrity, professionalism, and exceptional service has allowed me to build lasting relationships based on trust and success.
                </p>
                <p>
                    Whether you’re looking to buy, sell, lease, invest, or need expert property management, I’m here to guide you every step of the way. Let’s make your real estate goals a reality!
                </p>
            </div>
        </div>
    </div>
</section>




<section class="py-2" style="background: linear-gradient(135deg, #f8f9fa, #eaf6fc);">

 <!-- Call to Action -->
 <div class="text-center my-5">
    <h4 class="fw-bold text-primary">Looking to Buy a New Property or Sell an Existing One?</h4>
</div>

  <div class="container bg-white shadow rounded-4 px-5 py-5">
    <div class="row align-items-start">
      <div class="col-lg-6">
        <h2 class="fw-bold text-danger mb-3">Get in Touch</h2>
        <p class="text-muted mb-4" style="font-size: 1.05rem;">
          Have a question or need assistance? Contact me directly for anything related to buying, selling, or managing property.
        </p>

        <div class="mb-4">
          <h5 class="fw-semibold text-primary mb-3">Contact Information</h5>
          <p class="mb-2">
            <i class="fas fa-phone-alt me-2 text-danger"></i>
            <a href="tel:3147325634" class="text-decoration-none text-dark fw-semibold">314-732-5634</a>
          </p>
          <p class="mb-2">
            <i class="fas fa-phone-alt me-2 text-danger"></i>
            <a href="tel:6184069775" class="text-decoration-none text-dark fw-semibold">618-406-9775</a>
          </p>
          <p class="mb-2">
            <i class="fas fa-envelope me-2 text-danger"></i>
            <a href="mailto:james@primerealestatepm.com" class="text-decoration-none text-dark fw-semibold">james@primerealestatepm.com</a>
          </p>
          <p class="mb-0">
            <i class="fas fa-map-marker-alt me-2 text-danger"></i> Licensed in Missouri & Illinois
          </p>
        </div>

        <div>
          <h6 class="text-primary fw-semibold mb-3">Follow Me</h6>
          <div class="d-flex gap-2">
            <a href="https://www.facebook.com/profile.php?id=100041555742747" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/jamessyed1/" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/jamessyed/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.tiktok.com/@jamessyed16" class="social-icon"><i class="fab fa-youtube"></i></a>
            <a href="https://www.youtube.com/@jamessyed1" class="social-icon"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-none d-lg-block">
        <!-- Empty for spacing -->
      </div>
    </div>
  </div>
</section>



@include('includes.footer')
@endsection
