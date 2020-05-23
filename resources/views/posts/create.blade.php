@extends('layouts.main')
@section('content')
    <h1>Create Post</h1>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="display:flex;flex-direction:column">
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group" style="display:flex;flex-direction:column">
            <label for="body">Body</label>
            <textarea name="body" id="article-ckeditor" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="file" name="cover_image" id="cover_image">
         </div>
        <input type="submit" value="sumbit" class="btn btn-primary">
    </form>
@endsection