<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class projectModel extends Model
{
       use HasFactory;

    protected $table = 'projects'; // টেবিলের নাম projects

    protected $fillable = [
        'title',
        'client_name',
        'description',
        'othertext',
        'image',    // multiple images as comma-separated string
        'status',   // 0 => In Progress, 1 => Completed
    ];
}
