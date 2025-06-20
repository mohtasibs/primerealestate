<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class listing5Controller extends Controller
{
    public function show($title)
    {
        $listings = [
            [
                'id' => 1,
                'img' => 'assets/img/list-1.jpg',
                'img1' => 'assets/img/team-1.jpg',
                'title' => 'The Big Bumbble Gym',
                'number' => '+42 515 635 4758',
                'location' => 'Jakarta, USA',
                'name' => 'Health & Fitness',
                'icon' => 'fa-solid fa-dumbbell',
                'span' => 'catIcon cats-1',
                'reviews' => '42 Reviews',
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
                'number' => '+42 515 635 6150',
                'location' => 'Jakarta, USA',
                'name' => 'Real Estate',
                'icon' => 'bi bi-house-check',
                'span' => 'catIcon cats-2',
                'reviews' => '39 Reviews',
                'btn' => 'Closed',
                'color' => 'listClose',
                'dollar' => '$$$$',
                'btn1' => '',
                'tag' => 'false',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/list-3.jpg',
                'img1' => 'assets/img/team-3.jpg',
                'title' => 'Shree Wedding Planner',
                'number' => '+42 515 635 4785',
                'location' => 'Jakarta, USA',
                'name' => 'Wedding & Evemts',
                'icon' => 'bi bi-lamp',
                'span' => 'catIcon cats-3',
                'reviews' => '65 Reviews',
                'btn' => 'Open',
                'color' => 'listOpen',
                'dollar' => '$$$',
                'btn1' => 'Featured',
                'tag' => 'true',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/list-4.jpg',
                'img1' => 'assets/img/team-4.jpg',
                'title' => 'The Blue Ley Light',
                'number' => '+42 515 635 6358',
                'location' => 'Jakarta, USA',
                'name' => 'Restaurant',
                'icon' => 'bi bi-cup-straw',
                'span' => 'catIcon cats-4',
                'reviews' => '152 Reviews',
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
                'number' => '+42 515 635 0210',
                'location' => 'Jakarta, USA',
                'name' => 'Education',
                'icon' => 'bi bi-mortarboard',
                'span' => 'catIcon cats-5',
                'reviews' => '72 Reviews',
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
                'number' => '+42 515 635 3251',
                'location' => 'Jakarta, USA',
                'name' => 'Showroom',
                'icon' => 'bi bi-backpack',
                'span' => 'catIcon cats-6',
                'reviews' => '42 Reviews',
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
                'number' => '+42 515 635 5426',
                'location' => 'Jakarta, USA',
                'name' => 'Eat & Drink',
                'icon' => 'bi bi-cup-hot',
                'span' => 'catIcon cats-7',
                'reviews' => '625 Reviews',
                'btn' => 'Closed',
                'color' => 'listClose',
                'dollar' => '$$$',
                'btn1' => '',
                'tag' => 'false',
            ],
            [
                'id' => 8,
                'img' => 'assets/img/list-8.jpg',
                'img1' => 'assets/img/team-8.jpg',
                'title' => 'Agroo Spa & Massage Center',
                'number' => '+42 515 635 2136',
                'location' => 'Jakarta, USA',
                'name' => 'Spa & Beauty',
                'icon' => 'bi bi-basket2',
                'span' => 'catIcon cats-8',
                'reviews' => '102 Reviews',
                'btn' => 'Open',
                'color' => 'listOpen',
                'dollar' => '$$$$',
                'btn1' => 'Featured',
                'tag' => 'true',
            ]
        ];

        // Find the course by ID
        $item = collect($listings)->first(function ($listing) use ($title) {
            return Str::slug($listing['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('single-listing-05', compact('item'));
    }
}