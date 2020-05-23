@extends('layouts.main')
@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="alert alert-info">
                <div class="row">
                    <div class="col-md-2">
                        <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> 
                        <small>writen on {{$post->created_at}} By {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>no posts found</p>
    @endif
@endsection