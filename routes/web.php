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
Route::get('/home-2', [HomeController::class, 'home2']);
Route::get('/home-3', [HomeController::class, 'home3']);
Route::get('/home-4', [HomeController::class, 'home4']);
Route::get('/home-5', [HomeController::class, 'home5']);
Route::get('/home-6', [HomeController::class, 'home6']);
Route::get('/home-7', [HomeController::class, 'home7']);
Route::get('/home-8', [HomeController::class, 'home8']);
Route::get('/home-9', [HomeController::class, 'home9']);
Route::get('/home-10', [HomeController::class, 'home10']);
Route::get('/home-splash', [HomeController::class, 'homeSplash']);
Route::get('/home-map', [HomeController::class, 'homeMap']);

Route::get('/grid-layout-01', [HomeController::class, 'gridLayout01']);
Route::get('/grid-layout-02', [HomeController::class, 'gridLayout02']);
Route::get('/grid-layout-03', [HomeController::class, 'gridLayout03']);
Route::get('/grid-layout-04', [HomeController::class, 'gridLayout04']);
Route::get('/grid-layout-05', [HomeController::class, 'gridLayout05']);
Route::get('/grid-layout-06', [HomeController::class, 'gridLayout06']);

Route::get('/list-layout-01', [HomeController::class, 'listLayout01']);
Route::get('/list-layout-02', [HomeController::class, 'listLayout02']);
Route::get('/list-layout-03', [HomeController::class, 'listLayout03']);
Route::get('/list-layout-04', [HomeController::class, 'listLayout04']);
Route::get('/list-layout-05', [HomeController::class, 'listLayout05']);

Route::get('/half-map-01', [HomeController::class, 'halfMap01']);
Route::get('/half-map-02', [HomeController::class, 'halfMap02']);
Route::get('/half-map-03', [HomeController::class, 'halfMap03']);
Route::get('/half-map-04', [HomeController::class, 'halfMap04']);
Route::get('/half-map-05', [HomeController::class, 'halfMap05']);

Route::get('/single-listing-01', [HomeController::class, 'singleListing01']);
Route::get('/single-listing-01/{title}', [listing1Controller::class, 'show'])->name('single-listing-01');

Route::get('/single-listing-02', [HomeController::class, 'singleListing02']);
Route::get('/single-listing-02/{title}', [listing2Controller::class, 'show'])->name('single-listing-02');

Route::get('/single-listing-03', [HomeController::class, 'singleListing03']);
Route::get('/single-listing-03/{title}', [listing3Controller::class, 'show'])->name('single-listing-03');

Route::get('/single-listing-04', [HomeController::class, 'singleListing04']);
Route::get('/single-listing-04/{title}', [listing4Controller::class, 'show'])->name('single-listing-04');

Route::get('/single-listing-05', [HomeController::class, 'singleListing05']);
Route::get('/single-listing-05/{title}', [listing5Controller::class, 'show'])->name('single-listing-05');

Route::get('/dashboard-user', [HomeController::class, 'dashboardUser']);
Route::get('/dashboard-my-profile', [HomeController::class, 'dashboardMyProfile']);
Route::get('/dashboard-my-bookings', [HomeController::class, 'dashboardMyBookings']);
Route::get('/dashboard-my-listings', [HomeController::class, 'dashboardMyListings']);
Route::get('/dashboard-bookmarks', [HomeController::class, 'dashboardBookmarks']);
Route::get('/dashboard-messages', [HomeController::class, 'dashboardMessages']);
Route::get('/dashboard-reviews', [HomeController::class, 'dashboardReviews']);
Route::get('/dashboard-wallet', [HomeController::class, 'dashboardWallet']);
Route::get('/dashboard-add-listing', [HomeController::class, 'dashboardAddListing']);

Route::get('/login', [HomeController::class, 'login']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/forgot-password', [HomeController::class, 'forgotPassword']);
Route::get('/two-factor-auth', [HomeController::class, 'twoFactorAuth']);

Route::get('/author-profile', [HomeController::class, 'authorProfile']);
Route::get('/booking-page', [HomeController::class, 'bookingPage']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/blog', [HomeController::class, 'blog']);

Route::get('/blog-detail', [HomeController::class, 'blogDetail']);
Route::get('/blog-detail/{title}', [BlogController::class, 'show'])->name('blog-detail');

Route::get('/contact-us', [HomeController::class, 'contactUs']);

Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/help-center', [HomeController::class, 'helpCenter']);
Route::get('/comingsoon', [HomeController::class, 'comingsoon']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/error', [HomeController::class, 'error']);
Route::get('/elements', [HomeController::class, 'elements']);

Route::get('/checkout-page', [HomeController::class, 'checkoutPage']);
Route::get('/invoice-page', [HomeController::class, 'invoicePage']);
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('/single-helps', [HomeController::class, 'singleHelps']);
Route::get('/success-payment', [HomeController::class, 'successPayment']);
Route::get('/viewcart', [HomeController::class, 'viewcart']);

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




