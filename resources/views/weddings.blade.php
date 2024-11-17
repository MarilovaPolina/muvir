@extends('layouts.app')

@section('head')
    <title>{{ getenv('NAME_SITE') }} — Свадьба</title>
@endsection

@section('content')
        <div class="intro_article intro_wedding">
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
                    <h1 class="intro__title name_title">СВАДЬБА В МУВЫРЕ</h1>
                </div>
            </div>
        </div>

    @include('layouts.menu')

    <main class="article_page">
        <div class="container container_news login_block">
            <p class="justified_txt">
                Проведите лучшую церемонию бракосочетания в деревне Мувыр! Здесь вы сможете насладиться потрясающими
                видами
                природы, запечатлеть самые яркие моменты на фотографиях и создать незабываемые воспоминания.
            </p>
            <p class="justified_txt">
                Наша прекрасная деревня предлагает вам и вашим гостям уникальную возможность провести свадебное
                торжество
                именно здесь. Чувствуйте себя главными героями сказки, окруженные волшебной атмосферой Мувыр. Здесь
                каждая
                деталь задумана так, чтобы ваше празднование было не только особенным, но и оригинальным.
            </p>
            <p class="justified_txt">
                Невероятные панорамные виды способны украсить вашу свадебную фотографию и запечатлеть долгожданный день
                в
                вашей жизни. Горные вершины, лесные массивы, реки и озера - все это создает идеальный фон для вашего
                свадебного альбома.
            </p>

            <img class="my-4 w-100" src="assets/img/wedd1.png">

            <p class="justified_txt">
                А что касается празднования, то мы готовы сделать все возможное, чтобы ваше мероприятие было просто
                незабываемым. Наша команда профессионалов заботливо относится к каждой детали: от оформления и декора до
                вкуснейшего банкета и развлекательной программы. Вы сможете наслаждаться празднованием, позволив нам
                заботиться о всех аспектах свадьбы.
            </p>
            <p class="justified_txt">
                Мы безмерно рады предложить вам провести такой важный день именно в нашей деревне. Мувыр ждет вас с
                распростертыми объятиями и великолепными возможностями. Поверьте, ваша свадьба здесь будет просто
                неповторимой! Присоединитесь к нам, и мы с удовольствием поможем вам организовать самую незабываемую
                церемонию бракосочетания. Деревня Мувыр ждет своих гостей с открытым сердцем и готовностью подарить вам
                волшебный день, о котором вы всегда мечтали!
            </p>

            <div class="wedding_img_block">
                <img class="side_wedding_pic" src="assets/img/wedd2.png">
                <img src="assets/img/wedd3.png">
                <img class="side_wedding_pic" src="assets/img/wedd4.png">
            </div>

            <br><br>

            <p class="txt16 gr justified_txt">Укажите свой номер и имя и мы вам перезвоним, чтобы обсудить вашу свадьбу.</p>

            <form action="{{ route('createWedding') }}" method="post" class="login_form">
                @csrf

                <label class="txt24 input_label">Ваш номер телефона:<br> <input name="phone_wedding_request" type="text"
                                                                                class="inputline" required id="phone"></label><br><br><br>

                <label class="txt24 input_label">Ваше имя:<br> <input name="name_wedding_request" type="text"
                                                                      maxlength="255" class="inputline" required></label><br><br><br>

                <div class="service_btn_block">
                    <button type="submit" class="service_btn wh txt24">ОТПРАВИТЬ →</button>
                </div>

                <p class="succ" id="msg">
                    {{ session('msg') }}
                </p>
            </form>
        </div>

    </main>
@endsection
