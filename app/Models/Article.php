<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'body',
        'excerpt',
        'thumbnail',
        'meta_title',
        'meta_description',
        'category_id',
        'user_id',
    ];

    protected $with = ['author', 'category'];

    // Auto-generate slug
    protected static function booted()
    {
        static::creating(function ($article) {
            $article->slug = Str::slug($article->title) . '-' . time();
        });
    }

    // Relations
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category)
            => $query->whereHas(
                'category',
                fn($query)
                => $query->where('slug', $category)
            )
        );

        $query->when(
            $filters['author'] ?? false,
            fn($query, $author)
            => $query->whereHas('author', fn($query)
            => $query->where('username', $author))
        );
    }
}
