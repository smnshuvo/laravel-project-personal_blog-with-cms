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
            'post' => Post::findorFail($id)
        ];
        return view('post_single', $post);
    }


    public function createPost(){
        return view('createPost');
    }

    // to save a post to the database
    public function storePost(){
        $post = new Post();
        $post->post_title = request("post-title");
        $post->post_body = request("post-body");

        // save the post to database now
        $post->save();
        return redirect("/");
    }
    
}
