<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\Dashboard\ArticleController as DashboardArticleController;


use App\Models\User;
use App\Models\Award;
use App\Models\Brand;
use App\Models\Member;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;





// public routes
Route::get('/', function () {
    return view('home', ['name' => 'Qodri Khalik', 'title' => 'Home', 'brands' => Brand::all(), 'awards' => Award::all()]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us', 'brands' => Brand::all(), 'members' => Member::all()]);
});

Route::get('/our-business', function () {
    return view('our-business', ['title' => 'Our Business Network']);
});

Route::get('/service-center', function () {
    return view('service-center', ['title' => 'Service Center']);
});

Route::get('/warranty', function () {
    return view('warranty', ['title' => 'Warranty']);
});

// Public News Index
Route::get('/news', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/career', function () {
    return view('career', ['title' => 'Career']);
});



Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::get('forgot-password', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('forgot-password', [AuthController::class, 'handleForgot'])->name('password.forgot');

Route::get('password/reset/{user}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset/{user}', [AuthController::class, 'resetPassword'])->name('password.reset.post');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Registration (admin only)
Route::middleware('auth')->group(function () {
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.post');
});



// Dashboard routes
Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    // Real-time slug generator
    Route::get('/news/checkSlug', [DashboardArticleController::class, 'checkSlug'])->name('news.checkSlug');


    Route::post('/news/upload-image', [DashboardArticleController::class, 'uploadImage'])->name('news.upload-image');





    // Proper resource route for admin news
    Route::resource('news', DashboardArticleController::class)->names('news');
});


// Public SEO-friendly single article
// Serve articles at the root-level slug (e.g. /my-article-slug)
// Keep this at the bottom to avoid catching other routes unintentionally.
Route::get('/{slug}', [ArticleController::class, 'show'])->name('news.show');


Route::post('/career', [JobApplicationController::class, 'store'])->name('career.store');
