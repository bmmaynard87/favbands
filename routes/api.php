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

//Band routes
Route::get('bands/{id}', 'BandsController@index');
Route::get('bands', 'BandsController@index');
Route::post('bands', 'BandsController@store');
Route::put('bands/{id}', 'BandsController@update');
Route::delete('bands/{id}', 'BandsController@destroy');