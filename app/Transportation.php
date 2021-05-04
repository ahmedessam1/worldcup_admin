<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    public function player()
    {
        return $this->belongsTo('App\User', 'player_id', 'id');
    }
}
