<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('views.index', ['posts' => $posts]);
    }
    public function show(Request $request, $id)
{
    $post = Post::findOrFail($id);
    return view('bbs.show', [
        'post' => $post,
    ]);
}
}