<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login','Api\AuthController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home','Api\HomeController@index');
Route::get('/weapons','Api\HomeController@weapons');
Route::get('/weapon/{weapon}','Api\WeaponController@weapon');
Route::get('/post', 'Api\PostController@create');

Route::group(['middleware' => ['auth:api']], function(){
    Route::post('/post','Api\PostController@store');
});

Route::get('/login/{provider}', 'Api\LoginController@redirectToProvider')->where('provider', 'twitter');
Route::get('/login/{provider}/callback', 'Api\LoginController@handleProviderCallback')->where('provider', 'twitter');

