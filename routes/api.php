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
})->name('api.user');


Route::group(['middleware' => 'jwt.auth'], function(){
    Route::get('auth/user', 'AuthController@user');
    Route::post('auth/logout', 'AuthController@logout');
});

Route::middleware('jwt.refresh')->get('/token/refresh', 'AuthController@refresh');

Route::group(['namespace' => 'Api', 'as' => 'api.', 'middleware' => ['auth:api', 'permissions']], function(){
    Route::get('categories', 'CategoryController@index')->name('category.index');
    Route::get('categories/{id}', 'CategoryController@show')->name('category.show');
    Route::post('categories', 'CategoryController@store')->name('category.store');
    Route::put('categories/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('categories/{id}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('users', 'UserController@index')->name('user.index');
    Route::get('users/{id}', 'UserController@show')->name('user.show');
    Route::post('users', 'UserController@store')->name('user.store');
    Route::put('users/{id}', 'UserController@update')->name('user.update');
    Route::delete('users/{id}', 'UserController@destroy')->name('user.destroy');

    Route::get('news', 'NewsController@index')->name('news.index');
    Route::get('news/{id}', 'NewsController@show')->name('news.show');
    Route::post('news', 'NewsController@store')->name('news.store');
    Route::put('news/{id}', 'NewsController@update')->name('news.update');
    Route::delete('news/{id}', 'NewsController@destroy')->name('news.destroy');
});

Route::group(['as' => 'api.'], function() {
    Route::post('signup', 'AuthController@register');
    Route::post('login', 'AuthController@login');

//    Route::post('register', 'Auth\RegisterController@register')->name('register');
//    Route::post('login', 'Auth\LoginController@loginApi')->name('login');
//    Route::post('logout', 'Auth\LoginController@logoutApi')->name('logout');
});
