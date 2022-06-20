<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(3);
        
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'body' => 'required'
        ]);
        
        $request->user()->posts()->create([
            'body' => $request->body,
            'title' => $request->title,
        ]);

        /* $request->user()->posts()->create($request->only('body'));
        $request->user()->posts()->create($request->only('title')); */

        return back();
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
