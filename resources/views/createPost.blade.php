
@extends('layouts.dashboard-menu')


  @section('content')
  <h1>Create a new post</h1>
  <form method="post" action="/create-post">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input type="text" name="post-title">
  </div>
    <textarea id="post-body" name="post-body">
      Hello, World!
    </textarea>
    <input type="submit" value="Post">
  </form>
  <script src='https://cdn.tiny.cloud/1/mjtdl8e2yj7byywz8b0ji4rfavgpkbv8f484ym5es8ssq5kb/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
  <script>
    tinymce.init({
      selector: '#post-body',
      menubar: false
    });
  </script>
@endsection