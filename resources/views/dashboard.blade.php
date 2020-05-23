@extends('layouts.main')
@section('content')
    <div class="card">
        <h1 class="card-header">Dashboard</h1> 
        <div class="card-body">
            <h3>Your Blog Posts</h3>
            <a href="/posts/create" class="btn btn-primary">Create Posts</a>
            @if(count($posts)>0)
                <table class="table">
                    <tr class="thead-dark">
                        <th class="col">Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                        <th><a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
                        <th><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">edit</a></th>
                        <th>
                            <form action="/posts/{{$post->id}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <input type="submit" value="Delete  " class="btn btn-danger">
                            </form>
                        </th>
                        </tr>
                    @endforeach
                </table>
            @else
                <p>You have no Posts</p>
            @endif
            </div>
    </div>
@endsection