<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
   use HasFactory;

    // Table name
    protected $table = 'abouts';

    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'description',
        'mission',
        'vission',
        'image',
    ];
}
