@extends('layouts.nav-bar') 
@section('content')
<h1> {{ $post->post_title }} </h1>
<p> <pre> {{ $post->post_body }} </pre> </p>
@endsection