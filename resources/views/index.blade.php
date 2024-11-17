@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Главная</title>
@endsection

@section('content')
    <div class="intro">
        <div class="video">
            <video class="video__media" src="{{ asset('assets/img/video.mp4') }}" autoplay muted loop></video>
        </div>

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

        <div class="intro__content">
            <div class="container">
                <h1 class="intro__title">ДОБРО ПОЖАЛОВАТЬ В МУВЫР</h1>
                <h1 class="intro__title_substr txt24">Место, где волшебство природы сливается с
                    радостными<br>моментами семейного отдыха</h1>
            </div>
        </div>
    </div>

    <div class="description_muvir end_block1">
        <div class="container">
            <div class="content_description_block">
                <img src="{{ asset('assets/img/vid.png') }}" class="col_descr_video_content" id="col_descr_video_content">
                <div class="text_description_block">
                    <p class="title_descr_muvir wh">Туризм в Мувыре</p>
                    <p class="txt16 wh">Если вы любите активный, интересный отдых в живописных местах, при этом вам
                        нравится узнавать что-то новое и полезное для себя, если вы сторонник семейного отдыха, то
                        вам обязательно нужно приехать в Мувыр Игринского района.<br><br>
                        В нашей деревне вас ждут кафе, катание на лодках, сапах, рыбалка, висячий мост, лестничный
                        спуск к реке Лоза, троллей 30 м., веревочный парк, детский городок, спортивная площадка с
                        резиновым покрытием, животные фермы, вкусная молочная продукция.<br><br>
                        А самое главное, чем богата наша деревня - это история одного человека и этим человеком
                        можете стать ВЫ!</p><br>
                    <a href="" class="more_info_white_btn">УЗНАТЬ БОЛЬШЕ →</a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.menu')

    <div class="your_memories_block end_block1">
        <div class="container">
            <p class="txt58 gr">ВАШИ НЕЗАБЫВАЕМЫЕ ВПЕЧАТЛЕНИЯ</p>
            <div class="your_memories_block_content">
                <div class="row g-3 memories_table">

                    <div class="col-lg-4 col-sm-6 card_wrapper">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/memories/1.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text txt16 wh">Настоящая животная ферма: пони, курицы, экзотические
                                    страусы и дружелюбные коровы</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 card_wrapper">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/memories/2.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text txt16 wh">Катание на лодках и сапах с близкими, друзьями или
                                    семьей запомнится Вам на долго</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 card_wrapper">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/memories/3.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text txt16 wh">Живописный лестничный спуск к реке Лозе точно никого
                                    не оставит равнодушным</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 card_wrapper">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/memories/4.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text txt16 wh">Настоящая животная ферма: пони, курицы, экзотические
                                    страусы и дружелюбные коровы</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 card_wrapper">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/memories/5.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text txt16 wh">Катание на лодках и сапах с близкими, друзьями или
                                    семьей запомнится Вам на долго</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 card_wrapper">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/memories/6.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text txt16 wh">Живописный лестничный спуск к реке Лозе точно никого
                                    не оставит равнодушным</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_block end_block1">
        <div class="container">
            <p class="txt58 gr">НАШИ УСЛУГИ</p>
            <div class="service_block_content">
                <div class="row gy-5">

                    <div class="col-lg-6 col-sm-12 ">
                        <div class="service_card">
                            <img src="{{ asset('assets/img/fun.png') }}">
                            <div class="service_btn_block">
                                <a href="{{ route('fun') }}" class="service_btn wh txt24">ДОСУГ В МУВЫРЕ →</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 ">
                        <div class="service_card">
                            <img src="{{ asset('assets/img/houses.png') }}">
                            <div class="service_btn_block">
                                <a href="{{ route('houses') }}" class="service_btn wh txt24">ЗАБРОНИРОВАТЬ ДОМ ИЛИ БЕСЕДКУ
                                    →</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="news_block end_block1">
        <div class="container">
            <p class="txt58 gr">МЕРОПРИЯТИЯ МУВЫРА</p>
            <div class="news_block_content">
                <div class="news_row">

                @if(count($news) > 0)
                    @foreach($news as $post)
                        <div class="news_card vertical_align">
                            <div class="news_card_box_img">
                                <img src="/{{ $post->img_post }}">
                            </div>
                            <div class="news_card_txt">
                                <p class="news_date">
                                {{mb_strimwidth($post->date_post, 0, 11)}}
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
                <a href="{{ route('news') }}" class="more_info_white_btn">ПОКАЗАТЬ ЕЩЕ →</a>
            </div>
        </div>
    </div>

    <div class="service_block end_block1">
        <div class="container">
            <p class="txt58 gr">ОРГАНИЗАЦИЯ В МУВЫРЕ</p>
            <div class="service_block_content">
                <div class="row gy-5">

                    <div class="col-lg-6 col-sm-12 ">
                        <div class="service_card">
                            <img src="{{ asset('assets/img/eks.png') }}">
                            <div class="service_btn_block">
                                <a href="{{ route('excursions') }}" class="service_btn wh txt24">ЭКСКУРСИИ
                                    →</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 ">
                        <div class="service_card">
                            <img src="{{ asset('assets/img/wedd.png') }}">
                            <div class="service_btn_block">
                                <a href="{{ route('weddings') }}" class="service_btn wh txt24">СВАДЬБА В
                                    МУВЫРЕ →</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="way_block end_block1">
        <div class="container my-5">
            <p class="txt58 wh card-body">МЫ ЖДЕМ ВАС</p>
            <div class="substr_way_block">
                <p class="txt16 wh substr_way">Остались вопросы насчет месторасположения деревни Мувыр или объектов
                    на ее территории? В таком случае для наших гостей у нас есть интерактивная карта Мувыра, которая
                    несомненно избавит Вас от затруднений по данным вопросам</p>
            </div>
            <div class="way_block_content">

                <div class="way_card">
                    <div class="way_card_txt">
                        <p class="title_way txt24">
                            Как добраться?
                        </p>
                        <p class="descr_way_card">
                            На этой карте указано точное расположение деревни Мувыр, чтобы ни у кого из наших гостей
                            не возникло трудностей с дорогой.
                        </p>
                        <a href="{{ route('where') }}" class="more_info_white_btn">УЗНАТЬ БОЛЬШЕ →</a>
                    </div>
                    <div class="way_card_box_img">
                        <img src="{{ asset('assets/img/map.png') }}">
                    </div>
                </div>

                <div class="way_card">
                    <div class="way_card_txt">
                        <p class="title_way txt24">
                            Интерактивная карта
                        </p>
                        <p class="descr_way_card">
                            Погрузитесь в удивительный мир деревни Мувыр с интерактивной картой, раскрывающей все ее
                            достопримечательности.
                        </p>
                        <a href="{{ route('map') }}" class="more_info_white_btn">УЗНАТЬ БОЛЬШЕ →</a>
                    </div>
                    <div class="way_card_box_img">
                        <img src="{{ asset('assets/img/interactive.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="comments_block end_block1">
        <div class="container">
            <p class="txt58 gr">ОТЗЫВЫ ОТ НАШИХ ГОСТЕЙ</p>
            <div class="comments_block_content">
                <div class="row gy-5">

                    <div class="comment_card">
                        <img src="{{ asset('assets/img/ca.png') }}">
                        <div class="comment_card_txt">
                            <p class="txt24 gr">Ирина Фефилова</p>
                            <p class="txt16">Места удивительной красоты. Мувыр(удм.) значит "земля на
                                возвышенности". И действительно деревня расположена на крутом берегу р. Лоза. С
                                берега открываются прекрасные виды. Прогулка по сосновому бору, отдых на берегу
                                пруда - здесь ты чувствуешь гармонию и единение с природой.</p>
                        </div>
                    </div>

                    <div class="comment_card">
                        <img src="{{ asset('assets/img/cb.png') }}">
                        <div class="comment_card_txt">
                            <p class="txt24 gr">Светлана Калинина</p>
                            <p class="txt16">Здорово, супер, класс. Советую побывать в этом замечательном месте.
                                Такая красота, тишина. Просто отдыхаешь и наслаждаешься всеми видами. Можно
                                отдохнуть как с друзьями, так и семьей.</p>
                        </div>
                    </div>

                    <div class="comment_card">
                        <img src="{{ asset('assets/img/cc.png') }}">
                        <div class="comment_card_txt">
                            <p class="txt24 gr">Матвей Н.</p>
                            <p class="txt16">Очень классно и круто. Все очень красивое.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="milk_block end_block1">
        <div class="container">
            <p class="txt58 gr">НАША ПРОДУКЦИЯ</p>
            <div class="milk_block_content">
                <img src="{{ asset('assets/img/milk.png') }}" class="milk_img">
                <div class="milk_txt_block">
                    <p class="milk_txt1 txt16">Молоко из деревни Мувыр – это великолепное творение природы, столь
                        натуральное, что его вкус и полезные свойства сразу отличают от всех остальных. Безупречное
                        качество и богатый вкус делают его непревзойденным на рынке молочных продуктов.
                        <br><br>
                        Наши мастера создают не только молоко, но и целый спектр других молочных деликатесов. Сыры,
                        йогурты, творог – на каждом этапе производства мы стараемся сохранить все полезные свойства
                        молока и придать продукции яркий, неповторимый вкус.
                        <br><br>
                        Нам очень важно обеспечить нашим потребителям только самые лучшие продукты. Мы тщательно
                        следим за процессом производства, контролируем качество на каждом этапе. Только самый лучший
                        и свежий молоко проходит наш отбор, только самые безупречные ингредиенты используются для
                        приготовления сыров, йогуртов и творога.
                    </p>
                    <a href="{{ route('production') }}" class="more_info_white_btn">УЗНАТЬ БОЛЬШЕ →</a>
                </div>
            </div>
        </div>
    </div>
@endsection
