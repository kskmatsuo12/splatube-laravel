<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\MWeapon;

class WeaponController extends Controller
{
    public function weapon($weapon)
    {
        $weapon = MWeapon::where('name',$weapon)->first();
        if(!empty($weapon)){
            $weapon_id = $weapon->id;
        }
        $posts = Post::where('weapon_id',$weapon_id)
            ->with('weapon')
            ->paginate(20);
        return response()->json(['posts'=>$posts],200);
    }
}
