<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        
        Post::create([
            'body' => $request->body,
        ]);
/*
        $request->user()->posts()->create([
            'body' => $request->body
        ]);
*/
        return back();

        
    }
}
