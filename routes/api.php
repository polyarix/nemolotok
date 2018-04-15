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
Route::group(['namespace' => 'Api', 'as' => 'api.'], function(){

    Route::get('categories', 'CategoryController@index')->name('category.index');
    Route::get('categories/{id}', 'CategoryController@show')->name('category.show');
    Route::post('categories', 'CategoryController@store')->name('category.store');
    Route::put('categories/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('categories/{id}', 'CategoryController@destroy')->name('category.destroy');

});

