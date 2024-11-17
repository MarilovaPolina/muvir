@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Контакты</title>
@endsection

@section('content')
    <div class="intro_article inro_single_excursion">
        <header class="my-3">
            <div class="container">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/logoround.jpg') }}" class="logo_img">
                </a>

                <button class="menu_btn" id="menu_btn">
                    <img class="menu_btn_img" src="{{ asset('assets/img/menu.svg') }}" id="menu_btn_img">
                </button>
            </div>
        </header>

        <div class="intro__content position_intro_content">
            <div class="container">
                <h1 class="intro__title name_title">НАШИ КОНТАКТЫ</h1>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="article_page">
        <div class="container container_news">
            <p class="num">
            muvir2018@yandex.ru<br>
            +7 (901) 865 87 55</p><br>

            <p>Режим работы:</p>

            <p>  
            Кафе с 10.00-19.00 пт., сб., вс.<br>
            Будни по предзаказу<br>
            </p>

            <p>Лодочная станция с 9.00 до 21.00 в будни и выходные</p><br>

            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс Карты</a><a href="https://yandex.ru/maps/?ll=53.319485%2C57.627946&mode=whatshere&utm_medium=mapframe&utm_source=maps&whatshere%5Bpoint%5D=53.321167%2C57.627372&whatshere%5Bzoom%5D=17.2&z=17.2" style="color:#eee;font-size:12px;position:absolute;top:14px;">Деревня Мувыр — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=53.319485%2C57.627946&mode=whatshere&whatshere%5Bpoint%5D=53.321167%2C57.627372&whatshere%5Bzoom%5D=17.2&z=17.2" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
       
        </div>
    </main>
@endsection
