@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Новость fixme</title>
@endsection

@section('content')
    <div class="intro_article">
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
                <h1 class="intro__title_substr txt24 date_title">{{mb_strimwidth($new->date_post, 0, 11)}}</h1>
                <h1 class="intro__title name_title">{{ $new->title_post }}</h1>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="article_page">
        <div class="container container_news">

            <p class="justified_txt">
                {{ $new->description_post }}
            </p>
            <div class="article_box_img">
                <img src="/{{ $new->img_post }}">
            </div>
            <div class="social_net_comments">
                <div class="social_net_comments_content">
                    <p class="wh gr">Комментарии: </p>
                    <a href="https://vk.com/weekendvmywer?w=wall-169512064_3235"><img src="{{ asset('assets/img/vk_gr.svg') }}"></a>
                    <a href="https://vk.com/weekendvmywer?w=wall-169512064_3235"><img src="{{ asset('assets/img/inst_gr.svg') }}"></a>
                </div>
            </div>
        </div>

    </main>
@endsection
