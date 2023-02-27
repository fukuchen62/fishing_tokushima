@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'information')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/news_list.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/news_keyvisual.jpg') }}" alt="news_keyvisual.jpg">
@endsection

@section('content')

    <div class="mainarea flex expand">
        <div class="main-section expand">
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

                        @if ($news->eyecatch!="")
                            <img src="{{ asset('storage/images') }}/{{ $news->eyecatch }}" alt="{{ $news->eyecatch }}">
                        @else
                            <img src="https://placehold.jp/559x419.png" alt="">
                        @endif

                        @php
                            echo $news->content;
                        @endphp
                    </div>
                </div>

            </section>

        </div>
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



    <aside class="sidemenu__pagebottom  p__lr">

        <h2 class="sidemenu__title">カテゴリ</h2>

        <a class="sidemenu__discription" href="{{ route('news') }}">全て</a>
        <div class="sidemenu__border"></div>
        <a class="sidemenu__discription" href="{{ route('news', ['name' => '更新']) }}">更新</a>
        <div class="sidemenu__border"></div>
        <a class="sidemenu__discription" href="{{ route('news', ['name' => '体験']) }}">体験</a>
        <div class="sidemenu__border"></div>
        <a class="sidemenu__discription" href="{{ route('news', ['name' => 'イベント']) }}">イベント</a>
        <div class="sidemenu__border"></div>

    </aside>
@endsection
