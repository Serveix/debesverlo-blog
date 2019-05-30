<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required|max:190',
            'body' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png',
            'video_url' => 'max:190',
            'published' => 'required|boolean',
            'tag' => 'required'
        ]);

        $tag = Tag::find($request->input('tag'));

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('body');
        $post->image_path = $request->image->store('images', 'public');
        $post->video_url = $request->input('image');
        $post->published = $request->input('published');
        $post->user()->associate(Auth::user());
        $post->save();

        $post->tags()->attach($tag);

        return back()->with('success-new', 'Post creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $sliderPosts = Post::latest()->limit(4)->get();

        return view('posts.show')
            ->with('post', $post)
            ->with('previousPost', Post::where('id', '<', $post->id)->first())
            ->with('nextPost', Post::where('id', '>', $post->id)->first())
            ->with('sliderPosts', $sliderPosts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
