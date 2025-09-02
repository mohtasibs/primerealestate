@php

use Illuminate\Support\Str;

$listings = [
    [
        'id' => 1,
        'img' => 'assets/img/list-1.jpg',
        'img1' => 'assets/img/team-1.jpg',
        'title' => 'The Big Bumbble Gym',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 4758',
        'miles' => '2.4 miles',
        'name' => 'Fitness',
        'icon' => 'fa-solid fa-dumbbell',
        'span' => 'catIcon cats-1',
        'plus' => '+2',
        'rating' => '4.5',
        'avarage' => 'good',
        'reviews' => '46 Reviews',
        'btn' => 'Open',
        'color' => 'listOpen',
        'dollar' => '$$$',
        'btn1' => 'Featured',
        'tag' => 'true',
    ],
    [
        'id' => 2,
        'img' => 'assets/img/list-2.jpg',
        'img1' => 'assets/img/team-2.jpg',
        'title' => 'Greenvally Real Estate',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 6150',
        'miles' => '3.7 miles',
        'name' => 'Real Estate',
        'icon' => 'bi bi-house-check',
        'span' => 'catIcon cats-2',
        'plus' => '+2',
        'rating' => '4.3',
        'avarage' => 'midium',
        'reviews' => '35 Reviews',
        'btn' => 'Open',
        'color' => 'listOpen',
        'dollar' => '$$$$',
        'btn1' => '',
        'tag' => 'false',
    ],
    [
        'id' => 3,
        'img' => 'assets/img/list-3.jpg',
        'img1' => 'assets/img/team-3.jpg',
        'title' => 'Shree Wedding Planner',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 4785',
        'miles' => '2.7 miles',
        'name' => 'Weddings',
        'icon' => 'bi bi-lamp',
        'span' => 'catIcon cats-3',
        'plus' => '+1',
        'rating' => '4.8',
        'avarage' => 'excellent py-1 px-2 fw-semibold',
        'reviews' => '12 Reviews',
        'btn' => 'Closed',
        'color' => 'listClose',
        'dollar' => '$$$',
        'btn1' => 'Featured',
        'tag' => 'true',
    ],
    [
        'id' => 4,
        'img' => 'assets/img/list-4.jpg',
        'img1' => 'assets/img/team-4.jpg',
        'title' => 'The Blue Ley Light',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 6358',
        'miles' => '5.2 miles',
        'name' => 'Restaurant',
        'icon' => 'bi bi-cup-straw',
        'span' => 'catIcon cats-4',
        'plus' => '+1',
        'rating' => '4.6',
        'avarage' => 'good',
        'reviews' => '72 Reviews',
        'btn' => 'Open',
        'color' => 'listOpen',
        'dollar' => '$$$$',
        'btn1' => '',
        'tag' => 'false',
    ],
    [
        'id' => 5,
        'img' => 'assets/img/list-5.jpg',
        'img1' => 'assets/img/team-5.jpg',
        'title' => 'Shreya Study Center',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 0210',
        'miles' => '3.8 miles',
        'name' => 'Education',
        'icon' => 'bi bi-mortarboard',
        'span' => 'catIcon cats-5',
        'plus' => '+1',
        'rating' => '4.2',
        'avarage' => 'midium',
        'reviews' => '112 Reviews',
        'btn' => 'Closed',
        'color' => 'listClose',
        'dollar' => '$$$',
        'btn1' => 'Featured',
        'tag' => 'true',
    ],
    [
        'id' => 6,
        'img' => 'assets/img/list-6.jpg',
        'img1' => 'assets/img/team-6.jpg',
        'title' => 'Mahroom Garage & Workshop',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 3251',
        'miles' => '2.4 miles',
        'name' => 'Showroom',
        'icon' => 'bi bi-backpack',
        'span' => 'catIcon cats-6',
        'plus' => '+1',
        'rating' => '4.9',
        'avarage' => 'excellent',
        'reviews' => '52 Reviews',
        'btn' => 'Open',
        'color' => 'listOpen',
        'dollar' => '$$$$',
        'btn1' => '',
        'tag' => 'false',
    ],
    [
        'id' => 7,
        'img' => 'assets/img/list-9.jpg',
        'img1' => 'assets/img/team-7.jpg',
        'title' => 'The Great Dream Palace',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 5426',
        'miles' => '4.2 miles',
        'name' => 'Eat & Drink',
        'icon' => 'bi bi-cup-hot',
        'span' => 'catIcon cats-7',
        'plus' => '+2',
        'rating' => '4.9',
        'avarage' => 'excellent',
        'reviews' => '42 Reviews',
        'btn' => 'Closed',
        'color' => 'listClose',
        'dollar' => '$$$',
        'btn1' => 'Featured',
        'tag' => 'true',
    ],
    [
        'id' => 8,
        'img' => 'assets/img/list-8.jpg',
        'img1' => 'assets/img/team-8.jpg',
        'title' => 'Agroo Spa & Massage Center',
        'desc' => 'Cicero famously orated against his political.',
        'number' => '+42 515 635 2136',
        'miles' => '1.2 miles',
        'name' => 'Spa & Beauty',
        'icon' => 'bi bi-basket2',
        'span' => 'catIcon cats-8',
        'plus' => '+1',
        'rating' => '4.7',
        'avarage' => 'good',
        'reviews' => '76 Reviews',
        'btn' => 'Open',
        'color' => 'listOpen',
        'dollar' => '$$$',
        'btn1' => 'Featured',
        'tag' => 'true',
    ]
];
@endphp

@foreach ($listings as $item)
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="listingitem-container">
            <div class="singlelisting-item">
                <div class="listing-top-item">
                    <a href="#" class="topLink">
                        <div class="position-absolute start-0 top-0 ms-3 mt-3 z-2">
                            <div class="d-flex align-items-center justify-content-start gap-2">
                                <span class="badge badge-xs text-uppercase {{ $item['color'] }}">{{ $item['btn'] }}</span>
                                <span class="badge badge-xs badge-transparent">{{ $item['dollar'] }}</span>

                                @if ($item['tag'] === 'true')
                                    <span class="badge badge-xs badge-transparent"><i class="bi bi-star mb-0 me-1"></i>{{ $item['btn1'] }}</span>
                                @endif
                            
                            </div>
                        </div>
                        <img src="{{ asset($item['img']) }}" class="img-fluid" alt="Listing Image">
                    </a>
                    <div class="position-absolute end-0 bottom-0 me-3 mb-3 z-2">
                        <a href="#" class="bookmarkList" data-bs-toggle="tooltip" data-bs-title="Save Listing"><i class="bi bi-suit-heart m-0"></i></a>
                    </div>
                </div>
                <div class="listing-middle-item">
                    <div class="listing-avatar">
                        <a href="#" class="avatarImg"><img src="{{ asset($item['img1']) }}" class="img-fluid circle" alt="Avatar"></a>
                    </div>
                    <div class="listing-details">
                        <h4 class="listingTitle"><a href="{{ route('single-listing-01', ['title' => Str::slug($item['title'])]) }}" class="titleLink">{{ $item['title'] }}<span class="verified"><i class="bi bi-patch-check-fill m-0"></i></span></a></h4>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                    <div class="listing-info-details">
                        <div class="d-flex align-items-center justify-content-start gap-4">
                            <div class="list-calls"><i class="bi bi-telephone mb-0 me-2"></i>{{ $item['number'] }}</div>
                            <div class="list-distance"><i class="bi bi-geo-alt mb-0 me-2"></i>{{ $item['miles'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="listing-footer-item">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div class="catdWraps">
                            <div class="flex-start">
                                <a href="#" class="d-flex align-items-center justify-content-start gap-2">
                                    <span class="{{ $item['span'] }}"><i class="{{ $item['icon'] }}"></i></span>
                                    <span class="catTitle">{{ $item['name'] }}</span>
                                </a>
                            </div>
                            <div class="flex-end"><span class="moreCatcounter">{{ $item['plus'] }}</span></div>
                        </div>
                        <div class="listing-rates">
                            <div class="d-flex align-items-center justify-content-start gap-1">
                                <span class="ratingAvarage {{ $item['avarage'] }}">{{ $item['rating'] }}</span>
                                <span class="overallrates">{{ $item['reviews'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach