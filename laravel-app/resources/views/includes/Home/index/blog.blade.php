@php

use Illuminate\Support\Str;

$blogs = [
    [
        'id' => 1,
        'img' => 'assets/img/blog-2.jpg',
        'title' => '10 Must-Have Bootstrap Templates for Modern Web Design',
        'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius.",
        'date' => "12 Feb 2025",
        'views' => "12k Views",
    ],
    [
        'id' => 2,
        'img' => 'assets/img/blog-1.jpg',
        'title' => 'Top 5 Bootstrap Themes for E-commerce Websites.',
        'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius.",
        'date' => "10 Jan 2025",
        'views' => "33k Views",
    ],
    [
        'id' => 3,
        'img' => 'assets/img/blog-3.jpg',
        'title' => 'The Ultimate Guide to Customizing Bootstrap Templates',
        'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius.",
        'date' => "07 March 2025",
        'views' => "15k Views",
    ]
];
@endphp

@foreach ($blogs as $item)
    <div class="col-xl-4 col-lg-4 col-md-6">
        <div class="card rounded-4 shadow-sm h-100">
            <a href="#" class="d-block bg-gradient rounded-top">
                <img class="card-img-top hover-fade-out" src="{{ asset($item['img']) }}" alt="blog image">
            </a>
            <div class="card-body">
                <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}"><h4 class="fw-medium fs-5 lh-base mb-3">{{ $item['title'] }}</h4></a>
                <p>{{ $item['desc'] }}</p>
                <div class="d-flex align-items-center justify-content-start mt-4">
                    <a href="#" class="badge badge-primary rounded-pill">Continue Reading</a>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-between align-items-center py-3">
                <a href="#" class="text-dark fw-medium text-md"><i class="bi bi-calendar-check me-2"></i>{{ $item['date'] }}</a>
                <div class="text-muted text-md"><i class="bi bi-eye-fill me-2"></i>{{ $item['views'] }}</div>
            </div>
        </div>
    </div>
@endforeach