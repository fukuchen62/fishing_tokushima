@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/plan_keyvisual.jpg') }}" alt="plan_keyvisual.jpg">
@endsection

@section('title')
    {{ $item->title }}
@endsection

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/plan.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plan_info.css') }}">
@endsection


{{-- メイン --}}
@section('content')
    <div class="container">
        <!-- 浅瀬背景 -->
        <div class="shallow expand">
            <!-- プラン概要セクション -->
            <section class="overview__section p__lr">
                <div class="overview__box">
                    <div class="max-width-box">
                        @if ($item->thumbnail != "")
                            <img class="overview__box--img plan__img"
                            src="{{ asset('storage/images') }}/{{ $item->thumbnail }}" alt="{{ $item->thumbnail }}">
                        @else
                            <img class="overview__box--img plan__img"
                            src="https://placehold.jp/559x314.png">
                        @endif
                    </div>

                    <!-- 概要のテキストボックス -->
                    <div class="overview__box--group">
                        <h3>概要</h3>
                        <p>{{ $item->overview }}</p>
                        <h3>難易度</h3>
                        <!-- バックで選ばれてどれかが出される -->
                        {{-- モデルでレベルごとに表示を変更 --}}
                        <div class="star__box"><?php echo $item->getLevel(); ?></div>
                    </div>
                </div>

                <!-- お気に入りボタン -->
                <!-- バックエンドで出される -->
            @if (Cookie::get('plan_id')==$item->id)
            <div>
                    <a href="{{ route('cookie', ['plan_id' => $item->id]) }}" id="" class="favorite favorite__in">
                        <span>お気に入りに登録済み</span>
                        <img src="{{ asset('assets/images/svg/favorite__in.svg') }}" alt="favorite__in.svg">
                    </a>
            </div>

            @else
            <div class="btn__flex">
                    <a href="{{ route('cookie', ['plan_id' => $item->id]) }}" id="" class="favorite">
                        <span>お気に入りに登録する</span>
                        <img src="{{ asset('assets/images/svg/favorite.svg') }}" alt="favorite.svg">
                    </a>
            </div>
            @endif
            </section>

            <!-- 体験プランテーブルセクション -->
            <section class="fishes__table p__lr">
                <h3 class="table__title">詳細情報</h3>
                <table class="table radius-table">
                    <tr class="table__tr">
                        <td class="table__subtitle">釣れるスポット</td>
                        <td>{{ $item->spot->name }}</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">釣れる月</td>
                        <td>{{ $item->fish->getMonth() }}</td>
                    </tr>
                </table>
            </section>
            <!-- カードセクション -->
            {{-- コントローラーも修正の必要があるので、時間があれば対応 --}}

            {{-- <section class="detail__section p__lr">
                <h3 class="detail__box--title to-details">
                    ↓ 魚とスポットの詳細はこちら
                </h3>
                <ul class="card__area">
                    <li class="card__p">
                        <a class="card card__skin" href="">
                            <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                            <div class="card__textbox">
                                <h3 class="card__title">アジ</h3>
                                <p class="card__description">説明説明説明説明説明説明</p>
                            </div>
                        </a>
                    </li>
                    <li class="card__p">
                        <a class="card card__skin" href="">
                            <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                            <div class="card__textbox">
                                <h3 class="card__title">小松海岸</h3>
                                <p class="card__description">説明説明説明説明説明説明</p>
                            </div>
                        </a>
                    </li>
                </ul> --}}
                <!-- 装飾（貝）の画像 -->
                <div>
                    <ul class="detail__img--shell">
                        <li><img src="{{ asset('assets/images/shell-1.png') }}" width="40" height="40" alt=""></li>
                        <li><img src="{{ asset('assets/images/shell-2.png') }}" width="40" height="40" alt=""></li>
                        <li><img src="{{ asset('assets/images/shell-3.png') }}" width="40" height="40" alt=""></li>
                        <li><img src="{{ asset('assets/images/ukiwa.png') }}" width="40" height="40" alt=""></li>
                        <li><img src="{{ asset('assets/images/shell-1.png') }}" width="40" height="40" alt=""></li>
                        <li><img src="{{ asset('assets/images/shell-2.png') }}" width="40" height="40" alt=""></li>
                        <li><img src="{{ asset('assets/images/shell-3.png') }}" width="40" height="40" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- セクションを区切る波 -->
            <div class="secondsection__top expand"></div>
        </div>
        <!-- 海背景 -->
        <div class="sea expand">
            <!-- 体験プランフローセクション -->
            <section class="flow__section p__lr">
                <h2 class="section__box--title">釣り方のフロー</h2>
                <p class="anchor--text">START</p>
                <!-- 背景の錨のためのdiv -->
                <div class="flow__bg">

                    {{-- 下記内容からコンテンツ班に登録してもらう？ --}}
                    <div class="flow__box">
                        <div class="max-width-box">
                            {{-- 画像名コンテンツ班に登録してもらう --}}
                            <img class="flow__box--img plan__img"
                            src="{{ asset('storage/images/画像名') }}" alt="画像名">
                            {{-- 下記ダミー画像 --}}
                            {{-- https://placehold.jp/559x314.png --}}
                        </div>
                        <!-- フローのテキストボックス -->
                        <div class="flow__box--text">
                            {{-- コンテンツ班タイトル入れてもらう --}}
                            <h3>①準備物</h3>
                            {{-- コンテンツ班に説明入れてもらう --}}
                            <p>　釣り竿は２～３ｍ程のサビキ用ロッドで小型のスピニングリールを使用します。
                                サビキ釣りに必要な撒き餌入れる編みかご、２～４号のナス型オモリを仕掛けに使用します。
                                餌はオキアミなどの撒き餌に使われる物を使用します。</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                    <div class="flow__box">
                        <div class="max-width-box">
                            {{-- 画像名コンテンツ班に登録してもらう --}}
                            <img class="flow__box--img plan__img"
                            src="{{ asset('storage/images/画像名') }}" alt="画像名">
                        </div>
                        <div class="flow__box--text">
                            {{-- コンテンツ班タイトル入れてもらう --}}
                            <h3>②</h3>
                            {{-- コンテンツ班に説明入れてもらう --}}
                            <p>テキストテキストテキスト</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                    <div class="flow__box">
                        <div class="max-width-box">
                            {{-- 画像名コンテンツ班に登録してもらう --}}
                            <img class="flow__box--img plan__img"
                            src="{{ asset('storage/images/画像名') }}" alt="画像名">
                        </div>
                        <div class="flow__box--text last__flow">
                            {{-- コンテンツ班タイトル入れてもらう --}}
                            <h3>③</h3>
                            {{-- コンテンツ班に説明入れてもらう --}}
                            <p>テキストテキストテキスト</p>
                        </div>
                    </div>
                    {{-- ここまでコンテンツ班に登録してもらう？ --}}

                </div>
                <p class="anchor--text">GOAL</p>
            </section>

        </div>
        <!-- セクションを区切る波 -->
        <div class="secondsection__bottom expand"></div>

        <!-- カードセクション -->
        <section class="card__section p__lr">
            <h2 class="section__box--title ">
                <span class="btn_area_ttl">関連プラン</span>
            </h2>

            <ul class="card__area">
                {{-- 魚が一緒の関連プラン --}}
                @if (isset($connection1))
                @foreach ($connection1 as $key => $value)
                <li class="card__p">
                    <a class="card card__skin"
                    href="{{ route('plansinfo')}}?id= {{ $value->id }}";>
                    @if ($value->eye_catch != "")
                    <img class="card__img" src="{{ asset('storage/images') }}/{{ $value->eye_catch }}" alt="{{ $value->eye_catch }}">
                    @else
                    <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                    @endif
                        <div class="card__textbox">
                            <h3 class="card__title">{{ $value->title }}</h3>
                            <div class="card__flex">
                                <p class="card__description">{{ $value->city->area }}</p>
                                <!-- どれかが選んで出される -->
                                <div class="star__box">
                                    <?php echo $value->getLevel(); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
                @endif

                {{-- スポットが一緒の関連プラン --}}
                @if (isset($connection2))
                @foreach ($connection2 as $key => $value)
                <li class="card__p">
                    <a class="card card__skin"
                    href="{{ route('plansinfo')}}?id= {{ $value->id }}";>
                    @if ($value->eye_catch != "")
                    <img class="card__img" src="{{ asset('storage/images') }}/{{ $value->eye_catch }}" alt="{{ $value->eye_catch }}">
                    @else
                    <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                    @endif
                        <div class="card__textbox">
                            <h3 class="card__title">{{ $value->title }}</h3>
                            <div class="card__flex">
                                <p class="card__description">{{ $value->city->area }}</p>
                                <!-- どれかが選んで出される -->
                                <div class="star__box">
                                    <?php echo $value->getLevel(); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
                @endif
            </ul>

            <a class="btn" href="{{ route('planslist') }}">プラン一覧</a>
        </section>
    </div>
@endsection
