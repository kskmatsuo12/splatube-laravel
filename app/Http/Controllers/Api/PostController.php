<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\MWeapon;

class PostController extends Controller
{
    public function create()
    {
        $weapons = MWeapon::all();
        return response()->json(['weapons'=>$weapons],200);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $post = new Post;
        $post->youtube_id = $request->youtube_id;
        $post->weapon_id = $request->weapon_id;
        $post->user_id = $user->id;
        $post->save();
        return response()->json(['response'=>'登録ありがとうございます'],200);
    }

    public function show($id)
    {
        $post = Post::with('weapon')
            ->with('weapon.category')
            ->with('weapon.sub')
            ->with('weapon.special')
            ->findOrFail($id);

        $weapon_id = $post->weapon_id;
        $relate_posts = Post::where('weapon_id',$weapon_id)
        ->with('weapon')
        ->take(8)
        ->get();

        return response()->json(compact('post','relate_posts'),200);
    }
}
