@extends('layouts.app') 
@section('content')
<a href='/posts' class='btn btn-info'>Back</a>
<h1>{{$post->title}}</h1>
<div>{!!$post->body!!}</div>
<hr>
<small>Written on {{$post->created_at}} and created by {{$post->user->name}}</small>
<hr>
<a href='/posts/{{$post->id}}/edit' class='btn btn-secondary'>Edit</a> 

{!! Form::open(['action' => ['PostsController@destroy',
$post->id], 'class' => 'float-right']) !!} 
    {{Form::hidden('_method', 'DELETE')}} 
    {{Form::submit('Delete', ['class' => 'btn btn-warning'])}} 
{!! Form::close() !!}
@endsection