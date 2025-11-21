<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries'; // table name

    protected $fillable = [
        'title',
        'description',
        'image', // changed from slider_image to image
    ];
}
