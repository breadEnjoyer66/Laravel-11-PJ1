<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenPosition extends Model
{
    protected $table = 'open_positions';

    protected $fillable = [
        // Add fillable attributes here
        'nama_posisi',
    ];
}
