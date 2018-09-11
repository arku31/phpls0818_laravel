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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', 'UserController@getUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'posts'], function () {
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::post('store', 'PostController@store')->name('posts.store');
//    Route::resource('/','PostController');
});
