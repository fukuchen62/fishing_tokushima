@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'information一覧')

@section('pageCss')
    <link rel="stylesheet" href="../assets/css/news_list.css">
@endsection

@section('key_visual')
    <div class="keyvisual expand">
    </div>
@endsection

@section('content')
    <div class="mainarea flex expand">

        <main class="main-section expand">
            <div>
                <div class="news__bottom--up expand"></div>
            </div>
            <section class="firstsection expand p__lr">

                <div class="news__section expand p__lr">

                    <h2 class="pagetitle ">全て</h2>
                    <div class="pagetitle__border"></div>
                    <div class="card__area">
                        <ul class="card__area">
                            @foreach ($news as $item)
                                @component('components.front_news_card')
                                    @slot('news_link')
                                        {{ route('newsinfo', ['id' => $item->id]) }}
                                    @endslot

                                    @slot('news_name')
                                        {{ $item->name }}
                                    @endslot

                                    @slot('news_title')
                                        {{ $item->title }}
                                    @endslot

                                    @slot('news_created_at')
                                        {{ $item->created_at }}
                                    @endslot

                                    @slot('news_overview')
                                        {{ $item->overview }}
                                    @endslot
                                @endcomponent
                            @endforeach
                        </ul>
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
        <div class="news__bottom expand"></div>
    </div>
@endsection


<aside class="sidemenu__pagebottom  p__lr">

    <h2 class="sidemenu__title">カテゴリ</h2>

    <a class="sidemenu__discription" href="./news_list.html">全て</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="./news_list.html">更新</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="./news_list.html">体験</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="./news_list.html">イベント</a>
    <div class="sidemenu__border"></div>

</aside>

</body>

</html>


{{-- テストデータ --}}

{{-- <h1>ニュース一覧</h1>
    <a href="{{ route('news') }}">すべて</a>
    <a href="{{ route('news', ['name' => '更新']) }}">更新</a>
    <a href="{{ route('news', ['name' => '体験']) }}">体験</a>
    <a href="{{ route('news', ['name' => 'イベント']) }}">イベント</a>


    <table border="1">
        <tr>
            <th>アイキャッチ画像&nbsp;</th>
            <th>日付&nbsp;</th>
            <th>カテゴリー名&nbsp;</th>
            <th>タイトル&nbsp;</th>
            <th>概要&nbsp;</th>
            <th>詳細&nbsp;</th>
        </tr>
        @foreach ($news as $item)
            <tr>
                <td>{{ $item->eyecatch }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->content }}</td>
                <td><a href="{{ route('newsinfo', ['id' => $item->id]) }}">詳細</a></td>
            </tr>
        @endforeach --}}

{{-- テストデータ --}}
