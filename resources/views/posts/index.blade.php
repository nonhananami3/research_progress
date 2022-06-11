@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <h1>Blog Name</h1>
        {{--<div class='posts'>
            [<a href='/posts/create'>create</a>]
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                      <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                    <a href="/categories/{{$post->category->id}}">{{ $post->category->name }}</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links()}}   
        </div>--}}
    </body>
</html>
@endsection