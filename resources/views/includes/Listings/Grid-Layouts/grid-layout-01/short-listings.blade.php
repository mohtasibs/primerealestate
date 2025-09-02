@php
$listings = [
    [
        'title' => 'Default Order',
        'class' => '',
    ],
    [
        'title' => 'Highest Rated',
        'class' => '',
    ],
    [
        'title' => 'Most Reviewed',
        'class' => 'active',
    ],
    [
        'title' => 'Newest Listings',
        'class' => '',
    ],
    [
        'title' => 'Oldest Listings',
        'class' => '',
    ],
    [
        'title' => 'Featured Listings',
        'class' => '',
    ],
    [
        'title' => 'Most Viewed',
        'class' => '',
    ],
    [
        'title' => 'Short By A To Z',
        'class' => '',
    ]
];
@endphp

@foreach ($listings as $item)
    <li><a class="{{ $item['class'] }} dropdown-item" href="#">{{ $item['title'] }}</a></li>
@endforeach