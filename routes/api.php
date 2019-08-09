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

// List books
Route::get('books', 'BookController@index');

// List single book
Route::get('book/{id}', 'BookController@show');

// Create new book
Route::post('book', 'BookController@store');

// Update book
Route::put('book', 'BookController@store');

// Delete book
Route::delete('book/{id}', 'BookController@destroy');