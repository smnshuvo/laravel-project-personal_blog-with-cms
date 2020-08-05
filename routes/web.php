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
    return view('welcome');
});

Route::get('/posts', function(){
    $post = [
        'post_title' => "This is the demo post title"
    ];
    return view('posts', $post );
});

// to show individual post
Route::get('/posts/{id}', function($id){
    $post = [
        'post_id' => $id
    ];
    return view('post_single', $post );
});