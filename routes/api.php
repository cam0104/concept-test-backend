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

Route::get('people', 'App\Http\Controllers\PeopleController@show');
Route::post('new-person', 'App\Http\Controllers\PeopleController@store');
Route::put('update-person/{person}', 'App\Http\Controllers\PeopleController@update');
Route::delete('delete-person/{id}', 'App\Http\Controllers\PeopleController@destroy');
