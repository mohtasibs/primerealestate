<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('admin_id')) {
            return redirect()->route('admin.login');
        }

        // Get logged in admin
        $admin = Admin::find(session('admin_id'));

        return view('admin.dashboard', compact('admin'));
    }
}
