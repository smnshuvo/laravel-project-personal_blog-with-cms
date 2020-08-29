@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Styles -->
<link href="{{ asset('public/css/comment-style.css') }}" rel="stylesheet">
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1>{{ $post->post_title }} </h1>
            <p> Posted by {{ $post->post_credit }} | 👁️ {{ $post->post_view_count }} </p>
            <div> {!! $post->post_body !!} </div>
            @if($post->post_image_attachment != null)
            <div class="attachment fluid">
                <img class="img-fluid" src="..\{{ $post->post_image_attachment }}" alt="attachment">
            </div>
            @endif
        </div> <!-- end of col -->

        <!-- Related Posts Column -->
        <div class="col-md-4">
            <h3>Related Posts</h3>
            @foreach($related_posts as $related_post)
                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top"
                        src="https://artist.api.lv3.cdn.hbo.com/images/GXerBvAN7rkytlAEAAAjY/tilezoom?v=0e64a9739357e5284b724c7a522c8f38&size=1500x844&fmt=jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{ $related_post->post_title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($related_post->post_body), 150) }}</p>
                        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{ $related_post->created_at }} by
                        <a href="#">{{ $related_post->post_credit }}</a>
                        <span class="badge badge-warning">General</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div> <!-- end of row -->
    <!-- comment section -->
    <div class="container m-4 blog-comment">

        <div class="comment-container theme--light">
            <div class="comments">
                @if(!Auth::guest())
                    <form class="w3-container" method="post" action="/post-comment">
                        @csrf
                        <input type="hidden" name="post-id" value="{{ $post->id }}" />
                        <p>
                            <label>Leave a comment</label>
                            <input class="w3-input" type="text" name="comment"></p>
                        <br>
                        <p>
                            <input class="w3-btn w3-black" type="submit" value="Comment as {{ Auth::user()->name }}">
                    </form>
                @else
                    <p>Click <a href="/login">here</a> to login and post a comment</p>
                @endif


                <hr style="color:1px solid black;">
                <div>
                    <h3>Comments</h3>
                    @foreach($post_comments as $comment)
                    <div class="card-comment v-card v-sheet theme--light elevation-2">

                        <div class="head er">
                            <div class="v-avatar avatar" style="height: 50px; width: 50px;"><img
                                    src="https://cdn.iconscout.com/icon/free/png-256/avatar-380-456332.png">
                            </div>
                            <span class="displayName title">{{ $comment->commenter }}</span> <span class="displayName caption">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <!---->
                        <div class="wrapper comment">
                            <p class="comment-body">
                            {{ $comment->comment_body }}
                            </p>
                        </div>

                    </div>

                    @endforeach
                    <!---->

                </div>
            </div>
        </div>

    </div>
    <!-- end of comment section -->
</div> <!-- end of container -->
@endsection
