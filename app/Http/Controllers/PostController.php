<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('Post.index', ['posts' => $posts]);
    }
    public function show(Request $request, $id)
{
    $post = Post::findOrFail($id);
    return view('bbs.show', [
        'post' => $post,
    ]);
}
}