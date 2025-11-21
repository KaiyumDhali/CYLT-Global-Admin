<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceModel extends Model
{
    protected $table = 'services';
    protected $fillable = ['category_id','title','description','othertext','image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function features()
{
    return $this->hasMany(ServiceFeature::class, 'service_id');
}

}


