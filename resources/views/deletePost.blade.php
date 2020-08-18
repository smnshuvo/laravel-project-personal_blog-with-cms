@extends('layouts.dashboard-menu')


@section('content')
<div class="container">
    <h2>Delete Posts</h2>
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $post->post_title }}

                <div class="d-flex justify-content-around">
                <a href=""><span class="badge badge-secondary ml-1">{{ $post->post_view_count }} views</span></a>
                    <a href=""><span class="badge badge-danger badge-pill ml-3">Delete</span></a>
                </div>
            </li>
        @endforeach


    </ul>
</div>

@endsection
