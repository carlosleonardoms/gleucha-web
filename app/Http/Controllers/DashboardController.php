<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        
        return view('dashboard', [
            'posts' => $posts
        ]);
    }

    public function view(int $id)
    {
        $post = Post::where('id', $id)->first();

        return view('posts.view', [
            'post' => $post
        ]);
    }
}
