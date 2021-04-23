<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {

        $post = new Post();
        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->author_email = $request->get('author_email');
        $post->save();


        return redirect()->back();
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->author_email = $request->get('author_email');
        $post->save();

        return redirect()->back();
    }

    public function delete($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }
}
