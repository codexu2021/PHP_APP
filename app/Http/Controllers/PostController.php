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
        return view('index', ['posts' => $posts]);
    }
    public function show(Request $request, $id)
{
    $post = Post::findOrFail($id);
    return view('bbs.show', [
        'post' => $post,
    ]);
}
    public function create()
    {
        return view('create');
    }
    public function store(PostRequest $request)
    {
        $savedata = [
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        
        $post = new POST;
        $post->fill($savedata)->save();

        return redirect('/index')->with('poststatus','新規投稿完了！');
    }
}