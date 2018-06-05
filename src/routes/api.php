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

Route::get('product','ProductController@index');
Route::get('product/{id}','ProductController@show')->name('product.show');

Route::get('demo/user', 'DemoController@demouser');

Route::post('user/login', 'UserController@login');
Route::get('user/{id}','UserController@show')->name('user.show');

