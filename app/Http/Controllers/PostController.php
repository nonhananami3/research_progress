<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\User;
use App\Theme;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post'=>$post]);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post'=>$post]);
    }
    
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $input += ['user_id' => Auth::id()];
        $input += ['theme_id' => 1];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function update(PostRequest $request,vPost $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

}
