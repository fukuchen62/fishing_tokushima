@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '釣りスポット詳細')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">{{ $spots->name }}</h1>
        </div>
    </section>

    {{-- お気に入り保存 --}}

    {{-- @if ($request->cookie('plan_id')!==$item->id)
    <a href="{{ route('cookie', ['spot_id' =>  $spots->id ]) }}"><p>リンク1</p></a>
    @endif

    @if ($request->cookie('plan_id')===$item->id)
    <a href="{{ route('cookie', ['spot_id' =>  $spots->id ]) }}"><p>リンク2</p></a>
    @endif --}}

    {{-- <form action="{{ route('mypage')}}" method="post">
        <table>
        @csrf
        <tr>
        <td><input type="submit" name="spot_id" value="{{ $spots->id }}" id=""></td>
        </tr>
        </table>
    </form> --}}

    <!-- 浅瀬背景 -->
    <div class="shallow">
        <!-- スポット写真 -->
        <div class="p__lr">
            <img class="spotinfo__img" src="" alt="">
        </div>
        <!-- スポット概要 -->
        <div class="spotinfo__discription p__lr">
            <div class="spotinfo__dis--textbox">
                <p class="spotinfo__dis--text">紀伊水道と小鳴門海峡の交わる位置で、潮流も激しく、いろいろな魚が年間を通して狙える知る人ぞ知る人気の釣り場です。</p>
                <!-- 貝殻イラスト -->
                <img class="shell">
                <img class="spotinfo__dis--icon" src="" alt="">
                <img class="spotinfo__dis--icon" src="" alt="">
            </div>
        </div>
    </div>
    <!-- 海背景 -->
    <div class="sea">
        <!-- 狙える魚 -->
        <section class="p__lr">
            <h3 class="spotinfo__fish--title">狙える魚</h3>
            @foreach ($fishlist as $fish)
                {{ $fish->name }}
            @endforeach
            {{-- <a href=""><img class="spotinfo__fish--img" src="" alt=""></a> --}}
            {{-- <a href=""><img class="spotinfo__fish--img" src="" alt=""></a> --}}
            {{-- <a href=""><img class="spotinfo__fish--img" src="" alt=""></a> --}}
        </section>
        <!-- 詳細情報table -->
        <section class="p__lr">
            <h3 class="table__title">詳細情報</h3>
            <table class="table radius-table">
                <tr class="table__tr">
                    <td class="table__subtitle">住所</td>
                    <td>{{ $spots->spot_address }}</td>
                </tr>
                <tr>
                    <td class="table__subtitle">駐車場</td>
                    <td>{{ $spots->parking_id }}</td>
                </tr>
                <tr>
                    <td class="table__subtitle">釣り方</td>
                    <td>サビキ釣り</td>
                </tr>
                <tr>
                    <td class="table__subtitle">周辺施設</td>
                    <td>{{ $spots->supermarket_id }}</td>
                </tr>
                <tr>
                    <td class="table__subtitle">近くの病院</td>
                    <td>{{ $spots->hospital->name }}</td>
                </tr>
                <tr>
                    <td class="table__subtitle">避難場所</td>
                    <td>高台</td>
                </tr>
            </table>
        </section>
        <!-- googleマップ -->
        <iframe class="spotinfo__iframe p__lr" src="{{ $spots->iframe_url }}" width="600" height="450" frameborder="0"
            style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- 貝殻イラスト -->
    <div class="spotinfo__shell">
        <img class="shell" src="" alt="">
        <img class="shell" src="" alt="">
        <img class="shell" src="" alt="">
    </div>
    <!-- 近くのスポットcard表示3つ -->
    <section class="p__lr">
        <h3>近くのスポット</h3>
        {{-- <div class="spotinfo__card--aria">
            <div class="card card__skin">
                <a href="">
                    <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                    <div>
                        <h3 class="card__title">タイトルタイトル</h3>
                        <p class="card__discription">texttexttexttexttext</p>
                    </div>
                </a>
            </div>
            <a href="" class="card">
                <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                <div>
                    <h3 class="card__title">タイトルタイトル</h3>
                    <p class="card__discription">texttexttexttexttext</p>
                </div>
            </a>
            <a href="" class="card">
                <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                <div>
                    <h3 class="card__title">タイトルタイトル</h3>
                    <p class="card__discription">texttexttexttexttext</p>
                </div>
            </a>
        </div> --}}

        <a class="btn" href="{{ route('spotslist') }}">スポット一覧</a>
    </section>
    <!-- 貝殻イラスト -->
    <div>
        <img class="shell" src="" alt="">
        <img class="shell" src="" alt="">
    </div>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
