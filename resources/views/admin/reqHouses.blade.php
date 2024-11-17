@extends('layouts.app')

@section('head')
    <title>Админ панель — Заявки на бронирование домиков</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">Заявки на аренду домов</p>
                <div class="scroll">
                    <table class="table ">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID дома</th>
                            <th scope="col">ФИО</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Количество</th>
                            <th scope="col">Дата заезда</th>
                            <th scope="col">Дата выезда</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($houses) > 0)
                            @foreach($houses as $house)
                                <tr>
                                    <th scope="row">{{ $house->id_request }}</th>
                                    <td><a class="edit_a" href="{{ route('house', ['id' => $house->id_house_request]) }}">{{ $house->id_house_request }}</a></td>
                                    <td>{{ $house->name_house_request }}</td>
                                    <td>{{ $house->phone_house_request }}</td>
                                    <td>{{ $house->number_house_request }}</td>
                                    <td>{{ $house->checkin_request }}</td>
                                    <td>{{ $house->checkout_request }}</td>
                                    <td>
                                        <form action="{{ route('deleteHouseReq') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_request" value="{{ $house->id_request }}">
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
