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
        $posts = Post::all()->sortByDesc("id");
        return view('posts', [
            'posts' => $posts
        ]);
    }

    // show individual post
    public function showPost($id){
        $targetPost = Post::findorFail($id);
        $targetPost->increment('post_view_count');
        $post = [
            'post' => $targetPost,
            'related_posts' => Post::all()->sortByDesc("post_view_count")->take(2)// load some related posts too
        ];
        return view('post_single', $post);
    }


    public function createPost(){
        return view('createPost');
    }

    public function deletePost(){
        
        $posts = Post::all()->sortByDesc("id");
        return view('deletePost', [
            'posts' => $posts
        ]);
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
