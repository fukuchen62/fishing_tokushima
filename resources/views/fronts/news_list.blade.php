{{-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ニュース一覧</title>
</head> --}}

@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'information一覧')

@section('pageCss')
    <link rel="stylesheet" href="../assets/css/news_list.css">
@endsection

<body>
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

    {{-- 該当ページのCSS --}}


    {{-- メイン --}}
    @section('content')
        {{-- <section class="titlesection">
            <div class="titlesection__box">
                <h1 class="pagetitle">ページタイトル</h1>
            </div>
        </section>

        <section class="section">

            <h2 class="section__box--title ">第一セクション</h2>

            <div>
                <h3>サブタイトル</h3>
                <div>
                    <p>テキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
            </div>
        </section>

        <div id="page_top" class="flex">
            <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
        </div> --}}

        <div class="keyvisual expand">
            キービジュアル
        </div>

        <section class="titlesection expand">
            <div class="titlesection__box">
                <h1 class="pagetitle">information</h1>
                <div class="pagetitle__border"></div>
            </div>
            <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish1">
            <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish2">
            <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish3">

        </section>






        <div class="mainarea flex expand">
            <main class="main-section expand">
                <section class="firstsection expand p__lr">

                    <div class="newslist__section expand">

                        <h2 class="pagetitle ">一覧</h2>
                        <div class="pagetitle__border"></div>
                        <div class="newslist__box">
                            {{-- <ul>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">記事タイトル</h3>
                                            <p>2023.2.15</p>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">記事タイトル</h3>
                                            <p>2023.2.15</p>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">記事タイトル</h3>
                                            <p>2023.2.15</p>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">記事タイトル</h3>
                                            <p>2023.2.15</p>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul> --}}
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
                </section>
            </main>


            <aside class="sidemenu ">
                <div class="sidemenu__topimg"></div>
                <h2 class="sidemenu__title">カテゴリ</h2>
                <div class=" sidemenu__box flex">
                    <a class="sidemenu__discription" href="">全て</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="" href="{{ route('news', ['name' => '更新']) }}">更新</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="">体験</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="">イベント</a>
                    <div class="sidemenu__border"></div>
                </div>
                <div class="sidemenu__bottomimg"></div>
            </aside>
        </div>
        <section>
            <div class="sidemenu__mb">
                <div class="sidemenu__topimg--mb"></div>
                <h2 class="sidemenu__title">カテゴリ</h2>
                <div class=" sidemenu__box--mb flex">
                    <a class="sidemenu__discription" href="">全て</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="">更新</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="">体験</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="">イベント</a>
                    <div class="sidemenu__border"></div>
                </div>
            </div>
        </section>
    @endsection

    {{-- 該当ページ専用JS --}}
    @section('pageJs')

    @endsection

</body>

</html>
