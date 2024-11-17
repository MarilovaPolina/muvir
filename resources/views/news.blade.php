@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Мероприятия</title>
@endsection

@section('content')
    <div class="intro_news">
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
                <h1 class="intro__title name_page">МЕРОПРИЯТИЯ В МУВЫРЕ</h1>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="news_page end_block">
        <div class="container">
            <div class="news_row">

                @if(count($news) > 0)
                    @foreach($news as $post)
                        <div class="news_card vertical_align">
                            <div class="news_card_box_img">
                                <img src="/{{ $post->img_post }}">
                            </div>
                            <div class="news_card_txt">
                                <p class="news_date">
                                    {{ $post->date_post }}
                                </p>
                                <p class="title txt24">
                                    {{ $post->title_post }}
                                </p>
                                <p class="descr justified_txt">
                                {{mb_strimwidth($post->description_post, 0, 350, "...")}}
                                </p>
                            </div><br>
                            <div class="service_btn_block">
                                <a href="{{ route('new', ['id' => $post->id_post]) }}" class="service_btn wh txt24">УЗНАТЬ БОЛЬШЕ →</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>
                        Ничего не найдено
                    </div>
                @endif

            </div>
    </main>
@endsection
