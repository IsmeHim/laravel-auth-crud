<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posts = Post::orderBy("created_at","desc")->paginate(10);
        $posts = Post::orderBy("created_at","desc")->paginate(6);
        return view('admin.dashboard', compact('posts'));
    }

    public function home(){
        // $posts = Post::all();
        $posts = Post::orderBy('created_at','desc')->paginate(9);
        return view('welcome', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=> 'required',
            'content'=> 'required',
        ]);

        Post::create($request->only(['title','content']));
        return redirect()->route('admin.post.index')->with('success','Post has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('admin.view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view('admin.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'title'=> 'required',
            'content'=> 'required',
        ]);

        $post->update($request->only(['title','content']));
        return redirect()->route('admin.post.index')->with('success','Post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('admin.post.index')->with('success','Post has been deleted.');
    }
}
