<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RentalApplicationController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        $emailBody = "Rental Application Submission:\n\n";
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $emailBody .= ucfirst($key) . ": " . implode(', ', $value) . "\n";
            } else {
                $emailBody .= ucfirst($key) . ": " . $value . "\n";
            }
        }

        Mail::raw($emailBody, function ($message) {
            $message->to('jamshedsyed2@gmail.com') // Use your configured email
                    ->subject('New Rental Application');
        });

        return back()->with('success', 'Your rental application has been submitted successfully.');
    }
}
