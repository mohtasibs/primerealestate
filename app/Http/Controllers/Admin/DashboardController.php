<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Property;

class DashboardController extends Controller
{
    public function index()
    {
        // Check if admin is logged in
        if (!session()->has('admin_id')) {
            return redirect()->route('admin.login');
        }

        // Fetch the logged-in admin
        $admin = Admin::find(session('admin_id'));

        // If admin not found (maybe deleted from DB), force logout
        if (!$admin) {
            session()->forget('admin_id');
            return redirect()->route('admin.login')->withErrors([
                'email' => 'Your account no longer exists.',
            ]);
        }

        // Fetch all properties with images for dashboard
        $properties = Property::with('images')->get();

        return view('admin.dashboard', compact('admin', 'properties'));
    }
}
