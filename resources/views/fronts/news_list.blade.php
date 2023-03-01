@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'お知らせ')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/news_list.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/news-keyvisual.jpg') }}" alt="news-keyvisual.jpg">
@endsection

@section('content')
    <div class="mainarea news__flex expand">

        <div class="main-section expand">
            <div>
                <div class="news__bottom--up expand"></div>
            </div>
            <section class="firstsection expand p__lr">

                <div class="news__section expand p__lr">

                    <h2 class="pagetitle ">
                        @if ($name != null)
                            {{ $name }}
                        @else
                            全て
                        @endif
                    </h2>
                    <div class="pagetitle__border"></div>
                    <div class="card__area">
                        <ul class="card__area--news">
                            @foreach ($news as $item)
                                @component('components.front_news_card')
                                    @slot('card_link')
                                        {{ route('newsinfo', ['id' => $item->id]) }}
                                    @endslot

                                    @slot('card_src')
                                    @if ($item->eyecatch != "")
                                    {{ asset('storage/images') }}/{{ $item->eyecatch }}
                                    @else
                                    https://placehold.jp/320x240.png
                                    @endif
                                    @endslot

                                    @slot('card_alt')
                                    @if ($item->eyecatch != "")
                                        {{ $item->eyecatch }}
                                    @endif
                                    @endslot

                                    @slot('card_title')
                                        {{ $item->title }}
                                    @endslot

                                    @slot('card_created')
                                        @php
                                        $ts = strtotime($item->created_at);
                                        @endphp
                                        {{ date('Y.m.d', $ts) }}
                                    @endslot

                                    @slot('card_text')
                                        {{ $item->overview }}
                                    @endslot
                                @endcomponent
                            @endforeach
                        </ul>
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
                    <a class="sidemenu__discription" href="{{ route('news', ['name' => '更新']) }}">更新</a>
                    <a class="sidemenu__discription" href="{{ route('news', ['name' => '体験']) }}">体験</a>
                    <a class="sidemenu__discription" href="{{ route('news', ['name' => 'イベント']) }}">イベント</a>
                </div>
            </div>
            <div class="sidemenu__bottomimg"></div>
        </aside>
    </div>
    <div>
        <div class="news__bottom expand"></div>
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
