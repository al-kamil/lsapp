@extends('layouts.app') 
@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0) 
        @foreach($posts as $post)
            <div class="card list-group">
                <div class="list-group-item">
                    <h3 class="card-title"><a href='/posts/{{$post->id}}'>{{$post->title}}</a></h3>
                    <small class="card-link">{{$post->created_at}}</small>
                </div>
            </div>
        @endforeach 
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
