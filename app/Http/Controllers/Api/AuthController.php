<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Hash;
use Log;

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

    public function quit(Request $request)
    {
        $user = $request->user();
        Log::info($user);
        $user->name = '退会';
        $user->twitter_account_name = null;
        $user->provider_id = null;
        $user->deleted_at = now();
        $user->save();
        return response()->json(['response'=>true],200);
    }
}
