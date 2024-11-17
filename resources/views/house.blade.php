@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Дом fixme</title>
@endsection

@section('content')
    <div class="intro_news intro_single_house">
        <header class="my-3">
            <div class="container">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/logoround.jpg') }}" class="logo_img">
                </a>

                <button class="menu_btn" id="menu_btn">
                    <img class="menu_btn_img" src="{{ asset('assets/img/menu.svg') }}" id="menu_btn_img" >
                </button>
            </div>
        </header>
    </div>

    @include('layouts.menu')

    <main class="news_page">
        <div class="container container_news">
            <div class="house_box_img">
                <img src="/{{ $house->img_house }}">
            </div>

            <p class="txt58 gr title_article">{{ $house->title_house }}</p>

            <p class="description_house txt24 my-5">
                {{ number_format($house->price_house, 2, ',', ' ') }} ₽
            </p>

            <p class="short_description descr justified_txt">
                {{ $house->short_description_house }}
            </p>

            <p class="description_house my-5">
                {{ $house->description_house }}
            </p>

            <form action="{{ route('bookingHouse') }}" method="get" class="login_form">
                <input type="hidden" value="{{ $house->id_house }}" name="id_house_request">

                <label class="txt24 input_label">Дата заезда:<br> <input name="checkin_request" type="datetime-local"
                                                                         class="inputline" required></label><br><br><br>

                <label class="txt24 input_label">Дата выезда:<br> <input name="checkout_request" type="datetime-local"
                                                                         class="inputline" required></label><br><br><br>

                <label class="txt24 input_label">Количество человек: <br><input name="number_house_request" type="number"
                                                                                class="inputline" required></label><br><br><br>

                <div class="service_btn_block">
                    <button class="service_btn wh txt24">ДАЛЕЕ →</button>
                </div>
            </form>
        </div>

    </main>
@endsection
