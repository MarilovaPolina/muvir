@extends('layouts.app')

@section('head')
    <title>Админ панель — Добавление домика</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">{{ Route::is('adminChangeHouse') ? 'ИЗМЕНЕНИЕ ДОМА' : 'НОВЫЙ ДОМ' }}</p>

                <form action="{{ Route::is('adminChangeHouse') ? route('changeHouse') : route('createHouse') }}" method="post" class="info_item" enctype="multipart/form-data">
                    @csrf

                    @if(Route::is('adminChangeHouse'))
                        @method("PATCH")

                        <input type="hidden" name="id_house" value="{{ $house->id_house }}">
                    @endif

                    <label class="add_input">Название: <br><input value="{{ Route::is('adminChangeHouse') ? $house->title_house : old('title_house') ?? '' }}" name="title_house" type="text"
                                                                  class="inputline add_input" placeholder="Название гостевого дома" required maxlength="255"></label><br>

                    @if(Route::is('adminChangeHouse'))
                        <img src="/{{ $house->img_house }}" alt="img">
                    @endif
                    <label class="add_input">Фото: <input name="img_house" type="file" placeholder="Фото" {{ Route::is('adminChangeHouse') ? '' : 'required' }}></label>

                    <label class="add_input">Краткие данные: <br><textarea name="short_description_house"
                                                                           placeholder="Краткие данные о доме" class="add_input description"
                                                                           required maxlength="255">{{ Route::is('adminChangeHouse') ? $house->short_description_house : old('short_description_house') ?? '' }}</textarea></label>

                    <label class="add_input">Описание: <br><textarea name="description_house"
                                                                     placeholder="Описание дома" class="add_input description"
                                                                     required>{{ Route::is('adminChangeHouse') ? $house->description_house : old('description_house') ?? '' }}</textarea></label>

                    <label class="add_input">Цена: <br><input value="{{ Route::is('adminChangeHouse') ? $house->price_house : old('price_house') ?? '' }}" name="price_house" type="text"
                                                              class="inputline add_input" placeholder="Цена услуги" required></label><br>

                    <button class="more_info_white_btn" type="submit">{{ Route::is('adminChangeHouse') ? 'Изменить' : 'Опубликовать' }}</button>

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
