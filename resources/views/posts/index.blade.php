@extends('layouts.app')

@section('content')
          <h1>Posts</h1>
          @if(count($posts) > 0)
            @foreach($posts as $post)
            <div class="card">
                <div class="card-header">
                    <h3><a href="/laravel_blog/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            </div>
            </br>
            @endforeach
            {{$posts->links()}}
          @else 
            <p>No posts found</p>
          @endif
@endsection