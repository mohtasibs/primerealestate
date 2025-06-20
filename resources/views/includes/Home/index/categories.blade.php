@php
$categories = [
    [
        'icon' => 'bi bi-backpack',
        'title' => 'Showroom',
        'lists' => '103 Lists',
    ],
    [
        'icon' => 'bi bi-basket2',
        'title' => 'Fashion & Beauty',
        'lists' => '110 Lists',
    ],
	[
        'icon' => 'bi bi-house-check',
        'title' => 'Real Estate',
        'lists' => '35 Lists',
    ],
	[
        'icon' => 'fa-solid fa-dumbbell',
        'title' => 'Health & Fitness',
        'lists' => '120 Lists',
    ],
	[
        'icon' => 'bi bi-shop',
        'title' => 'Business Shp',
        'lists' => '69 Lists',
    ],
	[
        'icon' => 'bi bi-cup-hot',
        'title' => 'Coffe Shop',
        'lists' => '78 Lists',
    ],
	[
        'icon' => 'bi bi-cup-straw',
        'title' => 'Restaurants',
        'lists' => '69 Lists',
    ],
	[
        'icon' => 'bi bi-lungs',
        'title' => 'Hospital & Med',
        'lists' => '75 Lists',
    ],
	[
        'icon' => 'bi bi-lamp',
        'title' => 'Wedding & Events',
        'lists' => '16 Lists',
    ],
	[
        'icon' => 'bi bi-mortarboard',
        'title' => 'Education',
        'lists' => '62 Lists',
    ]
];
@endphp

@foreach ($categories as $item)
	<div class="singleCategory">
		<div class="category-small-wrapper light">
			<a href="#" class="categoryBox">
				<div class="categoryCapstions">
					<div class="catsIcons"><div class="icoBoxx"><i class="{{ $item['icon'] }}"></i></div></div>
					<div class="catsTitle"><h5>{{ $item['title'] }}</h5></div>
					<div class="CatsLists"><span class="categorycounter">{{ $item['lists'] }}</span></div>
				</div>
			</a>
		</div>	
	</div>
@endforeach