@php
$amenities = [
    [
        'id' => 'airconditions',
        'title' => 'Air Condition',
    ],
    [
        'id' => 'gardens',
        'title' => 'Garden',
    ],
    [
        'id' => 'parkings',
        'title' => 'Parking',
    ],
    [
        'id' => 'petallow',
        'title' => 'Pet Allow',
    ],
    [
        'id' => 'freewifi',
        'title' => 'Free WiFi',
    ],
    [
        'id' => 'breakfast',
        'title' => 'Breakfast',
    ],
    [
        'id' => 'dinner',
        'title' => 'Dinner',
    ],
    [
        'id' => 'smoking',
        'title' => 'Smoking',
    ],
    [
        'id' => 'swimming',
        'title' => 'Swimming',
    ]
];
@endphp

@foreach ($amenities as $item)
    <div class="col-6">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="{{ $item['id'] }}">
            <label class="form-check-label" for="{{ $item['id'] }}">{{ $item['title'] }}</label>
        </div>
    </div>
@endforeach