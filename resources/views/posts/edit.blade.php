@extends('layouts.main')
@section('content')
    <h1>Create Post</h1>
    <form action="/posts/{{$post->id}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="display:flex;flex-direction:column">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group" style="display:flex;flex-direction:column">
            <label for="body">Body</label>
        <textarea name="body" id="article-ckeditor" cols="30" rows="10">{{$post->body}}</textarea>
        </div>
        <div>
            <input type="file" name="cover_image" id="cover_image">
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" value="sumbit" class="btn btn-primary">
    </form>
    <form action="/posts/{{$post->id}}"style="margin-left:90%;" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="submit" value="Delete  " class="btn btn-danger">
    </form>
@endsection