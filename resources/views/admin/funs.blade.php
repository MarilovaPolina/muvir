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
                <p class="txt24 bl publ_txt">Досуг</p>
                <a href="{{ route('adminFun') }}" class="more_info_white_btn">НОВАЯ УСЛУГА →</a>
                <div class="scroll">
                    <table class="table ">
                        <thead class="table-dark thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Номер</th>
                            <th scope="col">Цена</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @if(count($funs) > 0)
                            @foreach($funs as $fun)
                                <tr>
                                    <th scope="row">{{ $fun->id_fun }}</th>
                                    <td>{{ $fun->title_fun }}</td>
                                    <td>{{ $fun->number_fun }}</td>
                                    <td>{{ number_format($fun->price_fun, 2, ',', ' ') }}</td>
                                    <td><a href="{{ route('adminFunChange', ['id' => $fun->id_fun]) }}" class="edit_a">Edit</a></td>
                                    <td>
                                        <form action="{{ route('deleteFun') }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id_fun" value="{{ $fun->id_fun }}">
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
