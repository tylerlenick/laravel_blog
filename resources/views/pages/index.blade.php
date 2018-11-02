@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>{{$title}}</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    </div>
    
@endsection
   