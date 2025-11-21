<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactform extends Model
{
protected $table = 'contacts';
   protected $fillable = [
        'name','email','company','service','budget','message','ip_address','user_agent','is_read'
    ];
}
