<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\MWeapon;
use App\Models\MCategory;
use App\Models\MSub;
use App\Models\MSpecial;

class PostController extends Controller
{
    public function weapons()
    {
        $weapons = MWeapon::get();
        $categories = MCategory::all();
        $specials = MSpecial::all();
        $subs = MSub::all();
        \Log::info($subs);
        return response()->json(compact(
            'weapons',
            'categories',
            'subs',
            'specials'),200);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $post_id = $request->post_id;
        $weapon_id = $request->weapon_id;
        $post = Post::find($post_id);
        if(!empty($post)){
            $post->weapon_id = $weapon_id;
            $post->save();
            return response()->json(['response'=>'ok'],200);
        } else {
            return abort(500);
        }
    }
}
