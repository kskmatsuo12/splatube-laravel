<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function weapon()
    {
        return $this->belongsTo('App\Models\MWeapon');
    }
}
