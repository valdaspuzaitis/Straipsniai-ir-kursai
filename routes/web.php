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

Route::get('/', 'FrontPageController@index');

Auth::routes();

Route::get('/articles/create', 'ArticlesController@create')->middleware('auth');
Route::get('/articles/{id}', 'ArticlesController@show');
Route::post('/articles', 'ArticlesController@store');

