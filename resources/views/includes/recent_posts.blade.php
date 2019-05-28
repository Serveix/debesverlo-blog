<div class="latest_post">
    <h2><span>Posts m&aacute;s recientes</span></h2>
    <div class="latest_post_container">
        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
        <ul class="latest_postnav">

            @foreach($sliderPosts as $sp)
                <li>
                    <div class="media">
                        <a href="{{ route('posts.show', ['post' => $sp->id]) }}" class="media-left">
                            <img alt="" src="{{ secure_asset('storage/' . $sp->image_path) }}">
                        </a>
                        <div class="media-body">
                            <a href="{{ route('posts.show', ['post' => $sp->id]) }}" class="catg_title">
                                {{ $sp->title }}
                            </a>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>
        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
    </div>
</div>