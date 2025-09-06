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

// All articles
Route::get('/news', function () {


    return view('news', ['title' => 'News', 'articles' => Article::filter(request(['search', 'category', 'author']))->latest()->simplePaginate(9)->withQueryString()]);
});

// Single article
Route::get('news/{article:slug}', function (Article $article) {

    return view('article', ['title' => 'Article', 'article' => $article]);
});

// Articles by author
Route::get('/authors/{user:username}', function (User $user) {

    return view('news', ['title' => count($user->articles) . ' Articles written by ' . $user->name, 'articles' => $user->articles]);
});

// Articles by category
Route::get('/categories/{category:slug}', function (Category $category) {

    return view('news', ['title' => 'News about ' . $category->name, 'articles' => $category->articles]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/career', function () {
    return view('career', ['title' => 'Career']);
});
