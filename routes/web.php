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

Route::get('/', 'PostController@posts');

//Route::get('/posts', 'PostController@posts');

Route::get('/posts/{id}', 'PostController@showPost');

Route::get('/blog-admin', function(){return redirect("/blog-admin/create-post");});

Route::get('/blog-admin/create-post', 'PostController@createPost')->middleware('auth');

Route::get('/blog-admin/delete-post', 'PostController@deletePost')->middleware('auth');

Route::post('create-post', 'PostController@storePost');

Route::post('post-comment', 'CommentController@saveComment');

Route::delete('/posts/{id}', 'PostController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
