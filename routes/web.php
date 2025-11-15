<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\listing1Controller;
use App\Http\Controllers\listing2Controller;
use App\Http\Controllers\listing3Controller;
use App\Http\Controllers\listing4Controller;
use App\Http\Controllers\listing5Controller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ValuationController;
use App\Http\Controllers\RentalApplicationController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminPropertyController;


Route::get('/', [HomeController::class, 'home3']);
Route::get('/home-3', [HomeController::class, 'home3']);

Route::get('/single-listing-02', [HomeController::class, 'singleListing02']);
Route::get('/single-listing-02/{title}', [listing2Controller::class, 'show'])->name('single-listing-02');

Route::get('/login', [HomeController::class, 'login']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/forgot-password', [HomeController::class, 'forgotPassword']);

Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog-detail', [HomeController::class, 'blogDetail']);
Route::get('/blog-detail/{title}', [BlogController::class, 'show'])->name('blog-detail');

Route::get('/error', [HomeController::class, 'error']);
Route::get('/leased-property-1', function () {
    return view('single-listing-02');
})->name('property.stonington');

Route::get('/leased-property-2', function () {
    return view('single-listing-property2');
})->name('property.mount-olive');

Route::get('/property-management', function () {
    return view('property-management');
})->name('property.management');

Route::get('/our-agent', function () {
    return view('our-agent');
});

Route::get('/contact-us', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');


Route::view('/home-search', 'home-search');
Route::view('/home-valuation', 'home-valuation');

Route::post('/submit-feedback', [FeedbackController::class, 'send'])->name('feedback.send');

Route::post('/home-valuation', [ValuationController::class, 'send'])->name('valuation.send');

Route::post('/rental-application', [RentalApplicationController::class, 'send'])->name('rental.send');

Route::view('/community/chesterfield-wildwood', 'neighborhoods.chesterfield-wildwood')->name('community.cfw');
Route::view('/community/ladue-frontenac-huntleigh', 'neighborhoods.ladue-frontenac-huntleigh')->name('community.ladue');
Route::view('/community/kirkwood-webster', 'neighborhoods.kirkwood-webster')->name('community.kirkwoodwebster');
Route::view('/community/clayton-university-city', 'neighborhoods.clayton-university-city')->name('community.claytonuc');
Route::view('/community/stcharles-ofallon-stlouis', 'neighborhoods.stcharles-ofallon-stlouis')->name('community.stcharles');
Route::view('/community/town-country', 'neighborhoods.town-country')->name('community.towncountry');
Route::view('/community/edwardsville', 'neighborhoods.edwardsville')->name('community.edwardsville');
Route::view('/community/collinsville', 'neighborhoods.collinsville')->name('community.collinsville');
Route::view('/community/ofallon', 'neighborhoods.ofallon')->name('community.ofallon');




Route::get('/listing-results', function () {
    return view('pages.listing-results');
})->name('listing.results');

Route::get('/listing-details', function () {
    return view('pages.listing-details');
})->name('listing.details');


Route::view('/our-listings', 'search-properties.our-listings')->name('search.ourListings');
Route::view('/mo-properties', 'search-properties.mo-properties')->name('search.moProperties');
Route::view('/il-properties', 'search-properties.il-properties')->name('search.ilProperties');


Route::prefix('admin')->group(function () {
    // Authentication
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Protected routes (controllers themselves will check session)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Admin Properties
    Route::get('/properties', [AdminPropertyController::class, 'index'])->name('admin.properties.index');
    Route::get('/properties/create', [AdminPropertyController::class, 'create'])->name('admin.properties.create');
    Route::post('/properties', [AdminPropertyController::class, 'store'])->name('admin.properties.store');
    Route::get('/properties/{id}', [AdminPropertyController::class, 'show'])->name('admin.properties.show');
    Route::get('/properties/{id}/edit', [AdminPropertyController::class, 'edit'])->name('admin.properties.edit');
    Route::put('/properties/{id}', [AdminPropertyController::class, 'update'])->name('admin.properties.update');
    Route::delete('/properties/{id}', [AdminPropertyController::class, 'destroy'])->name('admin.properties.destroy');
});


// Privacy Policy page
Route::view('/privacy-policy', 'privacy-policy')->name('privacyPolicy');
