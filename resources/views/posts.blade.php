<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="blog-container">
@foreach($posts as $post)
<div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="#">{{ $post->post_title }}</a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="#" class="thumbnail">
            <img src="https://kinsta.com/wp-content/uploads/2017/04/change-wordpress-url-1.png" alt="">
        </a>
      </div>
      <div class="span6">      
        <p>
          {{ Str::limit($post->post_body,250)}}
        </p>
        <p><a class="btn" href="/posts/{{ $post->id }}">Read more</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-user"></i> by <a href="#">John</a> 
          | <i class="icon-calendar"></i> Sept 16th, 2012
          | <i class="icon-comment"></i> <a href="#">3 Comments</a>
          | <i class="icon-share"></i> <a href="#">39 Shares</a>
          | <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a> 
          <a href="#"><span class="label label-info">Bootstrap</span></a> 
          <a href="#"><span class="label label-info">UI</span></a> 
          <a href="#"><span class="label label-info">growth</span></a>
        </p>
      </div>
    </div>
  </div>
</div>
<hr>
@endforeach
</div>