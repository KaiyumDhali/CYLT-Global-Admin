<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ClientsModel extends Model
{
     use HasFactory;

    // Table name
    protected $table = 'clients';

    // Fillable fields for mass assignment
    protected $fillable = [
        'company_name',
        'address',
        'description',
        'image',
    ];
}
