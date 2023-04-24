<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/forms','App\Http\Controller\ArticulosController@index');
Route::post('/forms','App\Http\Controller\ArticulosController@store');
Route::put('/forms/{id}','App\Http\Controller\ArticulosController@update');
Route::delete('/forms/{id}','App\Http\Controller\ArticulosController@destroy');
