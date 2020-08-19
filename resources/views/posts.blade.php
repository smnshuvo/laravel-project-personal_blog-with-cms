@extends('layouts.app')    
    <!-- Page Content -->
    @section('content')
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">SMN Blog
            <small>Collection of posts</small>
          </h1>


          @foreach($posts as $post)
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="https://ak.picdn.net/shutterstock/videos/1008131278/thumb/1.jpg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{ $post->post_title }}</h2>
              <p class="card-text">{{ Str::limit(strip_tags($post->post_body), 250) }}</p>
              <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{ $post->created_at }} by
              <a href="#">{{ $post->post_credit }}</a>
              <span class="badge badge-warning">General</span>
            </div>
          </div>
          @endforeach

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Ad</h5>
            <div class="card-body">
            <img src="https://somikoron.com/static/assets/images/logo.png" alt="" class="img-fluid">
              Visit our brand new shops for big deals.
              <a href="https://somikoron.com">Click here</a> to visit.
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection

