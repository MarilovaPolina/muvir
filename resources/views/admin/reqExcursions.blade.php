@extends('layouts.app')

@section('head')
    <title>Админ панель — Услуги</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">Заявки на проведение экскурсии</p>
                <div class="scroll">
                    <table class="table">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID экскурсии</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Дата</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($excursions) > 0)
                            @foreach($excursions as $excursion)
                                <tr>
                                    <th scope="row">{{ $excursion->id_request }}</th>
                                    <td><a class="edit_a" href="{{ route('excursion', ['id' => $excursion->id_exc_request]) }}">{{ $excursion->id_exc_request }}</a></td>
                                    <td>{{ $excursion->name_exc_request }}</td>
                                    <td>{{ $excursion->phone_exc_request }}</td>
                                    <td>{{ $excursion->date_exc_request }}</td>
                                    <td>
                                        <form action="{{ route('deleteExcursionReq') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_request" value="{{ $excursion->id_request }}">
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
