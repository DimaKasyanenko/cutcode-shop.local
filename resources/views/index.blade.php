@extends('layouts.auth')

@section('content')
    @auth()
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Выйти</button>
        </form>
    @endauth
    @guest()
        <a href="{{ route('login') }}">Авторизоваться</a>
    @endguest

@endsection
