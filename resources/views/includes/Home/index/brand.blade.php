@php
$brands = [
    [
        'img' => 'assets/img/brand/logo-1.png',
    ],
    [
        'img' => 'assets/img/brand/logo-2.png',
    ],
    [
        'img' => 'assets/img/brand/logo-3.png',
    ],
    [
        'img' => 'assets/img/brand/logo-4.png',
    ],
    [
        'img' => 'assets/img/brand/logo-5.png',
    ],
    [
        'img' => 'assets/img/brand/logo-6.png',
    ]
];
@endphp

@foreach ($brands as $item)
    <div class="brand-slide px-3 px-lg-5">
        <img src="{{ asset($item['img']) }}" class="light-mode-item img-fluid" alt="brand image">
    </div>
@endforeach