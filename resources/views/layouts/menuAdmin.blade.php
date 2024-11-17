<div class="admin_menu_block">
    <p>Пользователь: <b>ADMIN</b></p>
    <hr>
    <nav id="nav" class="nav_list">
        <ul class="admin_nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin') ? 'fw-bold' : '' }}" href="{{ route('admin') }}">Мероприятия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('adminFuns') ? 'fw-bold' : '' }}" href="{{ route('adminFuns') }}">Досуг</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('adminHouses') ? 'fw-bold' : '' }}" href="{{ route('adminHouses') }}">Дома</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('adminReqHouses') ? 'fw-bold' : '' }}" href="{{ route('adminReqHouses') }}">Аренда</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('adminExcursions') ? 'fw-bold' : '' }}" href="{{ route('adminExcursions') }}">Экскурсии</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('adminReqExcursions') ? 'fw-bold' : '' }}" href="{{ route('adminReqExcursions') }}">Завяки на экскурсии</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('adminWeddings') ? 'fw-bold' : '' }}" href="{{ route('adminWeddings') }}">Свадьбы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('adminUsers') ? 'fw-bold' : '' }}" href="{{ route('adminUsers') }}">Администраторы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Выход</a>
            </li>
        </ul>
    </nav>
    <hr>
</div>

<p class="succ">
    {{ session('msg') }}
</p>

<p class="err">
    {{ session('error') }}
</p>
