<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/media.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logoround.jpg') }}" type="image/jpeg">

    @yield('head')
</head>
<body>
    <div class="wrap">
        @yield('content')

        <footer>
            <div class="container">
                <div class="footer_content">
                    <img src="{{ asset('assets/img/logoround.jpg') }}">
                    <div class="footer_txt">
                        <div class="social_net">
                            <p class="wh">Мы в социальных сетях: </p>
                            <a href="https://vk.com/weekendvmywer?w=wall-169512064_3235"><img src="{{ asset('assets/img/vk.svg') }}"></a>
                            <a href="https://vk.com/weekendvmywer?w=wall-169512064_3235"><img src="{{ asset('assets/img/inst.svg') }}"></a>
                        </div>
                        <p class="num wh">+7 (901) 865 87 55</p>
                        <ul class="wh ul_footer txt24">
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{ route('contact') }}">Контакты</a></li>
                            <li><a href="{{ route('production') }}">Производство</a></li>
                            <li><a href="{{ route('login') }}">Администраторам</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    @if(Route::is('index'))
        <div class="video_player" id="videoPlayer">
            <iframe width="784" height="441" src="https://www.youtube.com/embed/DPeRG4YSz8s?si=DP3iNdzz-E-OW7YW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <button class="menu_btn menu_btn_close" id="menu_btn_close_video">
                <img class="menu_btn_img" src="{{ asset('assets/img/close.svg') }}" id="menu_btn_img_video_close">
            </button>
        </div>
    @endif

    <script src="{{ asset('assets/scripts/imask.js') }}" defer></script>
    <script src="{{ asset('assets/scripts/script.js') }}" defer></script>
</body>
</html>
