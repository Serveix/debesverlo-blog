<!DOCTYPE html>
<html>
<head>
    <title>DebesVerlo: @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/li-scroller.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/style.css') }}">
    @yield('styles')
    <!--[if lt IE 9]>
    <script src="{{ secure_asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1381053474060693",
          enable_page_level_ads: true
     });
</script>


</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_top">
                    <div class="header_top_left">
                        <ul class="top_nav">
                            <li><a href="/">Home</a></li>
                            @auth
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias</a>-
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('tags.create') }}">Crear nueva</a></li>
                                        <li><a href="{{ route('tags.index') }}">Lista</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('posts.create') }}">Nuevo post</a></li>
{{--                            <li><a href="#">About</a></li>--}}
{{--                            <li><a href="pages/contact.html">Contact</a></li>--}}
                            @endauth
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <p>{{ date("D M d, Y") }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area"><a href="/" class="logo"><img src="{{ secure_asset('images/logo.jpg') }}" alt=""></a></div>
                    <div class="add_banner">
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
                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        @include('includes.navbar')
    </section>

    @include('includes.news_section')

    @yield('content')

    <footer id="footer">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInLeftBig">
                        <h2>Flickr Images</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInDown">
                        <h2>Tag</h2>
                        <ul class="tag_nav">
                            @foreach(App\Tag::all() as $tag)
                                <li><a href="#">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInRightBig">
                        <h2>Contact</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <address>
                            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="copyright">Debes<b>Verlo</b>.com</p>
            <p class="developer">
                <a href="/login">Login</a>
            </p>
        </div>
    </footer>
</div>
<script src="{{ secure_asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/wow.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/slick.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/jquery.li-scroller.1.0.js') }}"></script>
<script src="{{ secure_asset('assets/js/jquery.newsTicker.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ secure_asset('assets/js/custom.js') }}"></script>

<!-- Main Quill library -->
{{--    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>--}}
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>


@yield('scripts')
</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ secure_asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle includes') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
