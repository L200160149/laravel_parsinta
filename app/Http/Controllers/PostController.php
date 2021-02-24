<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function show($slug)
    public function show(Post $post)
    {
        // $post = Post::where('slug', $slug)->firstOrFail();

        // if (!$post) {
        //     abort(404);
        // }
        // fungsi if diatas sama dengah firstOrFail()

        return view('post.show', compact('post'));
    }


    public function index()
    {
        // $posts = Post::latest()->paginate(5);
        return view('post.index', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }
}
