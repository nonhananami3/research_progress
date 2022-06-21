@extends('layouts.app')

@section('content')
        <h1 class="title">
         テーマごとの投稿を表示?
        </h1>
        {{--<div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
                <a href="/categories"/{{$post->id}}>{{ $post->name }}</a>
                <p>{{$post->keyword_id}}</p>
                <a>{{$post->keyword_id}}</a>
            </div>
            <p class="edit">[<a href="/posts/{{ $post->id}}/edit">edit</a>]</p>
        </div>
        <form action="/posts/{{ $post->id}}" id="form_{{ $post->id}}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type='submit'>delete</button>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>--}}
@endsection