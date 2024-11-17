@extends('layouts.app')

@section('head')
    <title>Админ панель — Администраторы</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">Администраторы</p>
                <a href="{{ route('adminUser') }}" class="more_info_white_btn">ДОБАВИТЬ АДМИНИСТРАТОРА →</a>
                <div class="scroll">
                    <table class="table">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Отчество</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Логин</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($users) > 0)
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id_user }}</th>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->patronymic }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->login }}</td>
                                    <td><a href="{{ route('adminUserChange', ['id' => $user->id_user]) }}" class="edit_a">Edit</a></td>
                                    <td>
                                        <form action="{{ route('userDelete') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_user" value="{{ $user->id_user }}">
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
