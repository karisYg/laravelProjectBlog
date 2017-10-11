@extends('layouts.app')
@section('content')
    <h1>Posts &nbsp &nbsp &nbsp &nbsp &nbsp <small><a class="btn btn-info" href="{{route('posts.create')}}">Create Post</a></small></h1> 
    @if(count($posts)>0)
        @foreach($posts as $post)
        <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
            
        </div>

        @endforeach
        {{$posts->links()}}
    @else
    <p class="text-info">no posts found</p>
    @endif
@endsection