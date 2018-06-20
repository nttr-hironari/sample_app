<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        if (Cache::has('posts/index')) {
            $view = Cache::get('posts/index');
            return $view;
        } else {
            $posts = Post::all();
            $view = view('posts.index', ['posts' => $posts]);
            $minutes = 10;
            Cache::put('posts/index', strval($view) , $minutes);
            return $view;
        }
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = 1;
        $post->save();
        
        # キャッシュしてからリダイレクト
        $posts = Post::all();
        $view = view('posts.index', ['posts' => $posts]);
        $minutes = 10;
        Cache::put('posts/index', strval($view) , $minutes);
        return redirect('posts/'.$post->id);
    }

    public function show(Post $post)
    {
        if (Cache::has('posts/'.$post->id)) {
            $view = Cache::get('posts/'.$post->id);
            return $view;
        } else {
            $view = view('posts.show', ['post' => $post]);
            $minutes = 10;
            Cache::put('posts/'.$post->id, strval($view) , $minutes);
            return $view;
        }
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->save();
        return redirect('posts/' . $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        # キャッシュしてからリダイレクト
        $posts = Post::all();
        $view = view('posts.index', ['posts' => $posts]);
        $minutes = 10;
        Cache::put('posts/index', strval($view) , $minutes);
        return redirect('posts/');
    }
}