@extends('layouts.app')

@section('head')
    <title>Админ панель — Добавление администратора</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">{{ Route::is('adminUserChange') ? 'ИЗМЕНЕНИЕ АДМИНИСТРАТОРА' : 'НОВЫЙ АДМИНИСТРАТОР' }}</p>

                <form action="{{ Route::is('adminUserChange') ? route('userChange') : route('userCreate') }}" method="post" class="info_item">
                    @csrf

                    @if(Route::is('adminUserChange'))
                        @method("PATCH")

                        <input type="hidden" name="id_user" value="{{ $user->id_user }}">
                    @endif

                    <label class="add_input">Фамилия: <br><input value="{{ Route::is('adminUserChange') ? $user->surname : old('surname') ?? '' }}" name="surname" type="text"
                                                                 class="inputline add_input" placeholder="Фамилия" required minlength="1" maxlength="255"></label>

                    <label class="add_input">Имя: <br><input value="{{ Route::is('adminUserChange') ? $user->name : old('name') ?? '' }}" name="name" type="text"
                                                             class="inputline add_input" placeholder="Имя" required minlength="1" maxlength="255"></label>

                    <label class="add_input">Отчество: <br><input value="{{ Route::is('adminUserChange') ? $user->patronymic : old('patronymic') ?? '' }}" name="patronymic" type="text"
                                                                  class="inputline add_input" placeholder="Отчество" minlength="1" maxlength="255"></label>

                    <label class="add_input">Телефон: <br><input value="{{ Route::is('adminUserChange') ? $user->phone : old('phone') ?? '' }}" name="phone" id="phone" type="text"
                                                                 class="inputline add_input" placeholder="Телефон администратора" required></label>

                    <label class="add_input">Логин: <br><input value="{{ Route::is('adminUserChange') ? $user->login : old('login') ?? '' }}" name="login" type="text"
                                                                  class="inputline add_input" placeholder="Логин администратора" required minlength="1" maxlength="255"></label><br>

                    <label class="add_input">{{ Route::is('adminUserChange') ? 'Новый ' : '' }}Пароль: <br><input name="password" type="password"
                                                                class="inputline add_input" placeholder="Пароль администратора" minlength="6" maxlength="255"></label>

                    <button class="more_info_white_btn" type="submit">{{ Route::is('adminUserChange') ? 'Изменить' : 'Создать' }}</button>

                    <p class="err">
                        @if ($errors->any())
                            @foreach($errors->all() as $error)
                                {{ $error }} <br>
                            @endforeach
                        @endif
                    </p>
                </form>

            </div>
        </div>
    </main>
@endsection
