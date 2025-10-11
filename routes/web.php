<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\ArticleController as DashboardArticleController;


use App\Models\User;
use App\Models\Award;
use App\Models\Brand;
use App\Models\Member;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


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


/*
|--------------------------------------------------------------------------
| Dashboard (protected)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    // 🔹 Add this route here for real-time slug generation
    Route::get('/articles/checkSlug', [DashboardArticleController::class, 'checkSlug'])->name('articles.checkSlug');

    // Article management for admin
    Route::resource('news', ArticleController::class)->names('news');
});


// Dashboard CRUD (only for admin)
Route::middleware('auth')->prefix('dashboard/news')->group(function () {
    Route::get('/', [DashboardArticleController::class, 'index'])->name('dashboard.news.index');
    Route::get('/create', [DashboardArticleController::class, 'create'])->name('dashboard.news.create');
    Route::post('/news/store', [DashboardArticleController::class, 'store'])->name('dashboard.news.store');
    Route::get('/{article}/edit', [DashboardArticleController::class, 'edit'])->name('dashboard.news.edit');
    Route::put('/{article}', [DashboardArticleController::class, 'update'])->name('dashboard.news.update');
    Route::delete('/{article}', [DashboardArticleController::class, 'destroy'])->name('dashboard.news.destroy');
});

// Public SEO-friendly single article
Route::get('/news/{slug}', [ArticleController::class, 'show'])->name('news.show');
