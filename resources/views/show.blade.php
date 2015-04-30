@extends('app')
 
@section('content')
    <div class="posts">
        <h1 class="tit">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>    
    </div>
@stop