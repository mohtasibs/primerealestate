<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\HtmlString;

class FeedbackController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'rating' => 'required',
            'review' => 'required'
        ]);

        $data = $request->only(['name', 'email', 'rating', 'review']);

        Mail::html(
            "<h2>New Feedback Received</h2>
            <p><strong>Name:</strong> {$data['name']}</p>
            <p><strong>Email:</strong> {$data['email']}</p>
            <p><strong>Rating:</strong> {$data['rating']}</p>
            <p><strong>Review:</strong><br>{$data['review']}</p>",
            function ($message) {
                $message->to('jamshedsyed2@gmail.com')->subject('New Feedback Received');
            }
        );
        return back()->with('success', 'Thank you! Your feedback has been sent successfully.');
    }
}
