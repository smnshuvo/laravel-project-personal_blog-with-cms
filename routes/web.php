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

Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@posts');

Route::get('/posts/{id}', 'PostController@showPost');

Route::get('/blog-admin/create-post', 'PostController@createPost');

Route::post('create-post', 'PostController@storePost');