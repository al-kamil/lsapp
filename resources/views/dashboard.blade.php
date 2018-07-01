@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p>You are logged in!</p>
                    <a href='/posts/create' class='btn btn-primary'>Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts)>0)
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $index=>$post)
                            <tr>
                                <td scope="row" class="text-center">{{$index+1}}</td>
                                <td>{{$post->title}}</td>
                                <td>{!!$post->body!!}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy',
                                        $post->id], 'class' => 'float-right']) !!} 
                                            {{Form::hidden('_method', 'DELETE')}} 
                                            {{Form::submit('Delete', ['class' => 'btn btn-warning'])}} 
                                        {!! Form::close() !!}
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection