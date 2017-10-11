@extends('layouts.app')
@section('content')
<h2>Edit Post</h2>
	{!! Form::open(['action' =>[ 'PostsController@update',$post->id],'method'=>'post']) !!}
	{{-- spoof a hidden put request --}}
    <div class="form-group">
    	{{Form::label('title','Title')}}
    	{{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
    	{{Form::label('body','Body')}}
    	{{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    {{-- spoof a hidden put request --}}
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection