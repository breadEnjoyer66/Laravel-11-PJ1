<?php

namespace App\Http\Controllers;

use App\Models\Article; // ensure Article model exists
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    // old function
    // public function index()
    // {
    //     $articles = Article::latest()->paginate(12);
    //     return view('dashboard.news.index', compact('articles'));
    // }

    public function index()
    {
        $articles = Article::filter(request(['search', 'category', 'author']))
            ->latest()
            ->simplePaginate(9)
            ->withQueryString();

        return view('news.news', [
            'title' => 'Latest News',
            'articles' => $articles
        ]);
    }
}
