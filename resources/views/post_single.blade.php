@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1>{{ $post->post_title }} </h1>
                <p>   Posted by {{ $post->post_credit }} | 👁️ {{ $post->post_view_count }}  </p>
            <div> {!! $post->post_body !!} </div>
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
                        <a href="#">Start Bootstrap</a>
                        <span class="badge badge-warning">General</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div> <!-- end of row -->
    <!-- comment section -->
    <div class="container m-4 blog-comment">
    @if (!Auth::guest())
        <h3>Your comments will appear here</h3>
    @else
        <h2>You must be logged in to post a comment!!!</h2>
    @endif
    </div>
    <!-- end of comment section -->
</div> <!-- end of container -->
@endsection
