<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

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

        return view('posts.show', compact('post'));
    }


    public function index()
    {
        // $posts = Post::latest()->paginate(5);
        return view('posts.index', [
            'posts' => Post::latest()->paginate(6)
        ]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    // ===================
    // =================== Cara 1
    // ===================
    // public function store(Request $request)
    // {
    //     // ======= Cara 1
    //     // $post = new Post;
    //     // $post->title = $request->title;
    //     // $post->slug = \Str::slug($request->title);
    //     // $post->body = $request->body;

    //     // $post->save();
    //     // ======= Akhir Cara 1


    //     // // ======= Cara 2
    //     // Post::create([
    //     //     'title' => $request->title,
    //     //     'slug' => \Str::slug($request->title),
    //     //     'body' => $request->body,
    //     // ]);
    //     // // ======= Akhir Cara 2

    //     // // ======= Cara 3
    //     // Post::create($request->all());
    //     // // ======= Akhir Cara 3


    //     // ======= Cara 4 (jika ada inputan slug)
    //     // untuk mengatur field apa yang tidak boleh kosong
    //     $attr = $request->validate([
    //         'title' => 'required|min:3',
    //         'body' => 'required',
    //     ]);
    //     // akhir untuk mengatur field apa yang tidak boleh kosong


    //     $attr['slug'] = \Str::slug($request->title);
    //     Post::create($attr);
    //     // ======= Akhir Cara 4 (jika ada inputan slug)

    //     return redirect()->to('posts');
    // }
    // // ===================
    // // =================== Akhir Cara 1
    // // ===================



    // // ===================
    // // =================== Cara 2 tidak menggunakan request
    // // ===================
    public function store(PostRequest $request)
    {
        $attr = $request->all();
        // mengubah title menjadi slug
        $attr['slug'] = \Str::slug(request('title'));
        // membuat post baru
        Post::create($attr);

        session()->flash('success', 'Berhasil menambahkan data');

        // return back();
        return redirect('posts');
    }
    // // ===================
    // // =================== Akhir Cara 2
    // // ===================



    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $attr  = $request->all();
        $post->update($attr);

        session()->flash('success', 'Berhasil update data');
        return redirect('posts');
    }

    // public function validateRequest()
    // {
    //     // untuk mengatur field apa yang tidak boleh kosong
    //     return request()->validate([
    //         'title' => 'required|min:3',
    //         'body' => 'required',
    //     ]);
    // }

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash("success", "Post berhasil dihapus");
        return redirect('posts');
    }
}
