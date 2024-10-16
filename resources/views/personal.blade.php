@extends('layouts.app')

@section('content')
<div class="container text-left">
    <h2>{{ Auth::user()->login }}</h2>
    <ul>
        <li><a href="{{ route('change.password') }}">Изменить пароль</a></li>
        <li><a href="{{ route('add.news') }}">Добавить новость</a></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
        </li>
    </ul>
</div>
@endsection
