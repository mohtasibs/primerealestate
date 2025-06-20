<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function show($title)
    {
        $blogs = [
            [
                'id' => 1,
                'img' => 'assets/img/blog-2.jpg', 
                'title' => '10 Must-Have Bootstrap Templates for Modern Web Design',
                'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius Catilina. Hourly on the day of going live.",
                'date' => '28 May 2025',
                'views' => '12k Views',
            ],
            [
                'id' => 2,
                'img' => 'assets/img/blog-1.jpg', 
                'title' => 'Top 5 Bootstrap Themes for E-commerce Websites.',
                'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius Catilina. Hourly on the day of going live.",
                'date' => '10 May 2025',
                'views' => '33k Views',
            ],
            [
                'id' => 3,
                'img' => 'assets/img/blog-3.jpg', 
                'title' => 'The Ultimate Guide to Customizing Bootstrap Templates',
                'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius Catilina. Hourly on the day of going live.",
                'date' => '22 March 2025',
                'views' => '15k Views',
            ],
            [
                'id' => 4,
                'img' => 'assets/img/blog-4.jpg', 
                'title' => 'Top 10 Free Bootstrap Templates for Your Next Project',
                'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius Catilina. Hourly on the day of going live.",
                'date' => '12 Feb 2025',
                'views' => '12k Views',
            ],
            [
                'id' => 5,
                'img' => 'assets/img/blog-5.jpg', 
                'title' => 'Creating Stunning Landing Pages with Bootstrap: Best Practices',
                'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius Catilina. Hourly on the day of going live.",
                'date' => '17 Jan 2025',
                'views' => '33k Views',
            ],
            [
                'id' => 6,
                'img' => 'assets/img/blog-6.jpg', 
                'title' => 'The Benefits of Using Bootstrap for Your Web Development Projects',
                'desc' => "Think of a news blog that's filled with content political against opponent Lucius Sergius Catilina. Hourly on the day of going live.",
                'date' => '07 March 2025',
                'views' => '15k Views',
            ]
        ];

        // Find the course by ID
        $item = collect($blogs)->first(function ($blog) use ($title) {
            return Str::slug($blog['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('blog-detail', compact('item'));
    }
}