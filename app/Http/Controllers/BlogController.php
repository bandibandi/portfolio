<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latestFirst()->paginate(10);

        return view('pages.blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        abort_unless($post->isPublished(), 404);

        return view('pages.blog.show', compact('post'));
    }
}
