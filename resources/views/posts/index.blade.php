@extends('layouts.main')
@section('content')
    <h4><a href="{{route('posts.create')}}">Create post</a></h4>
    @if(count($posts) > 0 )
        <ul>
            @foreach($posts as $post)
                <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a> || <a href="{{route('posts.edit', $post->id)}}">Edit</a></li>
            @endforeach
        </ul>
    @endif
@endsection