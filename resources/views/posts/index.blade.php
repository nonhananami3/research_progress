@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <h1>Posts一覧</h1>
        <div>
           <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                その他のメニュー
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/theme">テーマ一覧</a></li>
                <li><a class="dropdown-item" href="/posts/create">投稿</a></li>
                <li><a class="dropdown-item" href="#">キーワード作成</a></li>
              </ul>
            </div>
        </div>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                      <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
            @endforeach
        <div class='paginate'>
        </div>
    </body>
</html>
@endsection