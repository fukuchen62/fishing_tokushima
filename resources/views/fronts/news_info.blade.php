@extends('layouts.layout_front_with_aside')

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
                @php
                    echo $news->content;
                @endphp


            </div>
        </div>

    </section>
@endsection

@section('bottom')
    <div>
        <div class="news__bottom--up expand"></div>
    </div>
@endsection


@section('sidemenu')
    <a class="sidemenu__discription" href="{{ route('news') }}">全て</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="{{ route('news', ['name' => '更新']) }}">更新</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="{{ route('news', ['name' => '体験']) }}">体験</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="{{ route('news', ['name' => 'イベント']) }}">イベント</a>
    <div class="sidemenu__border"></div>
@endsection
