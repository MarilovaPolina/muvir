@extends('layouts.app')

@section('head')
    <title>Админ панель — Домики</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">Дома</p>
                <a href="{{ route('adminHouse') }}" class="more_info_white_btn">НОВЫЙ ДОМ →</a>
                <div class="scroll">
                    <table class="table">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Цена</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($houses) > 0)
                            @foreach($houses as $house)
                                <tr>
                                    <th scope="row"><a class="edit_a" href="{{ route('house', ['id' => $house->id_house]) }}">{{ $house->id_house }}</a></th>
                                    <td>{{ $house->title_house }}</td>
                                    <td>{{ number_format($house->price_house, 2, ',', ' ') }}</td>
                                    <td><a href="{{ route('adminChangeHouse', ['id' => $house->id_house]) }}" class="edit_a">Edit</a></td>
                                    <td>
                                        <form action="{{ route('deleteHouse') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_house" value="{{ $house->id_house }}">
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
