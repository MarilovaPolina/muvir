@extends('layouts.app')

@section('head')
    <title>Админ панель — Мероприятия</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">Мероприятия</p>
                <a href="{{ route('adminNew') }}" class="more_info_white_btn">НОВОЕ МЕРОПРИЯТИЕ →</a>
                <div class="scroll">
                    <table class="table">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Дата</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($news) > 0)
                            @foreach($news as $post)
                                <tr>
                                    <th scope="row"><a class="edit_a" href="{{ route('new', ['id' => $post->id_post]) }}">{{ $post->id_post }}</a></th>
                                    <td>{{ $post->title_post }}</td>
                                    <td>{{ $post->date_post }}</td>
                                    <td><a href="{{ route('adminPostChange', ['id' => $post->id_post]) }}" class="edit_a">Edit</a></td>
                                    <td>
                                        <form action="{{ route('deletePost') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_post" value="{{ $post->id_post }}">
                                            <button type="submit" class="del_a clearBtn">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <td>Нету</td>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
