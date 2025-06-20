<?php

namespace App\Http\Controllers;

use App\Mail\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact-us');
    }

    public function send(Request $request)
    {
        try {
            // Validate incoming request
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'number' => 'required',
                'subject' => 'required|string',
                'query' => 'required|string',
            ]);

            // Prepare data array
            $data = $request->only(['name', 'email', 'number', 'subject', 'query']);

            // Send email using Mailable
            Mail::to('jamshedsyed2@gmail.com')->send(new Contactus($data));

            // Return success response
            return back()->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            Log::error('Contact form failed: ' . $e->getMessage());

            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
