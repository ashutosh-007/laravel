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

Route::get('/admin/{id?}', 'AdminController@index');

Route::get('/{number1}/{number2?}', 'AdminController@index')->where(['number1'=>'[0-9]+'])->name('ashutosh');

// Route::get('/', function() {
// 	echo route('ashutosh', [12, 'sortBy'=>'name']);
// });
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
