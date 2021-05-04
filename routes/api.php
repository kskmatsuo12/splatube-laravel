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
Route::get('/weapons','Api\WeaponController@index');
Route::get('/weapon/{weapon}','Api\WeaponController@weapon');
Route::get('/post', 'Api\PostController@create');
Route::get('/post/{id}', 'Api\PostController@show');

Route::get('/admin/weapons','Admin\PostController@weapons');
Route::group(['middleware' => ['auth:api']], function(){
    Route::post('/admin/post/update','Admin\PostController@store');
    Route::post('/admin/post/delete','Admin\PostController@destroy');
    Route::post('/post','Api\PostController@store');
    Route::post('/quit', 'Api\AuthController@quit');
});

Route::get('/login/{provider}', 'Api\LoginController@redirectToProvider')->where('provider', 'twitter');
Route::get('/login/{provider}/callback', 'Api\LoginController@handleProviderCallback')->where('provider', 'twitter');