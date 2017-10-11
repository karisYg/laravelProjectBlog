@extends('layouts.app')
 @section('title','Register')
@section('content')
    <h1>create post</h1>
   <form method="post" action="/posts">
   {{csrf_field()}}
  <div class="form-group">
    <label for="title">Post Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
    {{-- <small id="title" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
  </div>

  <div class="form-group">
    <label for="body">Post Body</label>
    <textarea name="body" class="form-control" id="article-ckeditor" rows="3" placeholder="Enter body here"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    {{-- <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> --}}
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
