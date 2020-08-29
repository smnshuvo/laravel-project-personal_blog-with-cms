<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
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
        
        // comment on that post
        $post_comments = Comment::where('post_id', $targetPost->id)->get()->sortByDesc('id');
        $post = [
            'post' => $targetPost,
            'related_posts' => Post::all()->sortByDesc("post_view_count")->take(2), // load some related posts too
            'page_title' => $page_title,
            'post_comments' => $post_comments
        ];
        return view('post_single', $post);
    }


    public function createPost(){
        if(Auth::user()->name=="Admin"){
        return view('createPost');
        } else{
        return view('home');
        }
    }

    public function deletePost(){
        
        $posts = Post::all()->sortByDesc("id");
        return view('deletePost', [
            'posts' => $posts
        ]);
    }

    // to save a post to the database
    public function storePost(Request $req){
        $post = new Post();
        $post->post_title = request("post-title");
        $post->post_body = request("post-body");
        if($req->file('img')!= null){
        $attach_file_name = date('mdYHis') .$req->file('img')->getClientOriginalName();
        $post->post_image_attachment = $req->file("img")->move("uploads\post_atmnt", $attach_file_name);
        }
        
        
        if (Auth::check()){
        // The user is logged in...
        $post->post_credit = Auth::user()->name;
        }
        
        // save the post to database now
        $post->save();
        return redirect("/");
    }
    
    public function destroy($id){
        $post = Post::findorFail($id);
        $post->delete();
        return redirect("blog-admin/delete-post");
    }
}
