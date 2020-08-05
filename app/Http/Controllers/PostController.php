<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // index page
    public function index(){
        return view('welcome');
    }

    // list of posts
    public function posts(){
        $post = [
            'post_title' => "This is the demo post title"
        ];
        return view('posts', $post );
    }

    // show individual post
    public function showPost($id){
        $post = [
            'post_id' => $id
        ];
        return view('post_single', $post );
    }
}
