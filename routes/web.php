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

Route::get('/','FindController@index');

Route::get('/find', 'FindController@find');
Route::get('/info', 'InfoController@find');
Route::get('/fi', 'InfoController@result');
