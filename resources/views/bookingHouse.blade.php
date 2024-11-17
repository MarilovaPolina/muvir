@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Бронирование fixme</title>
@endsection

@section('content')
    <div class="intro_article inro_single_excursion">
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
                    <h1 class="intro__title name_title">БРОНИРОВАНИЕ СВОБОДНОГО ДОМА ИЛИ БЕСЕДКИ</h1>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="article_page">
        <div class="container container_news login_block">
            <p class="txt16 gr justified_txt">Найден свободный дом или беседка на указанное количество людей и выбранные
                даты.</p>

            <form action="{{ route('createHouseReq') }}" method="post" class="login_form">
                @csrf

                <input type="hidden" name="id_house_request" value="{{ request('id_house_request') }}">
                <input type="hidden" name="checkin_request" value="{{ request('checkin_request') }}">
                <input type="hidden" name="checkout_request" value="{{ request('checkout_request') }}">
                <input type="hidden" name="number_house_request" value="{{ request('number_house_request') }}">

                <label class="txt24 input_label">Номер телефона:<br> <input name="phone_house_request" type="text" id="phone"
                                                                            class="inputline" required></label><br><br><br>

                <label class="txt24 input_label">ФИО:<br> <input name="name_house_request" type="text" maxlength="255"
                                                                     class="inputline" required></label><br><br><br>

                <div class="service_btn_block">
                    <button type="submit" class="service_btn wh txt24">ЗАБРОНИРОВАТЬ →</button>
                </div>
            </form>
        </div>

    </main>
@endsection
