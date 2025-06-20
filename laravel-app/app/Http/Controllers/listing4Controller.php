<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class listing4Controller extends Controller
{
    public function show($title)
    {
        $events = [
            [
                'id' => 1,
                'img' => 'assets/img/eve-1.jpg',
                'title' => 'Learn Cooc with Shree Patel',
                'time' => '10:30 AM To 14:40 PM',
                'name' => 'Cooking',
                'color' => 'badge badge-xs badge-danger',
                'date' => '25',
                'month' => 'Aug',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/eve-2.jpg',
                'title' => 'Enjoy with Adobe Ceremoney',
                'time' => '20:0 AM To 22:30 PM',
                'name' => 'Nightlife',
                'color' => 'badge badge-xs badge-success',
                'date' => '15',
                'month' => 'Sep',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/eve-3.jpg',
                'title' => 'Join AI Community Workshop',
                'time' => '8:30 AM To 12:20 PM',
                'name' => 'Workshop',
                'color' => 'badge badge-xs badge-warning',
                'date' => '10',
                'month' => 'Nov',
            ]
        ];

        // Find the course by ID
        $item = collect($events)->first(function ($event) use ($title) {
            return Str::slug($event['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('single-listing-04', compact('item'));
    }
}