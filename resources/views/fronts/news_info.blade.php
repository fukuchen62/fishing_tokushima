@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'information')

@section('pageCss')
    <link rel="stylesheet" href="../assets/css/news_list.css">
@endsection

@section('key_visual')
    キービジュアル
@endsection

@section('content')
    <div class="mainarea flex expand">

        <main class="main-section expand">
            <div>
                <div class="news__bottom--up expand"></div>
            </div>
            <section class="firstsection expand p__lr">

                <div class="news__section expand p__lr">
                    <div class="news__area">
                        <h3 class="section__box--title">{{ $news->title }}</h3>

                        @php
                            $ts = strtotime($news->created_at);
                        @endphp
                        <p class="news__area--data">
                            {{ date('Y.m.d', $ts) }}
                        </p>

                        <img src="{{ asset('storage/images') }}/{{ $news->eyecatch }}" alt="{{ $news->eyecatch }}">
                        <p class="news__area--description">
                            {{ $news->content }}</p>

                    </div>
                </div>

            </section>
        </main>

        <aside class="sidemenu ">
            <div class="sidemenu__topimg"></div>
            <div class="sidemenu__box">
                <h2 class="sidemenu__title">カテゴリ</h2>
                <div class=" sidemenu__box--block ">
                    <a class="sidemenu__discription" href="{{ route('news') }}">全て</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('news', ['name' => '更新']) }}">更新</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('news', ['name' => '体験']) }}">体験</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('news', ['name' => 'イベント']) }}">イベント</a>
                    <div class="sidemenu__border"></div>
                </div>
            </div>
            <div class="sidemenu__bottomimg"></div>
        </aside>
    </div>
    <div>
        <div class="news__bottom--up expand"></div>
    </div>
@endsection


{{-- <aside class="sidemenu__pagebottom  p__lr">

    <h2 class="sidemenu__title">カテゴリ</h2>

    <a class="sidemenu__discription" href="./news_list.html">全て</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="./news_list.html">更新</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="./news_list.html">体験</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="./news_list.html">イベント</a>
    <div class="sidemenu__border"></div>

</aside> --}}

</body>

</html>






{{-- テストデータ --}}

{{-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ニュース詳細</title>
</head>

<body>

    <h1>ニュース詳細</h1>

    <a href="{{ route('news') }}">すべて</a>
    <a href="{{ route('news', ['name' => '更新']) }}">更新</a>
    <a href="{{ route('news', ['name' => '体験']) }}">体験</a>
    <a href="{{ route('news', ['name' => 'イベント']) }}">イベント</a>

    <table border="1">
        <tr>
            <th>記事タイトル&nbsp;</th>
            <th>更新日時&nbsp;</th>
            <th>カテゴリー名&nbsp;</th>
            <th>概要&nbsp;</th>
            <th>アイキャッチ画像&nbsp;</th>
            <th>内容&nbsp;</th>
        </tr>
        <tr>
            <td>{{ $news->title }}</td>
            <td>{{ $news->created_at }}</td>
            <td>{{ $news->name }}</td>
            <td>{{ $news->content }}</td>
            <td>{{ $news->eyecatch }}</td>
            <td>{{ $news->content }}</td>
        </tr>
    </table>

</body>
</html> --}}


{{-- テストデータ --}}
