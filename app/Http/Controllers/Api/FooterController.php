<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MWeapon;
use App\Models\MCategory;

class FooterController extends Controller
{
    public function index()
    {
        $weapons = MWeapon::all();
        $categories = MCategory::all();
        return response()->json(compact('weapons','categories'),200);
    }
}
