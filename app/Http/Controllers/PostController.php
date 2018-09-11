<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new \App\Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::with('userdata')->get();
        $data['posts'] = $posts;
        return view('posts.index', $data);
    }
}
