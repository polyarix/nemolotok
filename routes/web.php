<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>['auth'], 'as' => 'admin.'], function() {
        Route::get('/', 'DashboardController@index')->name('dashboard.index');
        Route::get('category/', 'CategoryViewController@index')->name('category.view.index');
        Route::get('category/create', 'CategoryViewController@create')->name('category.view.create');
        Route::post('category/store', 'CategoryViewController@store')->name('category.view.store');
        Route::get('category/edit/{id}', 'CategoryViewController@edit')->name('category.view.edit');
        Route::put('category/{id}', 'CategoryViewController@update')->name('category.view.update');
        Route::get('category/show/{id}', 'CategoryViewController@show')->name('category.view.show');
        Route::delete('category/destroy/{id}', 'CategoryViewController@destroy')->name('category.view.destroy');
//    Route::resource('news', 'NewsController', ['as' => 'admin']);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
