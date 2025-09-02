@extends('layouts.main')

@section('title', 'Blog Page')

@section('content')

@include('includes.navbar2')

<!-- Preloader -->
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>
<div class="clearfix"></div>

<!-- Page Title -->
<section class="bg-cover position-relative" style="background-color:#0E1823;" data-overlay="6">
    <div class="container">
        <div class="row justify-content-center align-items-center pt-lg-0 pt-5">
            <div class="col-xl-7 col-lg-9 col-md-12 col-sm-12">
                <div class="position-relative text-center mb-5 blog-padd">
                    <h1 class="text-light xl-heading">Latest Updates</h1>
                    <nav id="breadcrumbs" class="breadcrumbs light">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            @include('includes.Pages.blog.blogs')
        </div>

        <!-- Pagination -->
        @include('includes.Listings.Grid-Layouts.grid-layout-01.pagination')
    </div>
</section>

<!-- Common Components -->
@include('includes.Home.index.log')
@include('includes.Home.index.cart')
@include('includes.Home.index.search')
@include('includes.footer')

@endsection
