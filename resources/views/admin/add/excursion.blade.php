@extends('layouts.app')

@section('head')
    <title>Админ панель — Добавление экскурсии</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">{{ Route::is('adminExcursionChange') ? 'ИЗМЕНЕНИЕ ЭКСКУРСИИ' : 'НОВАЯ ЭКСКУРСИЯ' }}</p>

                <form action="{{ Route::is('adminExcursionChange') ? route('excursionChange') : route('createExcursion') }}" method="post" class="info_item" enctype="multipart/form-data">
                    @csrf

                    @if(Route::is('adminExcursionChange'))
                        @method("PATCH")

                        <input type="hidden" name="id_exc" value="{{ $excursion->id_exc }}">
                    @endif

                    <label class="add_input">Название: <br><input value="{{ Route::is('adminExcursionChange') ? $excursion->title_exc : old('title_exc') ?? '' }}" name="title_exc" type="text" maxlength="255"
                                                                  class="inputline add_input" placeholder="Название экскурсии" required></label><br>

                    @if(Route::is('adminExcursionChange'))
                        <img src="/{{ $excursion->img_exc }}" alt="img">
                    @endif
                    <label class="add_input">{{ Route::is('adminExcursionChange') ? 'Изменить ' : '' }}Фото: <input name="img_exc" type="file" placeholder="Фото" {{ Route::is('adminExcursionChange') ? '' : 'required' }}></label>

                    <label class="add_input">Описание: <br><textarea name="description_exc"
                                                                     placeholder="Описание экскурсии" class="add_input description"
                                                                     required>{{ Route::is('adminExcursionChange') ? $excursion->description_exc : old('description_exc') ?? '' }}</textarea></label>

                    <label class="add_input">Телефон: <br><input value="{{ Route::is('adminExcursionChange') ? $excursion->phone_exc : old('phone_exc') ?? '' }}" name="phone_exc" type="text"
                                                                 class="inputline add_input" placeholder="Телефон" required id="phone"></label>

                    <label class="add_input">Цена: <br><input value="{{ Route::is('adminExcursionChange') ? $excursion->price_exc : old('price_exc') ?? '' }}" name="price_exc" type="text"
                                                              class="inputline add_input" placeholder="Цена экскурсии" required></label><br>

                    <button class="more_info_white_btn" type="submit">{{ Route::is('adminExcursionChange') ? 'Изменить' : 'Опубликовать' }}</button>

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
