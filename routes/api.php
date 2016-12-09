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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('news', 'Back\NewsAPIController@index');
Route::post('news', 'Back\NewsAPIController@store');
Route::get('news/{news}', 'Back\NewsAPIController@show');
Route::put('news/{news}', 'Back\NewsAPIController@update');
Route::patch('news/{news}', 'Back\NewsAPIController@update');
Route::delete('news{news}', 'Back\NewsAPIController@destroy');

Route::get('aes', 'Back\AeAPIController@index')->middleware('auth:api');
Route::post('aes', 'Back\AeAPIController@store');
Route::get('aes/{aes}', 'Back\AeAPIController@show');
Route::put('aes/{aes}', 'Back\AeAPIController@update');
Route::patch('aes/{aes}', 'Back\AeAPIController@update');
Route::delete('aes{aes}', 'Back\AeAPIController@destroy');