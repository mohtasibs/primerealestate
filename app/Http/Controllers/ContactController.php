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

            // Validate form input + reCAPTCHA token
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'number' => 'required',
                'subject' => 'required|string',
                'query' => 'required|string',
                'g-recaptcha-response' => 'required'
            ]);

            // Verify reCAPTCHA v3 with Google API
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('NOCAPTCHA_SECRET'),
                'response' => $request->input('g-recaptcha-response'),
            ]);

            $result = $response->json();

            // Log full reCAPTCHA API response for debugging
            Log::info('reCAPTCHA result:', $result);

            if (!isset($result['success']) || !$result['success'] || $result['score'] < 0.5) {
                return back()->with('error', 'reCAPTCHA verification failed. Please try again.');
            }

            // Prepare email data
            $data = $request->only(['name', 'email', 'number', 'subject', 'query']);

            // Send contact message via Mailable
            Mail::to('jamshedsyed2@gmail.com')->send(new Contactus($data));

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Contact form failed: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
