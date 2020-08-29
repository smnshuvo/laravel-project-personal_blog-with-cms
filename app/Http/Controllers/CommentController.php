<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use \Auth;

class CommentController extends Controller
{
    // to save a comment to the database
    public function saveComment(){
        $comment = new Comment();
        $comment->post_id = request("post-id");
        $comment->commenter = Auth::user()->name;
        $comment->comment_body= request("comment");   
           
        // save the post to database now
        $comment->save();
        $redirect_url = "posts/".$comment->post_id;
        return redirect($redirect_url);
    }
}
