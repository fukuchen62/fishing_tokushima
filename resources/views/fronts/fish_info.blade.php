@extends('layouts.layout_front_fishinfo')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('key_visual')
    {{ asset('assets/images/fish_keyvisual.jpg') }}
@endsection

@section('toptitle')
    {{ $item->name }}
@endsection

@section('title')
    {{ $item->name }}<span class="title__formal_name">{{ '（' . $item->formal_name . '）' }}</span>
@endsection

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/fishes_info.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    <section id="fishinfo__section" class="fishinfo__section p__lr expand">
        <ul class="fishinfo__box">
            <li>
                <div class="fishinfo__box--img">
                    <!-- slick用（仮） -->
                    <div class="container">
                        <!-- メイン画像 -->
                        <div class="main-img js-main-img max-width-box">
                            <img src="{{ asset('storage/images') }}/{{ $item->fish_img1 }}" alt="{{ $item->fish_img1 }}" />
                        </div>
                        <!-- サムネイル画像 -->
                        <ul class="sub-img js-sub-img">
                            <!-- 選択されている画像の枠線を変更 -->
                            <li class="current">
                                <div class="max-width-box">
                                    <img src="{{ asset('storage/images') }}/{{ $item->fish_img1 }}"
                                        alt="{{ $item->fish_img1 }}" />
                                </div>
                            </li>
                            <li>
                                @if ($item->fish_img2 != '')
                                    <div class="max-width-box">
                                        <img src="{{ asset('storage/images') }}/{{ $item->fish_img2 }}"
                                            alt="{{ $item->fish_img2 }}" />
                                    </div>
                                @endif
                            </li>
                            <li>
                                @if ($item->fish_img3 != '')
                                    <div class="max-width-box">
                                        <img src="{{ asset('storage/images') }}/{{ $item->fish_img3 }}"
                                            alt="{{ $item->fish_img3 }}" />
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- 概要 -->
            <li>
                <div class="fishinfo__box--description">
                    <h3 class="fishinfo__box--title">概要</h3>
                    <p>{{ $item->detail }}</p>
                    <div class="fishinfo__box--feed">
                        <p class=""><img style="vertical-align: middle"
                                src="{{ asset('assets/images/fish_ebi.png') }}" {{-- ../storage/images/fish_ebi.png" --}} alt="fish_ebi.png"
                                width="35" height="40">餌の種類：アカアミ</p>
                        <h3 class="card__title">難易度</h3>
                        <div class="star__box"><?php echo $item->getLevel(); ?></div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="fishes__table">
            <h3 class="table__title">詳細情報</h3>
            <table class="table radius-table">
                <tr class="table__tr">
                    <td class="table__subtitle">季節・時間帯</td>
                    <td>{{ $item->getMonth() }}</td>
                </tr>
                <tr class="table__tr">
                    <td class="table__subtitle">釣れる場所</td>
                    <td>
                        @foreach ($spots as $spot)
                            @if ($spot != null)
                                {{ $spot->name }},
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__subtitle">釣り方</td>
                    <td>{{ $item->method }}</td>
                </tr>
            </table>
        </div>

        <!-- おいしい食べ方 -->
        <h2 class="fishes__box--title">おいしい食べ方</h2>
        <div class="fishes__box--description">
            <ul class="fishinfo__box--food">
                <li>
                    <!-- slick用（仮） -->
                    <div class="slider center">
                        @if ($item->cooking_img1 != '')
                            <div><img src="{{ asset('storage/images') }}/{{ $item->cooking_img1 }}"
                                    alt="{{ $item->cooking_img1 }}" /></div>
                        @endif
                        @if ($item->cooking_img2 != '')
                            <div>
                                <img src="{{ asset('storage/images') }}/{{ $item->cooking_img2 }}"
                                    alt="{{ $item->cooking_img2 }}" />
                            </div>
                        @endif
                        @if ($item->cooking_img3 != '')
                            <div><img src="{{ asset('storage/images') }}/{{ $item->cooking_img3 }}"
                                    alt="{{ $item->cooking_img3 }}" /></div>
                        @endif
                    </div>
                </li>
                <li>
                    <div class="traiangle"></div>
                </li>
                <li>
                    <div class="fishinfo__box--text">
                        {{-- <h3>おいしい食べ方</h3> --}}
                        <p>{{ $item->cooking1 }}、{{ $item->cooking2 }}、{{ $item->cooking3 }}</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- 装飾（貝）の画像 -->
        <ul class="fishesinfo__img--shell">
            <li><img src="{{ asset('assets/images/shell-1.png') }}" width="40" height="40" alt="shell-1.png"></li>
            <li><img src="{{ asset('assets/images/shell-2.png') }}" width="40" height="40" alt="shell-2.png"></li>
            <li><img src="{{ asset('assets/images/shell-3.png') }}" width="40" height="40" alt="shell-3.png"></li>
            <li><img src="{{ asset('assets/images/ukiwa.png') }}" width="40" height="40" alt="ukiwa.png"></li>
            <li><img src="{{ asset('assets/images/shell-1.png') }}" width="40" height="40" alt="shell-1.png"></li>
            <li><img src="{{ asset('assets/images/shell-2.png') }}" width="40" height="40" alt=""></li>
            <li><img src="{{ asset('assets/images/shell-3.png') }}" width="40" height="40" alt="shell-3.png"></li>
        </ul>
        <div class="firstsection__bottom expand"></div>
    </section>

    <!-- 保存方法・注意事項 -->
    <section class="preservation__section p__lr expand">
        <div class="preservation__box">
            <h3>保存方法</h3>
            <p>{{ $item->keep }}</p>
        </div>

        <!-- ウミガメ装飾 -->
        <div class="fishesinfo__decoration">
            <ul class="fishesinfo__img--turtle">
                <li class="fishesinfo__foam1"></li>
                <li class="fishesinfo__foam2"></li>
                <li><img src="{{ asset('assets/images/umigame-1.png') }}" width="100" height="100"
                        alt="umigame-1.png"></li>
                <li><img src="{{ asset('assets/images/umigame-2.png') }}" width="100" height="100"
                        alt="umigame-2.png"></li>
            </ul>
        </div>

    </section>
    <div class="firstsection__bottom--under expand"></div>

    <!-- 釣れるスポット -->
    <section class="spot__section p__lr">
        <div class="spot__box">
            @php
                // print_r($spots);
            @endphp
            <h2 class="spot__box--title">釣れるスポット</h2>
            <ul class="spot__box--list">

                @foreach ($spots as $key => $spot)
                    @if ($spot != null)
                        @component('components.front_fish_info_card')
                            @slot('card_link')
                                {{ route('spotsinfo', ['id' => $spots[$key]]) }}
                            @endslot
                            @slot('card_alt')
                                {{ $spot->img1 }}
                            @endslot
                            @slot('card_src')
                                @if ($spot->img1 != '')
                                    {{ asset('storage/images') }}/{{ $spot->img1 }}
                                @else
                                    https://placehold.jp/320x240.png
                                @endif
                            @endslot
                            @slot('card_name')
                                {{ $spot->name }}
                            @endslot
                            @slot('card_overview')
                                @php
                                    $overview = mb_strimwidth($spot->overview, 0, 120, '・・・');
                                @endphp
                                {{ $overview }}
                            @endslot
                        @endcomponent
                    @endif
                @endforeach


            </ul>
        </div>
    </section>

    <!-- そのほかの魚 -->
    <section class="recommend__section p__lr">
        <div class="recommend__box">
            <h2 class="recommend__box--title">その他の魚</h2>
            <ul class="recommend__box--list card__area">
                @foreach ($fishlist as $key => $fish)
                    @component('components.front_fish_info_card')
                        @slot('card_link')
                            {{ route('fishinfo', ['id' => $fishlist[$key]]) }}
                        @endslot

                        @slot('card_alt')
                            {{ $fish->fish_img1 }}
                        @endslot

                        @slot('card_src')
                            {{ asset('storage/images') }}/{{ $fish->fish_img1 }}
                        @endslot
                        @slot('card_name')
                            {{ $fish->name }}
                        @endslot

                        @slot('card_overview')
                            {{-- {{ $fish->detail }} --}}
                        @endslot
                    @endcomponent
                @endforeach
            </ul>
        </div>
    </section>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/slick/slick-common.js') }}"></script>
@endsection
