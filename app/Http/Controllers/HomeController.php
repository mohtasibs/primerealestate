<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home3()
    {
        return view('home-3');
    }

    public function singleListing02()
    {
        return view('single-listing-02');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetail()
    {
        return view('blog-detail');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function error()
    {
        return view('error');
    }
}
