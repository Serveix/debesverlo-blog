<!DOCTYPE html>
<html lang="es">
<head>
    <title>DebesVerlo: @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="blogs, tecnologia, noticias, comida, deportes, peliculas">

    <meta property="og:url" content="{{ env('APP_URL') }}"/>
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image:alt" content="@yield('description')" />
    @yield('thumbnail')

    <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ secure_asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ secure_asset('images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ secure_asset('images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">

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
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <header id="header">

            <div class="row">
                @auth
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
                                @endauth
                            </ul>
                        </div>
                        <div class="header_top_right">
                            <p>{{ date("D M d, Y") }}</p>
                        </div>
                    </div>
                </div>
                @endauth
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_bottom">
                        <div class="logo_area"><a href="/" class="logo"><img src="{{ secure_asset('images/logodebesverlo.png') }}" alt=""></a></div>
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
        <div class="footer_top"></div>
        <div class="footer_bottom">
            <p class="copyright">Debes<b>Verlo</b>.com</p>
            <p class="developer">
                <a href="/login">Login</a>
            </p>
        </div>
    </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ secure_asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.li-scroller.1.0.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.newsTicker.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ secure_asset('assets/js/custom.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    @yield('scripts')

</body>
</html>