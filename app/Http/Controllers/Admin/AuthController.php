<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Hardcoded plain admin credentials (you can change anytime here)
    private $defaultAdmin = [
        'name' => 'Super Admin',
        'email' => 'admin@example.com',
        'password' => 'Admin@123', // plain password (you will use this to login)
    ];

    public function showLogin()
    {
        // Ensure default admin exists before showing login
        $this->ensureDefaultAdmin();
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // Find admin by email
        $admin = Admin::where('email', $request->email)->first();

        // Check password using Hash
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Save admin ID in session
            session(['admin_id' => $admin->id]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials. Please try again.',
        ]);
    }

    public function logout()
    {
        session()->forget('admin_id');
        return redirect()->route('admin.login');
    }

    /**
     * Ensure the default admin exists in DB
     */
    private function ensureDefaultAdmin()
    {
        $admin = Admin::where('email', $this->defaultAdmin['email'])->first();

        if (!$admin) {
            Admin::create([
                'name'     => $this->defaultAdmin['name'],
                'email'    => $this->defaultAdmin['email'],
                'password' => Hash::make($this->defaultAdmin['password']), // store hashed
            ]);
        }
    }
}
