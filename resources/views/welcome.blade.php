@extends('layouts.app')
@section('title', 'Inicio')
@section('description', '¡Entérate de lo último en el mundo!')
@section('content')
    <section id="sliderSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider">
                    @foreach($sliderPosts as $sp)
                    <div class="single_iteam">
                        <a href="{{ route('posts.show', ['post' => $sp->id]) }}">
                            <img src="{{ asset('storage/'.$sp->image_path, !env('APP_DEBUG')) }}" alt="{{ $sp->title }}">
                        </a>
                        <div class="slider_article">
                            <h2>
                                <a class="slider_tittle" href="{{ route('posts.show', ['posts'=> $sp->id]) }}">
                                    {{ $sp->title }}
                                </a>
                            </h2>
                            <p>
                                {{ $sp->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                @include('includes.recent_posts')
            </div>
        </div>
    </section>
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="single_post_content">
                        @if($tags->first() != null)
                        <h2><span>{{ $tags->first()->name }}</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav  wow fadeInDown">
                                @php $latestPost = $tags->first()->posts()->latest()->first();  @endphp
                                @if($latestPost)
                                <li>

                                    <figure class="bsbig_fig">
                                        <a href="{{ route('posts.show', ['posts'=> $latestPost->id]) }}" class="featured_img">
                                            <img alt="" src="{{ asset('storage/'.$latestPost->image_path, !env('APP_DEBUG')) }}">
                                            <span class="overlay"></span>
                                        </a>
                                        <figcaption>
                                            <a href="{{ route('posts.show', ['post' => $latestPost->id ]) }}">
                                                {{ $latestPost->title }}
                                            </a>
                                        </figcaption>
                                        <p>
                                            {{ $latestPost->description }}
                                        </p>
                                    </figure>
                                </li>
                                @endif
                            </ul>
                        </div>
                        @endif
                        <div class="single_post_content_right">
                            <ul class="spost_nav">
                                @foreach($tags->first()->posts()->offset(1)->limit(5)->latest()->get() as $post)
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="media-left">
                                            <img alt="" src="{{ asset('storage/' . $post->image_path, !env('APP_DEBUG')) }}">
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
                    <div class="fashion_technology_area">
                        <div class="fashion">
                            <div class="single_post_content">
                                @php $secondTag = $tags->slice(1)->first(); @endphp
                                <h2><span>{{ $secondTag->name }}</span></h2>
                                <ul class="business_catgnav wow fadeInDown">
                                    @php $secTagLatestPost = $secondTag->posts()->latest()->first();  @endphp
                                    @if($secTagLatestPost)
                                    <li>
                                        <figure class="bsbig_fig">
                                            <a href="{{ route('posts.show', ['post' => $secTagLatestPost]) }}" class="featured_img">
                                                <img alt="{{ $secTagLatestPost->title }}"
                                                     src="{{ asset('storage/' . $secTagLatestPost->image_path, !env('APP_DEBUG')) }}">
                                                <span class="overlay"></span>
                                            </a>
                                            <figcaption>
                                                <a href="{{ route('posts.show', ['post' => $secTagLatestPost]) }}">
                                                   {{ $secTagLatestPost->title }}
                                                </a>
                                            </figcaption>
                                            <p>
                                                {{ $secTagLatestPost->description }}
                                            </p>
                                        </figure>
                                    </li>
                                    @endif
                                </ul>
                                <ul class="spost_nav">
                                    @foreach($secondTag->posts()->offset(1)->limit(5)->latest()->get() as $post)
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="media-left">
                                                    <img alt="{{ $post->title }}"
                                                         src="{{ asset('storage/' . $post->image_path, !env('APP_DEBUG')) }}">
                                                </a>
                                                <div class="media-body">
                                                    <a href="{{ route('posts.show', ['posts' => $post->id]) }}" class="catg_title">
                                                        {{ $post->description }}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="technology">
                            <div class="single_post_content">
                                @php $thirdTag = $tags->slice(2)->first(); @endphp
                                <h2><span>{{ $thirdTag->name }}</span></h2>
                                <ul class="business_catgnav">
                                    @php $thirdTagLatestPost = $thirdTag->posts()->latest()->first();  @endphp
                                    @if($thirdTagLatestPost)
                                    <li>
                                        <figure class="bsbig_fig wow fadeInDown">
                                            <a href="{{ route('posts.show', ['post' => $thirdTagLatestPost->id]) }}" class="featured_img">
                                                <img alt="{{ $thirdTagLatestPost->title }}"
                                                     src="{{ asset('storage/' . $thirdTagLatestPost->image_path, !env('APP_DEBUG')) }}">
                                                <span class="overlay"></span>
                                            </a>
                                            <figcaption>
                                                <a href="{{ route('posts.show', ['post' => $thirdTagLatestPost->id]) }}">
                                                    {{ $thirdTagLatestPost->title }}
                                                </a>
                                            </figcaption>
                                            <p>
                                                {{ $thirdTagLatestPost->description }}
                                            </p>
                                        </figure>
                                    </li>
                                    @endif
                                </ul>
                                <ul class="spost_nav">
                                    @foreach($thirdTag->posts()->offset(1)->limit(5)->latest()->get() as $post)
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="media-left">
                                                <img alt="{{ $post->title }}" src="{{ asset('storage/' . $post->image_path, !env('APP_DEBUG')) }}">
                                            </a>
                                            <div class="media-body">
                                                <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="catg_title">
                                                    {{ $post->description }}
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
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                    <div class="single_sidebar">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#category" aria-controls="home" role="tab" data-toggle="tab">Categorias</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="category">
                                <ul>
                                    @foreach($tags as $tag)
                                    <li class="cat-item">
                                        <a href="{{ route('categories.show', ['category' => $tag->id]) }}">
                                            {{ $tag->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>De inter&eacute;s</span></h2>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- top bar -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-1381053474060693"
                            data-ad-slot="4882257137"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection