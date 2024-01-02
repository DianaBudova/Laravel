<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //dd('index'); // debug (stop script execution)
        $posts = Post::all(); // array of objects
        return view('post/post', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string', // 'name' => ['required', 'string'],
            'description' => 'string',
        ]);

        Post::create($data);

        $posts = Post::all();
        return view('post/post', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post/show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post/edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'name' => ['required', 'string'],
            'description' => ['string'],
        ]);
        Post::where('id', $id)->update($data);

        $posts = Post::all();
        return view('post/post', ['posts' => $posts]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        $posts = Post::all();
        return view('post/post', ['posts' => $posts]);
    }
}
