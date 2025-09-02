@php
$closes = [
    [
        'title' => 'Classified',
    ],
    [
        'title' => 'Services',
    ],
    [
        'title' => '75Km',
    ],
    [
        'title' => 'Dinner',
    ],
    [
        'title' => '$80-$100',
    ]
];
@endphp

@foreach ($closes as $item)
    <div class="alert tag-alert alert-light alert-dismissible fade show" role="alert">
        <span>{{ $item['title'] }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach