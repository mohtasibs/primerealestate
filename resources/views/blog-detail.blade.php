<!-- resources/views/blog-detail.blade.php -->
@extends('layouts.main')

@section('title', $item['title'] ?? 'Blog-Detail Page')

@section('content')

@include('includes.navbar2')

<!-- Header Section -->
<header class="py-4 bg-dark text-white text-center pt-5">
    <div class="container">
        <!-- Optional title in header -->
    </div>
</header>

<div class="bg-light">

    <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div>

    <!-- Page Title Start -->
    <section>
        <div class="container">
            <div class="row justify-content-start align-items-center pt-lg-0 pt-5">
                <div class="col-xl-7 col-lg-9 col-md-12 col-sm-12">
                    <div class="position-relative">
                        <h1 class="xl-heading">Latest Article</h1>
                        <nav id="breadcrumbs" class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="#">Blog</a></li>
                                <li>{{ $item['title'] ?? 'Blog Detail' }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- Articles Detail Section -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4">

                <!-- Main Blog Content -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="blogDetails d-flex flex-column gap-4 w-100">

                        <!-- Blog Card -->
                        <div class="card shadow-sm w-100">
                            <div class="blogThumb">
                                <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/img/gal-4.jpg') }}" class="img-fluid" alt="Blog Image">
                            </div>

                            <div class="card-body">
                                <!-- Category Badge -->
                                <div class="d-inline-flex mb-2">
                                    <span class="badge badge-xs badge-primary rounded-pill text-capitalize">
                                        {{ $item['category'] ?? 'General' }}
                                    </span>
                                </div>

                                <!-- Blog Title -->
                                <h1 class="fs-3">{{ $item['title'] ?? 'Top 10 Free Bootstrap Templates for Your Next Project' }}</h1>

                                <!-- Metadata -->
                                <div class="d-flex align-items-center flex-wrap gap-3 mb-3">
                                    <div>By <a href="#" class="link">Admin</a></div>
                                    <div>{{ $item['date'] ?? '6 Sep 2025' }}</div>
                                    <div><span class="text-muted">{{ $item['views'] ?? 'N/A' }}</span></div>
                                </div>

                                <!-- Blog Content -->
                                {!! $item['content'] ?? '<p>No content available.</p>' !!}
                            </div>

                            <!-- Feedback -->
                            <div class="card-footer border-top bg-white">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Was this article helpful?</h6>
                                    <small class="py-3 p-md-0 d-block">40 out of 84 found this helpful</small>
                                    <div class="btn-group" role="group" aria-label="Feedback options">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                        <label class="btn btn-outline-secondary btn-sm mb-0" for="btnradio1">
                                            <i class="fa-regular fa-thumbs-up me-1"></i> Yes
                                        </label>
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                        <label class="btn btn-outline-secondary btn-sm mb-0" for="btnradio2">
                                            No <i class="fa-regular fa-thumbs-down ms-1"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Card -->

                       
                    </div>
                </div>

                <!-- Blog Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="blogSidebar d-flex flex-column gap-4">

                        <!-- Search Widget -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Search</h4>
                            </div>
                            <div class="card-body">
                                <div class="p-2 ps-3 rounded border d-flex align-items-center gap-2">
                                    <span><i class="bi bi-search fs-4 opacity-75"></i></span>
                                    <input type="search" class="form-control border-0 ps-0" placeholder="What are you looking for?">
                                </div>
                            </div>
                        </div>

                          <!-- Tags Widget -->

                    <div class="card">
                        <div class="card-header">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="card-body">
                            <div class="blogTags">
                                <ul>
                                    @include('includes.Pages.blog-detail.tags')
                                </ul>
                            </div>
                        </div>
                    </div>



                        <!-- Social Share -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Connect on Social</h4>
                            </div>
                            <div class="card-body">
                                <div class="blogShare d-flex gap-3">
                                    <a href="https://www.facebook.com/profile.php?id=100041555742747" class="text-primary fs-5" target="_blank"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/jamessyed1/" class="text-danger fs-5" target="_blank"><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/jamessyed/" class="text-info fs-5" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://www.tiktok.com/@jamessyed16" class="text-dark fs-5" target="_blank"><i class="bi bi-tiktok"></i></a>
                                    <a href="https://www.youtube.com/@jamessyed1" class="text-danger fs-5" target="_blank"><i class="bi bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Article Section -->

    @include('includes.Home.index.log')
    @include('includes.Home.index.cart')
    @include('includes.Home.index.search')
    @include('includes.Pages.blog-detail.drop')
</div>

@include('includes.footer')

@endsection
