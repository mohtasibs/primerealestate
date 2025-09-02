@php
$tags = [
    ['title' => 'Real Estate'],
    ['title' => 'Home Buying'],
    ['title' => 'Property Investment'],
    ['title' => 'Mortgage Tips'],
    ['title' => 'St. Louis Living'],
    ['title' => 'Relocation Guide'],
    ['title' => 'Neighborhoods'],
    ['title' => 'Market Trends'],
    ['title' => 'First-Time Buyers']
];
@endphp

@foreach ($tags as $item)
    <li><a href="#">{{ $item['title'] }}</a></li>
@endforeach
