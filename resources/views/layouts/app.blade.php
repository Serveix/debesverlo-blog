<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title') - DebesVerlo</title>
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

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png', !env('APP_DEBUG')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png', !env('APP_DEBUG')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png', !env('APP_DEBUG')) }}">
    <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest', !env('APP_DEBUG')) }}">
    <link rel="mask-icon" href="{{ asset('images/favicons/safari-pinned-tab.svg', !env('APP_DEBUG')) }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css', !env('APP_DEBUG')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font.css', !env('APP_DEBUG')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/li-scroller.css', !env('APP_DEBUG')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css', !env('APP_DEBUG')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.css', !env('APP_DEBUG')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css', !env('APP_DEBUG')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css', !env('APP_DEBUG')) }}">

    @yield('styles')

    <script src="https://kit.fontawesome.com/4a26d18909.js"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js', !env('APP_DEBUG')) }}"></script>
    <script src="{{ asset('assets/js/respond.min.js', !env('APP_DEBUG')) }}"></script>
    <![endif]-->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-1381053474060693",
              enable_page_level_ads: true
         });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141100384-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141100384-1');
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
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Posts</a>-
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ route('posts.create') }}">Crear nuevo</a></li>
                                            <li><a href="{{ route('posts.index') }}">Lista</a></li>
                                        </ul>
                                    </li>
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
                        <div class="logo_area"><a href="/" class="logo"><img src="{{ asset('images/logodebesverlo.png', !env('APP_DEBUG')) }}" alt=""></a></div>
                        {{--<div class="add_banner">--}}
                            {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
                            {{--<!-- top bar -->--}}
                            {{--<ins class="adsbygoogle"--}}
                                {{--style="display:block"--}}
                                {{--data-ad-client="ca-pub-1381053474060693"--}}
                                {{--data-ad-slot="4882257137"--}}
                                {{--data-ad-format="auto"--}}
                                {{--data-full-width-responsive="true"></ins>--}}
                            {{--<script>--}}
                            {{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
                            {{--</script>--}}
                        {{--</div>--}}
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
            {{--<p class="developer">--}}
                {{--<a href="/login">Login</a>--}}
            {{--</p>--}}
        </div>
    </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/wow.min.js', !env('APP_DEBUG')) }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/slick.min.js', !env('APP_DEBUG')) }}"></script>
    <script src="{{ asset('assets/js/jquery.li-scroller.1.0.js', !env('APP_DEBUG')) }}"></script>
    <script src="{{ asset('assets/js/jquery.newsTicker.min.js', !env('APP_DEBUG')) }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.pack.js', !env('APP_DEBUG')) }}"></script>
    <script src="{{ asset('assets/js/custom.js', !env('APP_DEBUG')) }}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    @yield('scripts')

</body>
</html>