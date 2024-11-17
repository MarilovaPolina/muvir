@extends('layouts.app')

@section('head')
    <title>Админ панель — Добавление мероприятия</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">{{ Route::is('adminPostChange') ? 'ИЗМЕНЕНИЕ МЕРОПРИЯТИЯ' : 'НОВОЕ МЕРОПРИЯТИЕ' }}</p>

                <form action="{{ Route::is('adminPostChange') ? route('changePost') : route('createPost') }}" method="post" class="info_item" enctype="multipart/form-data">
                    @csrf

                    @if(Route::is('adminPostChange'))
                        @method("PATCH")

                        <input type="hidden" name="id_post" value="{{ $post->id_post }}">
                    @endif

                    <label class="add_input">Название: <br><input value="{{ Route::is('adminPostChange') ? $post->title_post : old('title_post') ?? '' }}" name="title_post" type="text"
                                                                  class="inputline add_input" placeholder="Название мероприятия" required maxlength="255"></label><br>

                    @if(Route::is('adminPostChange'))
                        <img src="/{{ $post->img_post }}" alt="img">
                    @endif
                    <label class="add_input">{{ Route::is('adminPostChange') ? 'Изменить ' : '' }}Фото: <input name="img_post" type="file" placeholder="Фото" {{ Route::is('adminPostChange') ? '' : 'required' }}></label>

                    <label class="add_input">Описание: <br><textarea name="description_post"
                                                                     placeholder="Описание мероприятия" class="add_input description"
                                                                     required>{{ Route::is('adminPostChange') ? $post->description_post : old('description_post') ?? '' }}</textarea></label>

                    <button class="more_info_white_btn" type="submit">{{ Route::is('adminPostChange') ? 'Изменить' : 'Опубликовать' }}</button>

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
