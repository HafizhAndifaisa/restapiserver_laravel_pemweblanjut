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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::post('mahasiswa','App\Http\Controllers\MahasiswaController@create');
Route::put('/mahasiswa/{id}','App\Http\Controllers\MahasiswaController@update');
Route::delete('/mahasiswa/{id}','App\Http\Controllers\MahasiswaController@delete');
Route::get('/mahasiswa/{id}','App\Http\Controllers\MahasiswaController@detail');

Route::get('dataip','App\Http\Controllers\DataIpController@index');
Route::post('dataip','App\Http\Controllers\DataIpController@create');
Route::put('/dataip/{id}','App\Http\Controllers\DataIpController@update');
Route::delete('/dataip/{id}','App\Http\Controllers\DataIpController@delete');
Route::get('/dataip/{id}','App\Http\Controllers\DataIpController@detail');

Route::get('detailipmahasiswa','App\Http\Controllers\DataIPMahasiswa@detailIPMahasiswa');
Route::get('/detailipmahasiswa/{id}','App\Http\Controllers\DataIPMahasiswa@detailIPMahasiswaPerID');