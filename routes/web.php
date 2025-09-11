<?php

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['name' => 'Qodri Khalik', 'title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/our-business', function () {
    return view('our-business', ['title' => 'Our Business']);
});

Route::get('/service-center', function () {
    return view('service-center', ['title' => 'Service Center']);
});

Route::get('/warranty', function () {
    return view('warranty', ['title' => 'Warranty']);
});

// All articles
Route::get('/news', function () {


    return view('news.news', ['title' => 'News', 'articles' => Article::filter(request(['search', 'category', 'author']))->latest()->simplePaginate(9)->withQueryString()]);
});

// Single article
Route::get('news/{article:slug}', function (Article $article) {
    return view('news.article', ['title' => 'Article', 'article' => $article]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/career', function () {
    return view('career', ['title' => 'Career']);
});
