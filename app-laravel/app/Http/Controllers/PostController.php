<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return back()->withInput();
       //dd($request);
       //dd($request->all());
       //dd($request->description);
       //dd($request->title);
       $data = $request->all();
       $data['is_active'] = true;
       $user = User::find(1);

       $user->post()->create($data);


       return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        dd($post->update($data));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        dd($post->delete());

    }
}
