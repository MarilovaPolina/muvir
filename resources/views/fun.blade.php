@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Досуг</title>
@endsection

@section('content')
    <div class="intro_news intro_fun">
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
                <h1 class="intro__title name_page">ДОСУГ В МУВЫРЕ</h1>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="news_page end_block">
        <div class="container">
            <div class="fun_row">

                @if(count($funs) > 0)
                    @foreach($funs as $fun)
                        <div class="news_card">
                            <div class="fun_card">
                                <div class="fun_card_box_img">
                                    <img src="/{{ $fun->img_fun }}">
                                </div>
                                <div class="news_card_txt vertical_align">
                                    <div class="txt_first">
                                        <p class="title txt24">
                                            {{ $fun->title_fun }}
                                        </p>
                                        <p class="descr justified_txt">
                                            {!! $fun->description_fun !!}
                                        </p>
                                    </div>

                                    <div class="txt_second">
                                        <p class="descr">
                                            {{ $fun->phone_fun }}
                                        </p>
                                        <p class="title txt24">
                                            {{ number_format($fun->price_fun, 2, ',', ' ') }} ₽
                                        </p>
                                    </div>
                                </div>
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
