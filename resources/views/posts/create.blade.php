@extends('layouts.main')
@section('content')
    <h2>CREATE NEW POST</h2>
    {!! Form::open(['method' => 'POST', 'action' => 'PostController@store', 'files' => true]) !!}
    {!! Form::label('title', 'Title of the post') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! Form::label('content', 'Post Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    {!! Form::submit('Create Post', ['class' => 'form-control']) !!}
    {!! Form::close() !!}
    @if(count($errors) > 0)
        <h4>Error!</h4>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
@endsection