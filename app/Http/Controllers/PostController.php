<?php

namespace App\Http\Controllers;

use App\Mail\PostCreated;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2',
            'content' => 'required|min:10',
            'kartinka' => 'image'
        ]);
        $file = $request->file('kartinka');

        if (!empty($file)) {
            $file->move(public_path('uploads/'), $file->getClientOriginalName());
        }
        $post = new \App\Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = Auth::id();
        $post->save();
        $data['post'] = $post;
        Mail::to(User::find($post->user_id))->send(new PostCreated($data));

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:2',
            'content' => 'required|min:10',
            'kartinka' => 'image'
        ]);
        $file = $request->file('kartinka');

        if (!empty($file)) {
            $file->move(public_path('uploads/'), $file->getClientOriginalName());
        }
        $post =  \App\Post::find($id);
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = Auth::id();
        $post->save();
        $data['post'] = $post;

        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::with('userdata')->get();
        $data['posts'] = $posts;
        return view('posts.index', $data);
    }

    public function getAmountOfPosts()
    {
        return Post::count();
    }
}
