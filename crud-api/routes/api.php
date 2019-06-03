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
Route::resource('/products', 'ProductController');
Route::get('/products', 'ProductController@index');

// List a single post
Route::get('/products/{id}', 'ProductController@show');

// Create a new post
Route::post('/products', 'ProductController@store');

// Update a post
Route::put('/products', 'ProductController@store');

// Delete a post
Route::delete('/products/{id}', 'ProductController@destroy');
