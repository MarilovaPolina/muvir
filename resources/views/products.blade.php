@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Продукция</title>
@endsection

@section('content')
<div class="intro_article inro_single_excursion">
            <header class="my-3">
                <div class="container">
                <a href="{{ route('index') }}">
                        <img src="assets/img/logoround.jpg" class="logo_img">
                    </a>

                    <button class="menu_btn" id="menu_btn">
                        <img class="menu_btn_img" src="assets/img/menu.svg" id="menu_btn_img">
                    </button>
                </div>
            </header>

            <div class="intro__content position_intro_content">
                <div class="container">
                    <h1 class="intro__title name_title">ИНВЕСТОРАМ</h1>
                </div>
            </div>
        </div>

    @include('layouts.menu')

    <main class="article_page">
        <div class="container container_news">
            <div class="service_block end_block">
                <div class="service_block_content">
                    <p class="txt58 gr">СТРОИТЕЛЬСТВО МЕЛЬНИЦЫ</p>
                    <img class="my-4" src="assets/img/mill.png">

                    <p class="justified_txt">Уважаемые инвесторы,
                    </p>
                    <p class="justified_txt">Мы рады представить вам возможность инвестирования в уникальный проект по
                        строительству и эксплуатации действующей мельницы.
                        Мельница - это не просто сооружение, это символ процветания и развития. Ее функциональность и
                        значение в обществе нельзя преуменьшить. Строительство действующей мельницы открывает множество
                        возможностей для различных отраслей и предприятий.<p>

                    <p class="justified_txt">Мы приглашаем вас присоединиться к нам и вместе построить действующую мельницу, которая станет
                        экономическим центром нашего региона и приведет к развитию множества прилегающих отраслей.
                        Здесь, вместе с нами, вы можете сделать реальный и значимый вклад в процветание нашего общества.</p>

                    <p class="justified_txt">Помните, что каждый успешный бизнес начинается с инвестиций. Инвестируйте в нашу мельницу и
                        станьте частью нашей команды, которая готова изменить современность.
                    </p>
                    <p class="justified_txt">С уважением,<br>
                        Наша маленькая деревня Мувыр.
                    </p>
                </div>
            </div>

        </div>

    </main>

@endsection
