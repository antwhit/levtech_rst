<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
?>