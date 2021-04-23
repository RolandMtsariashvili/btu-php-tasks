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

//        Post::create([
//            'title' => $request->get('title'),
//            'text' => $request->get('text'),
//            'author_email' => $request->get('author_email'),
//        ]);

//        dd($request->all());
//        $post = new Post();
//
//        $post->create($request->all());
        $post = new Post();
        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->author_email = $request->get('author_email');
        $post->save();


        return redirect()->back();
    }
}
