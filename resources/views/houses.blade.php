@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Гостевые домики</title>
@endsection

@section('content')
    <div class="intro_news intro_house">
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
                <h1 class="intro__title name_page">ГОСТЕВЫЕ ДОМИКИ</h1>
                <h2 class="text-white succ">
                    {{ session('msg') }}
                </h2>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="news_page end_block">
        <div class="container">
            <div class="news_row">

                @if(count($houses) > 0)
                    @foreach($houses as $house)
                        <div class="news_card vertical_align">
                            <div class="news_card_box_img">
                                <img src="/{{ $house->img_house }}">
                            </div>
                            <div class="news_card_txt">
                                <p class="title txt24">
                                    {{ $house->title_house }}
                                </p>
                                <p class="descr justified_txt">
                                    {{ $house->short_description_house }}
                                </p>
                                <p class="title txt24">
                                    {{ number_format($house->price_house, 2, ',', ' ') }} ₽
                                </p>
                            </div><br>
                            <div class="service_btn_block">
                                <a href="{{ route('house', ['id' => $house->id_house]) }}" class="service_btn wh txt24">ПОДРОБНЕЕ →</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>
                        Ничего не найдено
                    </div>
                @endif

            </div>
        </div>
    </main>
@endsection
