<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // index page
    public function index(){
        return view('welcome');
    }

    // list of posts
    public function posts(){
        $posts = Post::all();
        return view('posts', [
            'posts' => $posts
        ]);
    }

    // show individual post
    public function showPost($id){
        $post = [
            'post_id' => $id
        ];
        return view('post_single', $post );
    }
}
