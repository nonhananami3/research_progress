@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <body>
       <h1>Post編集画面</h1>
               <p class="title_error" style="color:red">{{ $errors->first('post.start_date')}}</p>
               <p class="title_error" style="color:red">{{ $errors->first('post.end_date')}}</p>
               <p class="title_error" style="color:red">{{ $errors->first('theme_id')}}</p>
               <p class="title_error" style="color:red">{{ $errors->first('user_id')}}</p>
               <p class="title_error" style="color:red">{{ $errors->first('post.title')}}</p>

       <form action="/posts/" method="POST">
           @csrf
           @csrf('PUT')
           <div class="title">
               <h2>タイトル</h2>
               <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/>
               <p class="title_error" style="color:red">{{ $errors->first('post.title')}}</p>
           </div>
           <div class="body">
               <h2>本文</h2>
               <textarea name="post[body]" placeholder="目的・方法・結果・考察">{{old('post.body')}}</textarea>
               <p class="body_error" style="color:red">{{ $errors->first('post.body')}}</p>
           </div>
           <div class="date">
                <h2>実施日</h2>
                <input type="date" name="post[start_date]" placeholder="タイトル" value="{{old('post.start_date')}}">～</input>
                <input type="date" name="post[end_date]" placeholder="タイトル" value="{{old('post.end_date')}}"/>
           </div>
           <input type="submit" value="保存"/>
       </form>
       <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
@endsection