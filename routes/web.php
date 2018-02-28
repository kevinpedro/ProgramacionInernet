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

Route::get('/User', 'UserController@index');
Route::get('/User/create', 'UserController@create');
Route::post('/User/create', 'UserController@store');
Route::get('/usuario/(user)', 'UserController@Show');
Route::get('/usuario/(user)/edit', 'UserController@edit');