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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api', 'middleware' => 'auth:api'], function(){
	Route::post('/login/in',['as'=>'login.in','uses'=>'Login\LoginController@login']);
	Route::get('/login/teste',['as'=>'login.teste','uses'=>'Login\LoginController@teste']);
});
