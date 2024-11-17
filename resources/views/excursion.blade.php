@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Экскурсия fixme</title>
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
                <h1 class="intro__title name_title">{{ $excursion->title_exc }}</h1>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="article_page">
        <div class="container container_news">
            <p class="title txt24">
                С одного человека: {{ number_format($excursion->price_exc, 2, ',', ' ') }} ₽
            </p>
            <p class="title txt24">
                {{ $excursion->phone_exc }}
            </p>
            <br>
            <p class="justified_txt">
                {{ $excursion->description_exc }}
            </p>
            <div class="article_box_img excursion_img">
                <img src="/{{ $excursion->img_exc }}">
            </div>
        </div>

    </main>
@endsection
