<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    /** @use HasFactory<\Database\Factories\AwardFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'award_from',
        'received_at',
        'file_name',
    ];

    protected $casts = [
        'received_at' => 'date'
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope('ordered', function ($query) {
            $query->orderBy('received_at', 'desc');
        });
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/awards/' . $this->file_name);
    }
}
