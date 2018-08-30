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
Route::resource('register' ,"AccountUserController");
Route::resource('login',"LoginUserController");
Route::post('login/dang-nhap',"LoginUserController@dangnhap")->name('dangnhap');