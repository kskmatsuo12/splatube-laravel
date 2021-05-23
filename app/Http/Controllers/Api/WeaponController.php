<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\MWeapon;
use App\Models\MCategory;

class WeaponController extends Controller
{
    public function index()
    {
        $weapons = MWeapon::with('category')
            ->with('sub')
            ->with('special')
            ->get();
        
        $categories = MCategory::all();
        return response()->json(compact('weapons','categories'),200);
    }

    public function weapon(Request $request,$weapon)
    {
        $page = $request->page;
        $weapon = MWeapon::where('name',$weapon)
            ->with('category')
            ->with('sub')
            ->with('special')
            ->first();
        
        if(!empty($weapon)){
            $weapon_id = $weapon->id;
        } else {
            return response()->json([],404);
        }

        $posts = Post::where('weapon_id',$weapon_id)
            ->with('weapon')
            ->orderBy('published_at','desc')
            ->paginate(20);

        return response()->json(compact('posts','weapon'),200);
    }
}
