<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([

        ]);

        $user = User::where('email',$request->email)->first();
        // return $user;
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['response'=>'メールかパスワードが間違っています'],422);
        }
        return $user->createToken('Auth Token')->accessToken;
    }

}
