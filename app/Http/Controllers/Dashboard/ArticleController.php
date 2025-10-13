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
    public function index()
    {
        $articles = Article::with(['user', 'category'])->latest()->paginate(10);
        return view('dashboard.news.index', compact('articles'));
    }


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



    public function store(Request $request)
    {
        // dd($request->all());
        $messages = [
            'slug.unique' => 'Slug already exists. Please choose another one.',
        ];

        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            // allow slug to be empty so it can be auto-generated; if provided it must be unique
            'slug'             => 'nullable|string|max:255|unique:articles,slug',
            'body'             => 'required|string',
            'category_id'      => 'required|exists:categories,id',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
        ], $messages);

        // Upload thumbnail if available
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $path = $file->store('articles', 'public');
            $validated['thumbnail'] = $path;
        }


        // Ensure slug is clean and unique if not provided
        if (empty($validated['slug'])) {
            $slug = Str::slug($validated['title']);
            $count = Article::where('slug', 'LIKE', "{$slug}%")->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $validated['slug'] = $slug;
        }


        $validated['user_id'] = Auth::id();
        $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 150);

        Article::create($validated);

        return redirect()->route('dashboard.news.index')->with('success', 'Article created successfully.');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $path = $file->store('article-images', 'public');

            return response()->json([
                'url' => asset('storage/' . $path)
            ]);
        }

        return response()->json(['error' => 'No file uploaded.'], 400);
    }


    public function edit(Article $news)
    {
        return view('dashboard.news.edit', [
            'title' => 'Edit Article',
            'article' => $news,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Article $news)
    {
        $rules = [
            'title'       => 'required|string|max:255',
            'body'        => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];

        if ($request->slug !== $news->slug) {
            $rules['slug'] = 'required|string|max:255|unique:articles';
        }

        $validated = $request->validate($rules);

        // Handle thumbnail upload / removal.
        // Priority: if a new file is uploaded, use it. Else if remove_thumbnail is checked, remove existing. Otherwise keep existing.
        if ($request->hasFile('thumbnail')) {
            if ($news->thumbnail) {
                Storage::disk('public')->delete($news->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('articles', 'public');
        } elseif ($request->filled('remove_thumbnail')) {
            // remove existing thumbnail
            if ($news->thumbnail) {
                Storage::disk('public')->delete($news->thumbnail);
            }
            // set to null so DB column is cleared
            $validated['thumbnail'] = null;
        } else {
            // Ensure we don't overwrite existing thumbnail with null/empty value
            if (array_key_exists('thumbnail', $validated)) {
                unset($validated['thumbnail']);
            }
        }

        $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 150);
        $validated['user_id'] = Auth::id();

        $news->update($validated);

        return redirect()->route('dashboard.news.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $news)
    {
        if ($news->thumbnail) {
            Storage::disk('public')->delete($news->thumbnail);
        }

        $news->delete();

        return redirect()->route('dashboard.news.index')->with('success', 'Article deleted successfully.');
    }
}
