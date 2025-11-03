<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $articleCount = Article::count();
        $jobApplicationCount = JobApplication::count();

        return view('dashboard.index', [
            'title' => 'Welcome',
            'articleCount' => $articleCount,
            'jobApplicationCount' => $jobApplicationCount
        ]);
    }
}
