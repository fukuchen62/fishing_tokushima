@extends('layouts.front_base')

@section('title', '新着ニュース一覧')


{{-- CSS --}}
@section('css')
@endsection

{{-- メイン --}}
@section('main')
    <main class="main">
        @if (Auth::check())
            <p>ログイン：{{ $user->name . '(' . $user->email . ')' }}</p>

            <p><a href="{{ route('logout') }}">ログアウト</a></p>
        @else
            <p>※ログインしていません。（<a href="http://localhost/fishing_tokushima/public/login">ログイン</a>）</p>
            <a href="http://localhost/fishing_tokushima/public/register">登録</a>
        @endif

    </main>
@endsection

@section('js')

@endsection
