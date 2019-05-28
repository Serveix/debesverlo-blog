<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome() {
        setlocale(LC_ALL,"es_MX");
        $sliderPosts = Post::latest()->limit(4)->get();

        return view('welcome')
            ->with('sliderPosts', $sliderPosts)
            ->with('tags', Tag::all());

    }

}
