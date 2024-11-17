<nav id="nav" class="nav_list">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('fun') }}">Досуг в Мувыре</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('houses') }}">Гостевые домики</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">Мероприятия</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('excursions') }}">Экскурсии</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('weddings') }}">Свадьба в Мувыре</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('where') }}">Как добраться?</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('map') }}">Интерактивная карта</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">О нас</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('production') }}">Производство</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('investor') }}">Инвесторам</a>
        </li>
    </ul>
</nav>

<button class="menu_btn menu_btn_close" id="menu_btn_close">
    <img class="menu_btn_img" src="{{ asset('assets/img/close.svg') }}" id="menu_btn_img">
</button>
