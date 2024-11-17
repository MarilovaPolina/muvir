@extends('layouts.app')

@section('head')
    <title>Админ панель — Заявки на проведения свадеб</title>
@endsection

@section('content')
    @include('layouts.headerAdmin')

    @include('layouts.menu')

    <main class="main_padding end_block">

        <div class="container my-4">
            @include('layouts.menuAdmin')

            <div class="posts_block my-4">
                <p class="txt24 bl publ_txt">Заявки на проведение свадеб</p>
                <div class="scroll">
                    <table class="table ">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Дата</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($weddings) > 0)
                            @foreach($weddings as $wedding)
                                <tr>
                                    <th scope="row">{{ $wedding->id_wedding_request }}</th>
                                    <td>{{ $wedding->name_wedding_request }}</td>
                                    <td>{{ $wedding->phone_wedding_request }}</td>
                                    <td>{{ $wedding->date_wedding_request }}</td>
                                    <td>
                                        <form action="{{ route('deleteWedding') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_wedding_request" value="{{ $wedding->id_wedding_request }}">
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
