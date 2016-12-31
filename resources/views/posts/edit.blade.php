@extends('layouts.main')
@section('content')
    <h4><a href="{{route('posts.index')}}">Return to posts</a></h4>
    <h2>Edit post: {{strtoupper($post->title)}}</h2>
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostController@update', $post->id]]) !!}
    {!! Form::label('title', 'Title fo the post') !!}
    {!! Form::text('title', null) !!}
    {!! Form::label('content', 'Enter content here') !!}
    {!! Form::textarea('content', null) !!}
    {!! Form::submit('Save Post!') !!}
    {!! Form::close() !!}
    {!! Form::model($post, ['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}
    {!! Form::submit('Delete Post') !!}
    {!! Form::close() !!}
@endsection