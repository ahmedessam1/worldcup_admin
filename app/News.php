<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\CategoryNews', 'category_id');
    }
}
