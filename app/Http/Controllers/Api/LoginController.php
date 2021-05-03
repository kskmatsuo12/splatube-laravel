<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\JsonResponse;

use Socialite;
use App\User;
use Log;

class LoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        $url = Socialite::driver($provider)->redirect()->getTargetUrl(); 
        return response()->json(['redirect_url' => $url],200);
    }
 
    //  public function handleProviderCallback($provider): JsonResponse
     public function handleProviderCallback(Request $request,$provider): JsonResponse
    {
        $access_token = config('services.twitter.access_token');
        $access_token_secret = config('services.twitter.access_token_secret');
        try {
            $providerUser = Socialite::driver('twitter')->userFromTokenAndSecret($access_token, $access_token_secret);
        } catch(\Exception $e) {
            return redirect('/login')->with('auth_error','一致するメールアドレスを取得できませんでした');
        }
        
        $provider_id = $providerUser->getId();
        $user = User::where('provider_id',$provider_id)->first();
        
        if(empty($user)){
            $user = new User;
            $user->provider = 'twitter';
            $user->provider_id = $provider_id;
            $user->twitter_account_name = $providerUser->nickname;
            $user->save();
        } else {

        }

        if($user->id == 1){
            $token = $user->createToken('app')->accessToken;
            return response()->json(['token'=>$token],200);
        } else {
            return response()->json(['response'=> '現在ログインシステムは使われていません'],403);
        }
    } 

}
