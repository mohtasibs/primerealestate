@php

use Illuminate\Support\Str;

$blogs = [
    [
        'title' => 'Your Homeownership Journey: A Step-by-Step Guide to Buying a Home',
        'img' => 'assets/img/homeownership-journey.jpg',
        'desc' => 'Embarking on the path to homeownership? This guide walks you through each step, from budgeting and mortgage pre-approval to closing the deal.',
        'date' => 'Jan 5, 2025',
        'views' => '13k Views',
    ],
    [
        'title' => "Smart Buyer's Checklist: What You Need Before Making an Offer",
        'img' => 'assets/img/buyers-checklist.jpg',
        'desc' => "Before submitting an offer on your dream home, ensure you're fully prepared. This checklist highlights key documents, financial readiness, and inspection tips that smart buyers need to secure the best deal.",
        'date' => 'Jan 20, 2025',
        'views' => '11k Views',
    ],
    [
        'title' => 'Sell Smarter, Not Harder: Strategies for a Successful Home Sale',
        'img' => 'assets/img/sell-smarter.jpg',
        'desc' => 'Ready to sell your home? Discover effective marketing techniques, staging tips, and pricing strategies that can help you attract buyers quickly and sell for top dollar in today’s market.',
        'date' => 'Feb 3, 2025',
        'views' => '17k Views',
    ],
    [
        'title' => "Maximize Your Sale Price: Preparing Your Home for Today's Market",
        'img' => 'assets/img/maximize-sale.jpg',
        'desc' => 'First impressions matter! Learn how to boost your home’s appeal through repairs, decluttering, and modern upgrades to ensure a faster sale at the best possible price.',
        'date' => 'Feb 18, 2025',
        'views' => '14k Views',
    ],
    [
        'title' => 'Building Wealth Through Bricks: Your Guide to Real Estate Investing',
        'img' => 'assets/img/real-estate-investing.jpg',
        'desc' => 'Real estate offers a reliable path to long-term wealth. This guide explains the fundamentals of investing, including property types, rental income, and how to build a strong portfolio.',
        'date' => 'Mar 4, 2025',
        'views' => '16k Views',
    ],
    [
        'title' => 'Real Estate Investing 101: Where to Start Your Portfolio',
        'img' => 'assets/img/investing-101.jpg',
        'desc' => 'New to real estate investing? Learn how to evaluate markets, choose properties, and avoid common pitfalls. This beginner’s guide is your first step toward financial growth.',
        'date' => 'Mar 20, 2025',
        'views' => '12k Views',
    ],
    [
        'title' => 'Beyond the Landlord Life: The Benefits of Professional Property Management',
        'img' => 'assets/img/property-management-benefits.jpg',
        'desc' => 'Managing properties can be overwhelming. Discover how hiring a professional property management company can reduce stress, boost tenant satisfaction, and protect your investment.',
        'date' => 'Apr 5, 2025',
        'views' => '10k Views',
    ],
    [
        'title' => 'Protecting Your Investment: Essential Tips for Effective Property Management',
        'img' => 'assets/img/property-tips.jpg',
        'desc' => 'Keep your property in top shape and your tenants happy. Learn maintenance strategies, tenant screening practices, and budgeting tips to manage your rental effectively.',
        'date' => 'Apr 22, 2025',
        'views' => '13k Views',
    ],
    [
        'title' => 'Demystifying Mortgages: Understanding Your Home Financing Options',
        'img' => 'assets/img/mortgage-options.jpg',
        'desc' => 'Choosing the right mortgage can save you thousands. Learn about fixed-rate vs. adjustable loans, down payments, interest rates, and more in this simplified mortgage breakdown.',
        'date' => 'May 7, 2025',
        'views' => '15k Views',
    ],
    [
        'title' => 'Get Loan-Ready: Preparing for a Smooth Home Financing Process',
        'img' => 'assets/img/loan-ready.jpg',
        'desc' => 'Make your home financing journey stress-free by getting loan-ready. This blog covers credit score tips, debt-to-income ratio advice, and how to gather key documentation before applying.',
        'date' => 'May 25, 2025',
        'views' => '9k Views',
    ],
    [
        'title' => 'Gateway to Your New Life: What to Expect When Moving to St. Louis',
        'img' => 'assets/img/moving-stlouis.jpg',
        'desc' => 'Thinking of relocating to St. Louis? Discover the vibrant neighborhoods, cost of living, job opportunities, and cultural attractions that make this city a great place to call home.',
        'date' => 'Jun 10, 2025',
        'views' => '18k Views',
    ],
    [
        'title' => 'St. Louis Bound: Your Essential Guide to Relocating to the Arch City',
        'img' => 'assets/img/relocate-stlouis.jpg',
        'desc' => 'Planning your move to St. Louis? From finding a home to choosing schools, this relocation guide offers essential tips for a smooth transition to the heart of Missouri.',
        'date' => 'Jun 25, 2025',
        'views' => '20k Views',
    ],
];

@endphp

<div class="itemslider owl-carousel owl-theme">
    @foreach ($blogs as $item)
        <div class="item">
            <div class="card rounded-4 shadow-sm h-100">
                <a href="#" class="d-block bg-gradient rounded-top">
                    <img
                        class="card-img-top hover-fade-out w-100"
                        src="{{ asset($item['img']) }}"
                        alt="{{ $item['title'] }}"
                        style="height: 220px; object-fit: cover; border-top-left-radius: 1rem; border-top-right-radius: 1rem;"
                    >

                </a>
                <div class="card-body">
                    <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}">
                        <h4 class="fw-medium fs-5 lh-base mb-3">{{ $item['title'] }}</h4>
                    </a>
                    <p>{{ \Illuminate\Support\Str::limit($item['desc'], 120) }}</p>
                    <div class="d-flex align-items-center justify-content-start mt-4">
                        <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="badge badge-primary rounded-pill">Continue Reading</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-between align-items-center py-3">
                    <a href="#" class="text-dark fw-medium text-md">
                        <i class="bi bi-calendar-check me-2"></i>{{ $item['date'] }}
                    </a>
                    <div class="text-muted text-md">
                        <i class="bi bi-eye-fill me-2"></i>{{ $item['views'] }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
