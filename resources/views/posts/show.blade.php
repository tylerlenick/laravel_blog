@extends('layouts.app')

@section('content')
    <a href="/laravel_blog/public/posts" class="btn btn-secondary">Go Back</a>
</br>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small> 
@endsection