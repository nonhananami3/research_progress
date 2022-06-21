@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <h1>Themes一覧</h1>
        <div>
           <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                その他のメニュー
              </a>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/posts/create">投稿</a></li>
                <li><a class="dropdown-item" href="#">キーワード作成</a></li>
              </ul>
            </div>
        </div>
            @foreach ($themes as $theme)
                <div class='theme'>
                    <h2 class='title'>
                      <a href="/theme/{{ $theme->id }}">{{ $theme->title }}</a>
                    </h2>
            @endforeach
        <div class='paginate'>
        </div>
    </body>
</html>
@endsection