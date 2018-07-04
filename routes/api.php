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

// Route::apiResource('contact', 'ContactController');

Route::get('siswa', 'ApiSiswaController@index');
Route::post('siswa', 'ApiSiswaController@store');
Route::put('siswa/{id}', 'ApiSiswaController@update');
Route::delete('siswa/{id}', 'ApiSiswaController@delete');

Route::get('guru', 'ApiGuruController@index');
Route::post('guru', 'ApiGuruController@store');
Route::put('guru/{id}', 'ApiGuruController@update');
Route::delete('guru/{id}', 'ApiGuruController@delete');