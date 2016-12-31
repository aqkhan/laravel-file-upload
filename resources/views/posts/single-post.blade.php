@extends('layouts.main')
@section('content')
    <h4><a href="{{route('posts.index')}}">Return to posts</a></h4>
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    @if(!empty($post->path))
        <img src="{{$post->path}}">
    @endif
@endsection