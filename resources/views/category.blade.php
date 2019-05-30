@extends('layouts.app')
@section('title', 'Categoria')
@section('description', 'Description de category')
@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="single_post_content">
                    <h2><span>{{ $category->name }}</span></h2>

                    @php $latestPost = $category->posts->latest()->first(); @endphp
                    @if($latestPost)
                    <div class="single_post_content_left">
                        <ul class="business_catgnav">
                            <li>
                                <figure class="bsbig_fig  wow fadeInDown">
                                    <a class="featured_img" href="{{ route('posts.show', ['post' => $latestPost->id]) }}">
                                        <img src="{{ secure_asset('storage/' . $latestPost->image_path) }}"
                                             alt="{{ $latestPost->title }}">
                                        <span class="overlay"></span>
                                    </a>
                                    <figcaption>
                                        <a href="{{ route('posts.show', ['post' => $latestPost->id]) }}">
                                            {{ $latestPost->title }}
                                        </a>
                                    </figcaption>
                                    <p>
                                        {{ $latestPost->description }}
                                    </p>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    @endif
                    <div class="single_post_content_right">
                        <ul class="spost_nav">
                            @foreach($category->posts()->offset(1)->limit(5)->latest()->get() as $post)
                            <li>
                                <div class="media wow fadeInDown">
                                    <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="media-left">
                                        <img alt="{{ $post->title }}" src="{{ secure_asset('storage/' . $post->image_path) }}">
                                    </a>
                                    <div class="media-body">
                                        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="catg_title">
                                            {{ $post->title }}
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection