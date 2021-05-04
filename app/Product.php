<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image',
        'name_ar',
        'description_ar'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
