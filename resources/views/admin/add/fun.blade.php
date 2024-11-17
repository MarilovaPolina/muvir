@extends('layouts.app')

@section('head')
    <title>Админ панель — Добавление услуги</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">{{ Route::is('adminFunChange') ? 'ИЗМЕНЕНИЕ УСЛУГИ' : 'НОВАЯ УСЛУГА' }}</p>

                <form action="{{ Route::is('adminFunChange') ? route('changeFun') : route('createFun') }}" method="post" class="info_item" enctype="multipart/form-data">
                    @csrf

                    @if(Route::is('adminFunChange'))
                        @method("PATCH")

                        <input type="hidden" name="id_fun" value="{{ $fun->id_fun }}">
                    @endif

                    <label class="add_input">Название: <br><input value="{{ Route::is('adminFunChange') ? $fun->title_fun : old('title_fun') ?? '' }}" name="title_fun" type="text"
                                                                  class="inputline add_input" placeholder="Название услуги" required maxlength="255"></label><br>

                    @if(Route::is('adminFunChange'))
                        <img src="/{{ $fun->img_fun }}" alt="img">
                    @endif
                    <label class="add_input">{{ Route::is('adminFunChange') ? 'Изменить ' : '' }} Фото: <input name="img_fun" type="file" placeholder="Фото" {{ Route::is('adminFunChange') ? '' : 'required' }}></label>

                    <label class="add_input">Описание: <br><textarea name="description_fun"
                                                                     placeholder="Описание услуги" class="add_input description"
                                                                     required>{{ Route::is('adminFunChange') ? $fun->description_fun : old('description_fun') ?? '' }}</textarea></label>

                    <label class="add_input">Телефон: <br><input value="{{ Route::is('adminFunChange') ? $fun->phone_fun : old('phone_fun') ?? '' }}" name="phone_fun" type="text"
                                                                 class="inputline add_input" placeholder="Телефон" required id="phone"></label>

                    <label class="add_input">Цена: <br><input value="{{ Route::is('adminFunChange') ? $fun->price_fun : old('price_fun') ?? '' }}" name="price_fun" type="number"
                                                              class="inputline add_input" placeholder="Цена услуги" required></label><br>

                    <button class="more_info_white_btn" type="submit">{{ Route::is('adminFunChange') ? 'Изменить' : 'Опубликовать' }}</button>

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
