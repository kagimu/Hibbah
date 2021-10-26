<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function articles()
    {
        $posts = Post::all();
        return view('articles', ['posts' => $posts]);
    }

    public function edit(Post $post)
        {
            return view('articles.edit', ['post' => $post]);   
        }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'Content' => 'required',
        ]);

        $post->update([
            'title' => request('title'),
            'Content' => request('Content')
        ]);

        return redirect('/articles');   
    }
}
