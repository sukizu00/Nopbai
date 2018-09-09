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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('create','HomeController');

//Route::get('/posts/{id}', 'PostController@show');

//Route::resource('/home','HomeController@create');

//Route::resource('/create','PostController');

Route::get('create','PostController@create');

Route::post('create','PostController@store');

Route::get('/posts/{id}/delete','PostController@destroy');

Route::get('posts','PostController@index');



