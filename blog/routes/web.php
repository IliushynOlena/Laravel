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

//Route::get('/', 'PostController@index');
Route::get('/blog', 'PostController@index');
Route::get('post/', 'PostController@index')->name('post.index');

Route::get('/home', 'PageController@home');
Route::get('/about_us', 'PageController@about_us');
Route::get('/pricing', 'PageController@pricing');
Route::get('/teachers', 'PageController@teachers');
Route::get('/contact', 'PageController@contact');
