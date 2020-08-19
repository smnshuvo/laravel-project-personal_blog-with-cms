<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use \Auth;

class PostController extends Controller
{
    // index page
    public function index(){
        return view('welcome');
    }

    // list of posts
    public function posts(){
        $posts = Post::all()->sortByDesc("id");
        $page_title = "Homepage";
        return view('posts', [
            'posts' => $posts,
            'page_title' => $page_title
        ]);
    }

    // show individual post
    public function showPost($id){
        $targetPost = Post::findorFail($id);
        $targetPost->increment('post_view_count');
        $page_title = $targetPost->post_title;
        $post = [
            'post' => $targetPost,
            'related_posts' => Post::all()->sortByDesc("post_view_count")->take(2), // load some related posts too
            'page_title' => $page_title
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
        if (Auth::check()){
        // The user is logged in...
        $post->post_credit = Auth::user()->name;
        }
        
        // save the post to database now
        $post->save();
        return redirect("/");
    }
    
}
