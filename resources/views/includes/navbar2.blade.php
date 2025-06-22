<header id="custom-header" class="custom-header-container py-3">
    <div class="container-fluid px-lg-5">
        <nav class="d-flex align-items-center justify-content-between flex-wrap position-relative">

            <!-- LEFT: Logo -->
            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}" class="custom-logo-link d-inline-block">
                    <img src="{{ asset('assets/img/logo-w.png') }}" alt="Logo White" class="custom-logo-img logo-white">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Dark" class="custom-logo-img logo-black">
                </a>
            </div>

            <!-- HAMBURGER BUTTON (visible <=991px) -->
            <button class="mobile-nav-toggle d-lg-none" id="mobileMenuBtn" aria-label="Toggle navigation" aria-expanded="false" aria-controls="mobileMenuContent">
                 &#9776;
            </button>

            <!-- WRAPPED NAV + CONTACT CONTENT (Toggle on mobile) -->
            <div id="mobileMenuContent" class="d-flex flex-grow-1 justify-content-between align-items-center flex-wrap mobile-menu-content">

                <!-- CENTER: Navigation Menu -->
                <div class="flex-grow-1 text-center">
                    <ul class="custom-nav-menu list-unstyled d-inline-flex gap-4 mb-0 flex-wrap justify-content-center">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Search Properties</a>
                            <ul class="dropdown-menu">
                                <li><a href="/our-listings" class="dropdown-item">Our Listings</a></li>
                                <li><a href="/mo-properties" class="dropdown-item">MO Properties</a></li>
                                <li><a href="/il-properties" class="dropdown-item">IL Properties</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('property.management') }}">Property Management</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" >Our Agent</a>
                            <ul class="dropdown-menu">
                                <li><a href="/our-agent" class="dropdown-item">James Syed</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>

                <!-- RIGHT: Admin + Contact -->
                <div class="d-flex align-items-center gap-3 text-end r-class flex-column flex-md-row mt-3 mt-md-0">
                    <a href="{{ url('/admin/login') }}" class="custom-admin-btn">Admin Login</a>
                    <div class="small contact-details text-center text-md-start">
                        <div class="fw-semibold text-light">
                            <a href="tel:3147325634" class="text-light text-decoration-none">314-732-5634</a> |
                            <a href="tel:6184069775" class="text-light text-decoration-none">618-406-9775</a>
                        </div>
                        <div class="text-light">Licensed in Missouri &amp; Illinois</div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
