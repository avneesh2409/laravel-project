<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/user','UserController@index');
Route::get('/task','TaskController@index');

Route::post('/user','UserController@create');
Route::post('/task','TaskController@create');

Route::get('/download','TaskController@export');