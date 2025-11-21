<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageContent extends Model
{
    protected $fillable = ['section','content'];

    protected $casts = [
        'content' => 'array',
    ];
}
