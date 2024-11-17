@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Экскурсии</title>
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
                <h1 class="intro__title name_page">ЭКСКУРСИИ В МУВЫРЕ</h1>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="news_page end_block">
        <div class="container">
            <div class="news_row">

                @if(count($excursions) > 0)
                    @foreach($excursions as $excursion)
                        <div class="news_card vertical_align">
                            <div class="news_card_box_img">
                                <img src="/{{ $excursion->img_exc }}">
                            </div>
                            <div class="news_card_txt">
                                <p class="title txt24  my-4">
                                    {{ $excursion->title_exc }}
                                </p>
                                <p class="descr justified_txt">
                                    {{ $excursion->description_exc }}
                                </p>
                                <p class="title txt24">
                                    {{ number_format($excursion->price_exc, 2, ',', ' ') }} ₽
                                </p>
                            </div><br>
                            <div class="service_btn_block">
                                <a href="{{ route('excursion', ['id' => $excursion->id_exc]) }}" class="service_btn wh txt24">УЗНАТЬ БОЛЬШЕ →</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>
                        Ничего не нашло
                    </div>
                @endif

            </div>
        </div>
    </main>
@endsection
