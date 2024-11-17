@extends('layouts.app')

@section('head')
    <title>Админ панель — Экскурсии</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">Экскурсии</p>
                <a href="{{ route('adminExcursion') }}" class="more_info_white_btn">НОВАЯ ЭКСКУРСИЯ →</a>
                <div class="scroll">
                    <table class="table ">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Цена</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($excursions) > 0)
                            @foreach($excursions as $excursion)
                                <tr>
                                    <th scope="row"><a class="edit_a" href="{{ route('excursion', ['id' => $excursion->id_exc]) }}">{{ $excursion->id_exc }}</a></th>
                                    <td>{{ $excursion->title_exc }}</td>
                                    <td>{{ $excursion->phone_exc }}</td>
                                    <td>{{ number_format($excursion->price_exc, 2, ',', ' ') }}</td>
                                    <td><a href="{{ route('adminExcursionChange', ['id' => $excursion->id_exc]) }}" class="edit_a">Edit</a></td>
                                    <td>
                                        <form action="{{ route('deleteExcursion') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_exc" value="{{ $excursion->id_exc }}">
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
