<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('dashboard.news.index', [
            'title' => 'Manage Articles',
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create', [
            'title' => 'Create Article',
            'categories' => Category::all()
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = Str::slug($request->title);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:articles',
            'content'          => 'required|string',
            'category_id'      => 'required|exists:categories,id',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
        ]);

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('articles', 'public');
        }

        // Prepare data for insertion
        $validated['user_id'] = Auth::id();
        $validated['excerpt'] = Str::limit(strip_tags($request->content), 150);
        $validated['body'] = $validated['content']; // rename to match DB column
        unset($validated['content']); // remove temp key

        Article::create($validated);

        return redirect()->route('dashboard.news.index')->with('success', 'Article created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $news)
    {
        return view('dashboard.news.edit', [
            'title' => 'Edit Article',
            'article' => $news,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $news)
    {
        $rules = [
            'title'       => 'required|string|max:255',
            'body'        => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ];

        // Unique slug only if changed
        if ($request->slug !== $news->slug) {
            $rules['slug'] = 'required|string|max:255|unique:articles';
        }

        $validated = $request->validate($rules);

        // Handle new image
        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $validated['excerpt'] = Str::limit(strip_tags($request->body), 150);

        $news->update($validated);

        return redirect()->route('dashboard.news.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('dashboard.news.index')->with('success', 'Article deleted successfully.');
    }
}
