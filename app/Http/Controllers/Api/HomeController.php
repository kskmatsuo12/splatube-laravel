<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MWeapon;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('weapon')
            ->orderBy('published_at','desc')
            ->take(32)
            ->get();
        return response()->json(['posts'=>$posts],200);
    }

    public function weapons()
    {
        $weapons = MWeapon::all();
        return response()->json(['weapons'=>$weapons],200);
    }
}
