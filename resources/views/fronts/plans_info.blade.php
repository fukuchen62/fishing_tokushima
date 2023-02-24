@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('key_visual', 'キービジュアル')

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
                    <div class="max-width-box"><img class="overview__box--img plan__img"
                            src="{{ asset('storage/images') }}/{{ $item->thumbnail }}" alt="{{ $item->thumbnail }}"></div>
                    <!-- 概要のテキストボックス -->
                    <div class="overview__box--group">
                        <h3>概要</h3>
                        <p>{{ $item->overview }}</p>
                        <h3>難易度</h3>
                        <!-- バックで選ばれてどれかが出される -->
                        <div class="star__box"><?php echo $item->getLevel(); ?></div>
                    </div>
                </div>

                <!-- お気に入りボタン -->
                <!-- バックエンドで出される -->
                <div class="btn__flex">
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
            </section>

            <!-- 体験プランテーブルセクション -->
            <section class="fishes__table p__lr">
                <h3 class="table__title">詳細情報</h3>
                <table class="table radius-table">
                    <tr class="table__tr">
                        <td class="table__subtitle">釣れるスポット</td>
                        <td>テキストテキストテキスト</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">釣れる月</td>
                        <td>テキストテキストテキスト</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">時間帯</td>
                        <td>テキストテキストテキスト</td>
                    </tr>
                </table>
            </section>
            <!-- カードセクション -->
            <section class="detail__section p__lr">
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
                </ul>
                <!-- 装飾（貝）の画像 -->
                <div>
                    <ul class="detail__img--shell">
                        <li><img src="../assets/images/shell-1.png" width="40" height="40" alt=""></li>
                        <li><img src="../assets/images/shell-2.png" width="40" height="40" alt=""></li>
                        <li><img src="../assets/images/shell-3.png" width="40" height="40" alt=""></li>
                        <li><img src="../assets/images/ukiwa.png" width="40" height="40" alt=""></li>
                        <li><img src="../assets/images/shell-1.png" width="40" height="40" alt=""></li>
                        <li><img src="../assets/images/shell-2.png" width="40" height="40" alt=""></li>
                        <li><img src="../assets/images/shell-3.png" width="40" height="40" alt=""></li>
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
                    <div class="flow__box">
                        <div class="max-width-box"><img class="flow__box--img plan__img"
                                src="https://placehold.jp/559x314.png" alt="フローの写真"></div>
                        <!-- フローのテキストボックス -->
                        <div class="flow__box--text">
                            <h3>①準備物</h3>
                            <p>　釣り竿は２～３ｍ程のサビキ用ロッドで小型のスピニングリールを使用します。
                                サビキ釣りに必要な撒き餌入れる編みかご、２～４号のナス型オモリを仕掛けに使用します。
                                餌はオキアミなどの撒き餌に使われる物を使用します。</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                    <div class="flow__box">
                        <div class="max-width-box"><img class="flow__box--img plan__img"
                                src="https://placehold.jp/559x314.png" alt="フローの写真"></div>
                        <div class="flow__box--text">
                            <h3>②</h3>
                            <p>テキストテキストテキスト</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                    <div class="flow__box">
                        <div class="max-width-box"><img class="flow__box--img plan__img"
                                src="https://placehold.jp/559x314.png" alt="フローの写真"></div>
                        <div class="flow__box--text last__flow">
                            <h3>③</h3>
                            <p>テキストテキストテキスト</p>
                        </div>
                    </div>
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
                <li class="card__p">
                    <a class="card card__skin" href="">
                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                        <div class="card__textbox">
                            <h3 class="card__title">タイトルタイトル</h3>
                            <div class="card__flex">
                                <p class="card__description">東部</p>
                                <!-- どれかが選んで出される -->
                                <div class="star__box">
                                    <div class="level1">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                    <div class="level2">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                    <div class="level3">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="card__p">
                    <a class="card card__skin" href="">
                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                        <div class="card__textbox">
                            <h3 class="card__title">タイトルタイトル</h3>
                            <div class="card__flex">
                                <p class="card__description">東部</p>
                                <!-- どれかが選んで出される -->
                                <div class="star__box">
                                    <div class="level1">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                    <div class="level2">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                    <div class="level3">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="card__p">
                    <a class="card card__skin" href="">
                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                        <div class="card__textbox">
                            <h3 class="card__title">タイトルタイトル</h3>
                            <div class="card__flex">
                                <p class="card__description">東部</p>
                                <!-- どれかが選んで出される -->
                                <div class="star__box">
                                    <div class="level1">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                    <div class="level2">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                    <div class="level3">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                        <img class="star" src="../assets/images/star.png" alt="☆">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <a class="btn" href="">プラン一覧</a>
        </section>
    </div>
@endsection



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2>内容</h2>
    @if (isset($item))

        {{-- お気に入り保存 --}}

        {{ Cookie::get('plan_id') }}

        {{-- @php
    $msg="";
@endphp


{{ $msg }} --}}

        {{-- @php
        $val="";
        if (isset($_COOKIE["plan_id"])) {
            $val = $_COOKIE["plan_id"];
        }
    @endphp

    <p>cookie: {{ $val }}</p> --}}


        @if (Cookie::get('plan_id') == $item->id)
            <div>
                <p>お気に入り登録済</p>
                <a href="{{ route('cookie', ['plan_id' => $item->id]) }}">
                    <p>リンク2</p>
                </a>
            </div>
        @else
            <a href="{{ route('cookie', ['plan_id' => $item->id]) }}">
                <p>リンク1</p>
            </a>
        @endif

        {{-- お気に入りボタンは不採用 --}}
        {{-- <form action="{{ route('mypage')}}" method="post">
        <table>
        @csrf
        <tr>
        <td><input type="submit" name="plan_id" value="{{ $item->id }}" id=""></td>
        </tr>
        </table>
    </form> --}}

        <table>
            <tr>
                <th>title</th>
                <th>thumbnail</th>
                <th>overview</th>
                <th>level</th>
                {{-- <th>level2</th> --}}
                <th>スポット名</th>
                <th>釣り方</th>
                <th>釣れる月</th>
                <th>flow</th>
            </tr>
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->thumbnail }}</td>
                <td>{{ $item->overview }}</td>
                <td><?php echo $item->getLevel(); ?></td>
                {{-- <td>{{ $item -> getLevel() }}</td> --}}
                <td>{{ $item->spot->name }}</td>
                <td>{{ $item->fish->method }}</td>
                <td>{{ $item->fish->getMonth() }}</td>
                <td>{{ $item->flow }}</td>
            </tr>
        </table>
    @endif

    <h2>関連プラン</h2>

    <h3>魚が一緒</h3>
    @if (isset($connection1))
        <table>
            <tr>
                <th>id</th>
                <th>eye_catch</th>
                <th>title</th>
                <th>地域</th>
                <th>レベル</th>
                <th>overview</th>
                <td>リンク</td>
            </tr>
            @foreach ($connection1 as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->eye_catch }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->city->area }}</td>
                    <td><?php echo $value->getLevel(); ?></td>
                    <td>{{ $value->overview }}</td>
                    <td><a href="{{ route('plansinfo', ['id' => $value->id]) }}">リンク</a></td>
                </tr>
            @endforeach
        </table>
    @endif


    <h3>スポットが一緒</h3>
    @if (isset($connection2))
        <table>
            <tr>
                <th>id</th>
                <th>eye_catch</th>
                <th>title</th>
                <th>地域</th>
                <th>レベル</th>
                <th>overview</th>
                <td>リンク</td>
            </tr>
            @foreach ($connection2 as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->eye_catch }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->city->area }}</td>
                    <td><?php echo $value->getLevel(); ?></td>
                    <td>{{ $value->overview }}</td>
                    <td><a href="{{ route('plansinfo', ['id' => $value->id]) }}">リンク</a></td>
                </tr>
            @endforeach
        </table>
    @endif

</body>

</html>
