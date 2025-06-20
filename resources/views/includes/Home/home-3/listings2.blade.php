@php
use Illuminate\Support\Str;

$listings = [
    [
        'id' => 1,
        'img' => '',
        'img1' => '',
        'title' => 'Leased, 2 Bedroom 1 Bath Duplex, 1 car attached garage, Lawn Care included',
        'number' => '',
        'location' => '202 W. Wabash Ave, Stonington, IL 62567',
        'name' => 'Rental Property',
        'icon' => 'bi bi-house-door',
        'span' => 'catIcon cats-1',
        'reviews' => '45 Reviews',
        'btn' => 'Leased',
        'color' => 'listClose',
        'dollar' => '$750',
        'btn1' => 'Featured',
        'tag' => 'true',
        'slug' => 'leased-2-bedroom-1-bath-202-wabash'
    ],
    [
        'id' => 2,
        'img' => '',
        'img1' => '',
        'title' => 'Leased, 2 Bedroom 1 Bath Duplex, 1 Car attached garage, Lawn care included',
        'number' => '',
        'location' => '102-108 S Elder St, Mount Olive, IL 62069',
        'name' => 'Rental Property',
        'icon' => 'bi bi-house-door',
        'span' => 'catIcon cats-2',
        'reviews' => '50 Reviews',
        'btn' => 'Leased',
        'color' => 'listClose',
        'dollar' => '$750',
        'btn1' => '',
        'tag' => 'false',
        'slug' => 'leased-2-bedroom-1-bath-elder-mount-olive'
    ]
];
@endphp

@foreach ($listings as $item)
    <div class="singleItem">
        <div class="listingitem-container">
            <div class="singlelisting-item bg-light border-0">
                <div class="listing-top-item">
                    <div class="position-absolute end-0 top-0 me-3 mt-3 z-2">
                        <a href="#" class="bookmarkList" data-bs-toggle="tooltip" data-bs-title="Save Listing"><i class="bi bi-suit-heart m-0"></i></a>
                    </div>
                    <a href="{{ route('single-listing-02', ['title' => $item['slug']]) }}" class="topLink">
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
                    <div class="opssListing position-absolute start-0 bottom-0 ms-3 mb-4 z-2">
                        <div class="d-flex align-items-center justify-content-start gap-2">
                            <div class="listing-avatar">
                                <a href="#" class="avatarImg"><img src="{{ asset($item['img1']) }}" class="img-fluid circle" alt="Avatar"></a>
                            </div>
                            <div class="listing-details">
                                <h4 class="listingTitle">
                                    <a href="{{ route('single-listing-02', ['title' => $item['slug']]) }}" class="titleLink">
                                        {{ $item['title'] }}<span class="verified"><i class="bi bi-patch-check-fill m-0"></i></span>
                                    </a>
                                </h4>
                                <div class="list-infos">
                                    <div class="d-flex align-items-center justify-content-start gap-3 mt-1">
                                        <div class="list-distance text-light"><i class="bi bi-geo-alt mb-0 me-2"></i>{{ $item['location'] }}</div>
                                        <div class="list-calls text-light hide-mob"><i class="bi bi-telephone mb-0 me-2"></i>{{ $item['number'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing-footer-item border-0">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div class="catdWraps">
                            <div class="flex-start">
                                <a href="#" class="d-flex align-items-center justify-content-start gap-2">
                                    <span class="{{ $item['span'] }}"><i class="{{ $item['icon'] }}"></i></span>
                                    <span class="catTitle">{{ $item['name'] }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="listing-rates">
                            <div class="d-flex align-items-center justify-content-start gap-2">
                                <span class="d-flex align-items-center justify-content-start gap-1 text-sm">
                                    <i class="bi bi-star-fill mb-0 text-warning"></i>
                                    <i class="bi bi-star-fill mb-0 text-warning"></i>
                                    <i class="bi bi-star-fill mb-0 text-warning"></i>
                                    <i class="bi bi-star-fill mb-0 text-warning"></i>
                                    <i class="bi bi-star-half mb-0 text-warning"></i>
                                </span>
                                <span class="text-md text-muted-2 hide-mob">({{ $item['reviews'] }})</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
