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


Route::group(['middleware' => 'jwt.auth', 'namespace' => 'Api', 'as' => 'api.'], function(){
    Route::get('auth/user', 'AuthController@user');
    Route::post('auth/logout', 'AuthController@logout')->name('jwt-logout');
});



Route::group(['namespace' => 'Api', 'as' => 'api.', 'middleware' => ['jwt.auth', 'permissions']], function(){
    Route::get('categories', 'CategoryController@index')->name('category.index');
    Route::get('categories/{id}', 'CategoryController@show')->name('category.show');
    Route::post('categories', 'CategoryController@store')->name('category.store');
    Route::put('categories/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('categories/{id}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('users', 'UserController@index')->name('user.index');
    Route::get('users/{id}', 'UserController@show')->name('user.show');
//    Route::post('users', 'UserController@store')->name('user.store');
    Route::put('users/{id}', 'UserController@update')->name('user.update');
    Route::delete('users/{id}', 'UserController@destroy')->name('user.destroy');

    Route::get('news', 'NewsController@index')->name('news.index');
    Route::get('news/{id}', 'NewsController@show')->name('news.show');
    Route::post('news', 'NewsController@store')->name('news.store');
    Route::put('news/{id}', 'NewsController@update')->name('news.update');
    Route::delete('news/{id}', 'NewsController@destroy')->name('news.destroy');

    Route::get('roles', 'RolesController@index')->name('roles.index');
    Route::get('roles/{id}', 'RolesController@show')->name('roles.show');
    Route::post('roles', 'RolesController@store')->name('roles.store');
    Route::put('roles/{id}', 'RolesController@update')->name('roles.update');
    Route::delete('roles/{id}', 'RolesController@destroy')->name('roles.destroy');

    Route::get('permissions', 'PermissionsController@index')->name('permissions.index');
    Route::get('permissions/{id}', 'PermissionsController@show')->name('permissions.show');
    Route::post('permissions', 'PermissionsController@store')->name('permissions.store');
    Route::put('permissions/{id}', 'PermissionsController@update')->name('permissions.update');
    Route::delete('permissions/{id}', 'PermissionsController@destroy')->name('permissions.destroy');
});

Route::group(['as' => 'api.', 'namespace' => 'Api'], function() {
    Route::post('signup', 'AuthController@register')->name('signup');
    Route::post('login', 'AuthController@login')->name('jwt-login');
    Route::middleware('jwt.refresh')->get('/token/refresh', 'AuthController@refresh');
});
