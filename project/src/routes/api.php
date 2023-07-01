<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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

// セッションを使用するルート定義

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function () {
    Route::post('login/post', "App\Http\Controllers\LoginController@post")->name("login.post");
});

Route::group(['middleware' => 'api'], function () {
    Route::post('api/post', "App\Http\Controllers\HomeController@post")->name("api.post");
});

Route::group(['middleware' => 'api'], function () {
    Route::get('/login', "App\Http\Controllers\HomeController@get")->name("login.get");
});

Route::group(['middleware' => 'api'], function () {
    Route::post('/api/register', "App\Http\Controllers\RegisterController@post")->name("register.post");
});
