<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ValuationController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',a
            'mobile' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = $request->all();

        $emailBody =
            "First Name: {$data['first_name']}\n" .
            "Last Name: {$data['last_name']}\n" .
            "Email: {$data['email']}\n" .
            "Phone No: {$data['mobile']}\n" .
            "Address: " . ($data['address'] ?? '') . "\n" .
            "City: " . ($data['city'] ?? '') . "\n" .
            "State: " . ($data['state'] ?? '') . "\n" .
            "Zip: " . ($data['zip'] ?? '') . "\n" .
            "Message: {$data['message']}\n" .
            "Consent Given: " . (isset($data['consent']) ? 'Yes' : 'No');


        Mail::raw($emailBody, function ($message) use ($data) {
            $message->to('jamshedsyed2@gmail.com') // Replace with your recipient email
                    ->subject('Home Valuation Request');
        });

        return back()->with('success', 'Thank you! Your home valuation request has been sent successfully.');
    }
}
