@php
$alls = [
    [
        'id' => 'all',
        'title' => 'All',
        'check' => 'checked',
    ],
    [
        'id' => 'threeplus',
        'title' => '3.0+',
        'check' => '',
    ],
    [
        'id' => 'fourplus',
        'title' => '4.0+',
        'check' => '',
    ],
    [
        'id' => 'fiveplus',
        'title' => '5.0',
        'check' => '',
    ]
];
@endphp

@foreach ($alls as $item)
    <div class="filterFlex">
        <input type="radio" class="btn-check" name="ratingsfilter" id="{{ $item['id'] }}" {{ $item['check'] }}>
        <label class="btn" for="{{ $item['id'] }}"><i class="bi bi-star-fill me-1"></i>{{ $item['title'] }}</label>
    </div>
@endforeach