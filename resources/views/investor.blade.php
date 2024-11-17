@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Инвесторам</title>
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
                    <div class="row gy-5 my-5">

                        <div class="col-lg-6 col-sm-12 ">
                            <div class="service_card way_block">
                                <img src="assets/img/mill.png">
                                <div class="service_btn_block">
                                    <a href="{{ route('products') }} " class="service_btn investors_btn wh txt24">СБОР НА СТРОИТЕЛЬСТВО МЕЛЬНИЦЫ →</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12 ">
                            <div class="service_card way_block">
                                <img src="assets/img/ges.png">
                                <div class="service_btn_block">
                                    <a href="{{ route('map') }}" class="service_btn investors_btn wh txt24">СБОР НА СТРОИТЕЛЬСТВО ГЭС
                                        →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="justified_txt">Мы приглашаем вас в деревню Мувыр, настоящий сокровищницу Удмуртской республики. Мы искренне верим, что с вашей помощью сможем не только преобразить Мувыр, но и способствовать сохранению и развитию калорита истории Удмуртии. Инвестиции в развитие Мувыра не только помогут его жителям, но и Удмуртской республике в целом. Мы стремимся сохранить уникальные традиции, обычаи и историю нашего народа, и ваше участие позволит нам сделать это реальностью.</p>
                    <p class="justified_txt">Кроме того, развитие Мувыра сможет стать мощным импульсом для туристической отрасли в России. Мы уверены, что наших гостей привлечет аутентичность деревни, ее духовное наследие и природные красоты. Открытие новых предприятий, создание туристической инфраструктуры и локальных мероприятий – всё это ведет к увеличению посещаемости и экономическому росту региона.</p>
                    <p class="justified_txt">Мы призываем вас стать частью наших немаловажных проектаов и вложиться в развитие деревни Мувыр. Вместе мы сможем сохранить историю и обычаи удмуртских деревень, а также сделать Мувыр популярным центром туризма. Давайте преобразим Мувыр в уникальное место, где каждый, включая вас и нас, сможет ощутить его энергию и красоту.</p>
                </div>
            </div>

        </div>

    </main>

@endsection
