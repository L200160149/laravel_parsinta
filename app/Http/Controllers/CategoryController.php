<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        // ubah method posts menjadi builder untuk membuat pagination
        $posts = $category->posts()->latest()->paginate(6);
        return view('posts.index', compact('posts', 'category')); // 'category' akan digunakan pada index.blade.php line 8
    }
}
