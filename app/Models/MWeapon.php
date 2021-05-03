<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MWeapon extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\MCategory');
    }

    // public function main()
    // {
    //     return $this->belongsTo('App\Models\MMain');
    // }
    
    public function sub()
    {
        return $this->belongsTo('App\Models\MSub');
    }

    public function special()
    {
        return $this->belongsTo('App\Models\MSpecial');
    }
}
