@extends('layouts.app')
@section('title', $post->title)
@section('description', $post->description)
@section('thumbnail')
    <meta property="og:image" content="{{ secure_asset('storage/' . $post->image_path) }}">
@endsection
@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="single_page">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>
                                <a href="{{ route('categories.show', ['category' => $post->tags->first()->id]) }}">
                                    {{ $post->tags->first()->name }}
                                </a>
                            </li>
                            {{--<li class="active">Mobile</li>--}}
                        </ol>
                        <h1>{{ $post->title }}</h1>
                        <div class="post_commentbox">
                            <a href="#"><i class="fa fa-user"></i>{{ $post->user->name }}</a>
                            <span><i class="fa fa-calendar"></i>{{ $post->created_at }}</span>
                            <a href="{{ route('categories.show', ['category' => $post->tags->first()->id]) }}">
                                <i class="fa fa-tags"></i>{{ $post->tags->first()->name }}
                            </a>
                        </div>
                        <div class="single_page_content">
                            <img class="img-center" src="{{ asset( 'storage/' . $post->image_path ) }}" alt="{{ $post->title }}">
                            <div id="content"></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="nav-slit">
                @if($previousPost )
                <a class="prev" href="{{ route('posts.show', ['post' => $previousPost->id]) }}">
                    <span class="icon-wrap">
                        <i class="fa fa-angle-left"></i>
                    </span>
                    <div>
                        <h3>{{ $previousPost->title }}</h3>
                        <img src="{{ secure_asset('storage/' . $previousPost->image_path) }}" alt="{{ $previousPost->description }}"/>
                    </div>
                </a>
                @endif
                @if($nextPost)
                <a class="next" href="{{ route('posts.show', ['post' => $nextPost->id]) }}">
                    <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
                    <div>
                        <h3>{{ $nextPost->title }}</h3>
                        <img src="{{ secure_asset('storage/' . $nextPost->image_path) }}" alt="{{ $nextPost->description }}"/> </div>
                </a>
                @endif
            </nav>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                    @include('includes.recent_posts')
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

@section('scripts')
    <script>
        $('#content').html(quillGetHTML({!! $post->content !!}))
        function quillGetHTML(inputDelta) {
            let tempQuill = new Quill(document.createElement("div"))
            tempQuill.setContents(inputDelta)
            return tempQuill.root.innerHTML
        }
    </script>
@endsection