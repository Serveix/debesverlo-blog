<section id="newsSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="latest_newsarea"> <span>&Uacute;ltimas noticias</span>
                <ul id="ticker01" class="news_sticker">
                    @foreach(\App\Post::latest()->limit(4)->get() as $post)
                    <li><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>