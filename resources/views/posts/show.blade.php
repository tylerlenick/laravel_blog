@extends('layouts.app')

@section('content')
    <a href="/laravel_blog/public/posts" class="btn btn-secondary">Go Back</a>
</br>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/laravel_blog/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'delete')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close() !!}
        @endif
    @endif
@endsection