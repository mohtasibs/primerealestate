@php
$categories = [
    [
        'id' => 'eatdrink1',
        'title' => 'Eat & Drink',
        'check' => '',
    ],
    [
        'id' => 'Apartments',
        'title' => 'Apartments',
        'check' => '',
    ],
    [
        'id' => 'classifieds1',
        'title' => 'Classified',
        'check' => '',
    ],
    [
        'id' => 'services1',
        'title' => 'Services',
        'check' => 'checked',
    ],
    [
        'id' => 'gymfitness1',
        'title' => 'Gym & Fitness',
        'check' => '',
    ],
    [
        'id' => 'nightlife1',
        'title' => 'Night Life',
        'check' => '',
    ],
    [
        'id' => 'coachings1',
        'title' => 'Coaching',
        'check' => '',
    ],
    [
        'id' => 'shoppings1',
        'title' => 'Shopping',
        'check' => '',
    ]
];
@endphp

@foreach ($categories as $item)
    <div class="form-checks flex-fill">
        <input type="checkbox" class="btn-check" id="{{ $item['id'] }}" {{ $item['check'] }}>
        <label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="{{ $item['id'] }}">{{ $item['title'] }}</label>
    </div>
@endforeach