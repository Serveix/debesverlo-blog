@extends('layouts.app')
@section('title', 'Categoria')
@section('description', 'Description de category')
@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-lg-8">
                <div class="single_post_content">
                    <h2><span>{{ $category->name }}</span></h2>
                    @php $firstPost = $category->posts->first(); @endphp
                    @if($firstPost)
                    <div class="single_post_content_left">
                        <ul class="business_catgnav">
                            <li>
                                <figure class="bsbig_fig  wow fadeInDown">
                                    <a class="featured_img" href="{{ route('posts.show', ['post' => $firstPost->id]) }}">
                                        <img src="{{ secure_asset('storage/' . $firstPost->image_path) }}"
                                             alt="{{ $firstPost->title }}">
                                        <span class="overlay"></span>
                                    </a>
                                    <figcaption>
                                        <a href="{{ route('posts.show', ['post' => $firstPost->id]) }}">
                                            {{ $firstPost->title }}
                                        </a>
                                    </figcaption>
                                    <p>
                                        {{ $firstPost->description }}
                                    </p>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    @endif
                    <div class="single_post_content_right">
                        <ul class="spost_nav">
                            <li>
                                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="../public/images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="../public/images/post_img2.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="../public/images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="../public/images/post_img2.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection