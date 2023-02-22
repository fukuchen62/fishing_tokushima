@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section("title", "$spots->name")
{{-- 南さん確認済み --}}

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spots.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spots_info.css') }}">
@endsection

@section('key_visual')
    キービジュアル
@endsection

{{-- メイン --}}
@section('content')

    <!-- 浅瀬背景 -->
    <div class="container shallow expand">
        <div class="column">
            <div class="spotinfo__images p__lr">
                <!-- メイン画像 -->
                <div class="spotinfo__img main-img js-main-img">
                    <img class="spotinfo__img" src="https://placehold.jp/3d4070/ffffff/559x419.png?text=%EF%BC%91"
                    {{-- {{ $spots->img1 }} --}}
                        alt="スポット写真1">
                </div>
                <!-- サムネイル画像 -->
                <ul class="sub-img js-sub-img">
                    <!-- 選択されている画像の枠線を変更 -->
                    <li class="spotinfo__img">
                        <img src="https://placehold.jp/3d4070/ffffff/559x419.png?text=%EF%BC%91"
                        {{-- {{ $spots->img1 }} --}}
                            alt="スポット写真1">
                    </li>
                    <li class="spotinfo__img">
                        <img src="https://placehold.jp/3d4070/ffffff/559x419.png?text=%EF%BC%92"
                        {{-- {{ $spots->img2 }} --}}
                            alt="スポット写真2">
                    </li>
                    <li class="spotinfo__img">
                        <img src="https://placehold.jp/3d4070/ffffff/559x419.png?text=%EF%BC%93"
                        {{-- {{ $spots->img3 }} --}}
                            alt="スポット写真3">
                    </li>
                    <li class="spotinfo__img">
                        <img src="https://placehold.jp/3d4070/ffffff/559x419.png?text=%EF%BC%94"
                        {{-- {{ $spots->img4 }} --}}
                            alt="スポット写真4">
                    </li>
                    <li class="spotinfo__img">
                        <img src="https://placehold.jp/3d4070/ffffff/559x419.png?text=%EF%BC%95"
                        {{-- {{ $spots->img5 }} --}}
                            alt="スポット写真5">
                    </li>
                </ul>
            </div>

            <!-- お気に入りボタン -->
            {{-- {{ Cookie::get('spot_id') }} --}}

            @if (Cookie::get('spot_id')==$spots->id)
            <div>
                <a href="{{ route('cookie', ['spot_id' => $spots->id]) }}" id="" class="favorite favorite__in">
                    <span>お気に入りに登録済み</span>
                    <img src="{{ asset('assets/images/svg/favorite__in.svg') }}" alt="">
                </a>
            </div>
            @else
            <div>
                <a href="{{ route('cookie', ['spot_id' => $spots->id]) }}" id="" class="favorite">
                    <span>お気に入りに登録する</span>
                    <img src="{{ asset('assets/images/svg/favorite.svg') }}" alt="">
                </a>
            </div>
            @endif

        </div>
        <div class="column">
            <!-- スポット概要 -->
            <div class="spotinfo__discription p__lr p__b">
                <div class="spotinfo__dis--textbox">
                    <p class="spotinfo__dis--text">{{ $spots->overview }}</p>
                </div>
            </div>
            <!-- 詳細情報table -->
            <section class="spotinfo__table p__lr">
                <h3 class="table__title spotinfo__table--title">詳細情報</h3>
                <table class="table m__b">
                    <tr class="table__tr">
                        <td class="table__subtitle">住所</td>
                        <td>{{ $spots->spot_address }}</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">駐車場</td>
                        <td>{{ $spots->parking_id }}</td>
                        {{-- 南さんに何を表示するか確認中 --}}
                        {{-- $parking->name --}}
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">釣り方</td>
                        <td>@foreach ($fishlist as $item)
                                    {{ $item->method }}、
                            @endforeach</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">トイレ</td>
                        <td>{{ $spots->toilet }}</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">バーベキュー</td>
                        <td>{{ $spots->bbq }}</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">避難場所</td>
                        <td>
                            @foreach ($evacuationlist as $item)
                                    {{ $item->name }}、
                            @endforeach</td>
                        {{-- 避難場所の名称を表示 --}}
                    </tr>
                </table>
            </section>
        </div>
    </div>
    <div class="firstsection__bottom expand"></div>
    <!-- 狙える魚 -->
    <div class="sea">
        <section class="spotinfo__fish p__lr">
            <h3 class="section__box--title spotinfo__sectiontitle--fish">狙える魚</h3>
            <div class="spotinfo__fishes">
                @foreach ($fishlist as $item)
            @component('components.front_spots_info')

                @slot('fish_img')
                    {{ $item->fish_img1 }}
                @endslot

                @slot('fish_name')
                    {{ $item->name }}
                @endslot

            @endcomponent
        @endforeach
            </div>
        </section>

        <!-- googleマップ -->
        <section class="spotinfo__iframe p__lr">
            <iframe class="googlemap"
                src="{{ $spots->iframe_url }}"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>
    <!-- セクションを区切る波 -->
    <div class="secondsection__bottom expand"></div>
    <!-- 貝殻イラスト -->
    <div class="spotinfo__shell">
        <img class="shell" src="../assets/images/shell-1.png" alt="">
        <img class="shell" src="../assets/images/shell-2.png" alt="">
        <img class="shell" src="../assets/images/shell-3.png" alt="">
    </div>
    <!-- 近くのスポットcard表示3つ -->
    <section class="p__lr">
        <h3 class="section__box--title spotinfo__sectiontitle">近くのスポット</h3>
        <ul class="card__area">
            @foreach ($connection1 as $item)
            @component('components.front_spots_info2')

                @slot('spot_link')
                    {{ route('spotsinfo', ['id' => $item->id]) }}
                @endslot

                @slot('spot_img')
                    {{ $item->img1 }}
                @endslot

                @slot('spot_name')
                    {{ $item->name }}
                @endslot

                @slot('spot_overview')
                    {{ $item->overview }}
                @endslot

            @endcomponent
        @endforeach
        </ul>

        <a class="btn" href="{{ route('spotslist') }}">スポット一覧</a>
    </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
