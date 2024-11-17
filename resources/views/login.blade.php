@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Авторизация</title>
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
                <h1 class="intro__title name_title">ВХОД ДЛЯ АДМИНИСТРАТОРОВ</h1>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <main class="article_page">
        <div class="container container_news login_block">
            <p class="txt16 gr justified_txt">Если вы являетесь администратором и забыли логин или пароль, пожалуйста,
                уточните его у вашего работодателя или главного администратора сайта.</p>

            <form action="{{ route('userAuth') }}" method="post" class="login_form">
                @csrf

                <label class="txt24 input_label">Логин:<br> <input name="login" type="text" maxlength="255"
                                                                   class="inputline" required minlength="1"></label><br><br><br>
                <label class="txt24 input_label">Пароль: <br><input name="password" type="password" maxlength="255"
                                                                    class="inputline" required minlength="6"></label><br><br><br>

                <div class="service_btn_block">
                    <button type="submit" class="service_btn wh txt24">ВОЙТИ →</button>
                </div>

                {{--     своя ошибка, название может быть любое       --}}
                @error('error')
                    <div class="err">
                        {{ $message }}
                    </div>
                @enderror
            </form>
        </div>

    </main>
@endsection
