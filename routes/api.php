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

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'AuthController@logout');

    Route::get('/users', 'UserController@index')->middleware('can:admin');
    Route::get('/users/{id}', 'UserController@show')->middleware('can:admin');
    Route::put('/users/{id}', 'UserController@update')->middleware('can:admin');

    Route::get('/products', 'ProductController@index');
    Route::get('/products/{id}', 'ProductController@show');

    Route::post('/orders', 'OrderController@store');
});

