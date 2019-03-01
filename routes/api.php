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

Route::post('/staff/save','ApiController@create');

Route::get('/staff','ApiController@show');

Route::get('/staff/{id}','ApiController@showById');

Route::put('/staff/update/{id}','ApiController@updateById');

Route::delete('/staff/delete/{id}','ApiController@deleteById');