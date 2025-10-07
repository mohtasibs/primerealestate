<?php

namespace App\Http\Controllers;

use App\Mail\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact-us');
    }

    public function send(Request $request)
    {
        try {
            // Honeypot field check - silent bot trap
            if (!empty($request->input('website'))) {
                return back()->with('error', 'Spam detected. Submission blocked.');
            }

            // Validate form input and reCAPTCHA token
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'number' => 'required',
                'subject' => 'required|string',
                'query' => 'required|string',
                'consent' => 'accepted', // added TCPA consent validation
                'g-recaptcha-response' => 'required'
            ]);

            // Verify reCAPTCHA v2 checkbox
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('NOCAPTCHA_SECRET'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            $result = $response->json();

            // Log response for debugging
            Log::info('reCAPTCHA v2 response:', $result);

            if (empty($result['success']) || !$result['success']) {
                return back()->with('error', 'reCAPTCHA verification failed. Please check the box.');
            }

            // Prepare data
            $data = $request->only(['name', 'email', 'number', 'subject', 'query']);

            // Send email
            Mail::to('jamshedsyed2@gmail.com')->send(new Contactus($data));

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
