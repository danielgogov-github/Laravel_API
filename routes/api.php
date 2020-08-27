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

Route::get('/', 'ProductsController@index');
Route::get('/{id}', 'ProductsController@show');
Route::post('/', 'ProductsController@store');
Route::put('/update/{id}', 'ProductsController@update');
Route::delete('/destroy/{id}', 'ProductsController@destroy');
