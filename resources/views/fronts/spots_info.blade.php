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

    {{ Cookie::get('spot_id') }}

        @if (Cookie::get('spot_id')==$spots->id)
        <div>
        <p>お気に入り登録済</p>
        <a href="{{ route('cookie', ['spot_id' => $spots->id]) }}"><p>リンク2</p></a>
        </div>
        @else
            <a href="{{ route('cookie', ['spot_id' => $spots->id]) }}"><p>リンク1</p></a>
        @endif

    <div class="container shallow expand">
        <div class="column">
            <div class="spotinfo__images p__lr">
                <!-- メイン画像 -->
                <div class="spotinfo__img main-img js-main-img">
                    <img src="{{ $spots->img1 }}"
                        alt="プレビュー">
                </div>
                <!-- サムネイル画像 -->
                <ul class="sub-img js-sub-img">
                    <!-- 選択されている画像の枠線を変更 -->
                    <li class="spotinfo__img">
                        <img src="{{ $spots->img1 }}"
                            alt="スポット写真1">
                    </li>
                    <li class="spotinfo__img">
                        <img src="{{ $spots->img2 }}"
                            alt="スポット写真2">
                    </li>
                    <li class="spotinfo__img">
                        <img src="{{ $spots->img3 }}"
                            alt="スポット写真3">
                    </li>
                    <li class="spotinfo__img">
                        <img src="{{ $spots->img4 }}"
                            alt="スポット写真4">
                    </li>
                    <li class="spotinfo__img">
                        <img src="{{ $spots->img5 }}"
                            alt="スポット写真5">
                    </li>
                </ul>
            </div>
            <!-- お気に入りボタン -->
            <div>
                <a href="" id="" class="favorite">
                    <span>お気に入りに登録する</span>
                    <img src="../assets/images/svg/favorite.svg" alt="">
                </a>
            </div>

            <div>
                <a href="" id="" class="favorite favorite__in">
                    <span>お気に入りに登録済み</span>
                    <img src="../assets/images/svg/favorite__in.svg" alt="">
                </a>
            </div>
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
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">釣り方</td>
                        <td>@foreach ($fishlist as $item)
                                    {{ $item->method }}
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
                        <td>{{ $spots->evacuation_id }}</td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
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
