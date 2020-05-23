@extends('layouts.main')

@section('content')
    <a href="/posts" class="btn btn-primary" style="margin-top:5px">GO BACK</a>
    <h1>{{$post->title}}</h1>
    <div>
        <img style="width:40%;" src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>writen on {{$post->created_at}} By {{$post->user->name}}</small>  
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div style="display:flex;">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="margin-right:5px">edit</a>
                <form action="/posts/{{$post->id}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="submit" value="Delete  " class="btn btn-danger">
                </form>
            </div>
        @endif
    @endif  
        

@endsection