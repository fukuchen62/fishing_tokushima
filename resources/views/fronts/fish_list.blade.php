@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('key_visual', 'キービジュアル')
@section('title', '徳島の魚一覧')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/search_fish.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    {{-- 月ごとに検索 --}}
    <section id="calendar__section" class="calendar__section expand p__lr">
        <h2 class="calendar__title">徳島の魚を月ごとに紹介</h2>
        <div class="calendar__box">

            <div class="calendar__box--search">
                <ul class="calendar__box--text">
                    <li>
                        <iconify-icon class="icon-img" icon="game-icons:circling-fish" style="color: #699bf7;" width="130"
                            height="130"></iconify-icon>
                    </li>
                    <li>
                        <p>徳島県で釣れる魚だよ！<br>
                            月ごとにクリックして
                            生息する魚をチェック！</p>
                    </li>
                </ul>
            </div>
            <table class="calendar-tb">
                <tr>
                    <td>
                        <div class='button'>
                            <button id="1" class='secList' onclick="make_page(1)"><a
                                    href="{{ route('fishlist', ['month' => '1']) }}">１月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="2" class='secList' onclick="make_page(2)"><a
                                    href="{{ route('fishlist', ['month' => '2']) }}">２月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="3" class='secList' onclick="make_page(3)"><a
                                    href="{{ route('fishlist', ['month' => '3']) }}">３月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="4" class='secList' onclick="make_page(4)"><a
                                    href="{{ route('fishlist', ['month' => '4']) }}">４月</a></button>
                        </div>
                    </td>

                    <td>
                        <div class='button'>
                            <button id="5" class='secList' onclick="make_page(5)"><a
                                    href="{{ route('fishlist', ['month' => '5']) }}">５月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="6" class='secList' onclick="make_page(6)"><a
                                    href="{{ route('fishlist', ['month' => '6']) }}">６月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="7" class='secList' onclick="make_page(7)"><a
                                    href="{{ route('fishlist', ['month' => '7']) }}">７月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="8" class='secList' onclick="make_page(8)"><a
                                    href="{{ route('fishlist', ['month' => '8']) }}">８月</a></button>
                        </div>
                    </td>

                    <td>
                        <div class='button'>
                            <button id="9" class='secList' onclick="make_page(9)"><a
                                    href="{{ route('fishlist', ['month' => '9']) }}">９月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="10" class='secList' onclick="make_page(10)"><a
                                    href="{{ route('fishlist', ['month' => 'a']) }}">１０月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="11" class='secList' onclick="make_page(11)"><a
                                    href="{{ route('fishlist', ['month' => 'b']) }}">１１月</a></button>
                        </div>
                    </td>
                    <td>
                        <div class='button'>
                            <button id="12" class='secList' onclick="make_page(12)"><a
                                    href="{{ route('fishlist', ['month' => 'c']) }}">１２月</a></button>
                        </div>
                    </td>
                </tr>
            </table>

        </div>
        <div class="firstsection__bottom expand"></div>
    </section>



    <!-- 検索結果 -->
    <section id="results__section" class="results__section expand p__lr">
        <div class="results__box">
            <h2 class="results__box--title">初心者におすすめ！釣れる魚</h2>
            <ul class="results__box--info">
                @foreach ($fishes as $item)
                    @component('components.front_fish_list1_card')
                        @slot('fish_link')
                            {{ route('fishinfo', ['id' => $item->id]) }}
                        @endslot

                        @slot('fish_src')
                            {{ $item->fish_img1 }}
                        @endslot

                        @slot('fish_alt')
                            {{ $item->name }}
                        @endslot
                    @endcomponent
                @endforeach
            </ul>
        </div>
    </section>

    <div class="firstsection__bottom expand"></div>

    <!-- 玄人向けの魚 -->
    <section class="others__section p__lr">
        <div class="others__box">
            <h2 class="others__box--title">徳島の海産物</h2>
            <ul class="others__box--info">

                @foreach ($fishes2 as $item)
                    @component('components.front_fish_list_card')
                        @slot('fish_src')
                            {{ $item->fish_img1 }}
                        @endslot

                        @slot('fish_name')
                            {{ $item->name }}{{ '（' . $item->formal_name . '）' }}
                        @endslot

                        @slot('fish_detail')
                            {{ $item->detail }}
                        @endslot

                        @slot('fish_cooking1')
                            {{ $item->cooking1 }}
                        @endslot

                        @slot('fish_cooking2')
                            {{ $item->cooking2 }}
                        @endslot

                        @slot('fish_cooking3')
                            {{ $item->cooking3 }}
                        @endslot
                    @endcomponent
                @endforeach
            </ul>
        </div>
    </section>

    <script>
        /**
         * 指定月のURLを生成してサーバーに送る
         */
        function make_page(id) {
            var url = location.href;

            var num = url.indexOf("?");
            if (num > 0) {
                url = url.substring(0, num);
            }

            location.href = url + "/?month=" + id;
        }

        // jQuery
        $(function() {
            // 指定月を変数に代入
            var month = "2";
            if (month == 'n') {
                month = 11;
            }
            if (month == 'd') {
                month = 12;
            }

            // 当月を選択している状態にしている
            $("button#" + month).addClass("this-month");
        });
    </script>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection


{{-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>徳島で釣れる魚一覧</title>
</head>

<body>
    <h1>徳島で釣れる魚一覧</h1>

    <a href="{{ route('fishlist', ['month' => '1']) }}">1月</a>
    <a href="{{ route('fishlist', ['month' => '2']) }}">2月</a>
    <a href="{{ route('fishlist', ['month' => '3']) }}">3月</a>
    <a href="{{ route('fishlist', ['month' => '4']) }}">4月</a>
    <a href="{{ route('fishlist', ['month' => '5']) }}">5月</a>
    <a href="{{ route('fishlist', ['month' => '6']) }}">6月</a>
    <a href="{{ route('fishlist', ['month' => '7']) }}">7月</a>
    <a href="{{ route('fishlist', ['month' => '8']) }}">8月</a>
    <a href="{{ route('fishlist', ['month' => '9']) }}">9月</a>
    <a href="{{ route('fishlist', ['month' => 'a']) }}">10月</a>
    <a href="{{ route('fishlist', ['month' => 'b']) }}">11月</a>
    <a href="{{ route('fishlist', ['month' => 'c']) }}">12月</a>

    <table>
        <tr>
            <th>釣れる月</th>
            <th>魚の名前(普通の呼び方)</th>
            <th>魚の名前(正式名称)</th>
            <th>魚の画像1</th>
            <th>詳細説明</th>
            <th>食べ方1</th>
            <th>食べ方2</th>
            <th>食べ方3</th>
            <th>リンク</th>
        </tr>
        @foreach ($fishes as $item)
            <tr>
                <td>{{ $item->getMonth() }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->formal_name }}</td>
                <td>{{ $item->fish_img1 }}</td>
                <td>{{ $item->detail }}</td>
                <td>{{ $item->cooking1 }}</td>
                <td>{{ $item->cooking2 }}</td>
                <td>{{ $item->cooking3 }}</td>
                <td><a href="./info?id={{ $item->id }}">詳細ページへ</a></td>
            </tr>
        @endforeach
    </table>

    <table>
        <tr>
            <th>魚の名前(普通の呼び方)</th>
            <th>魚の名前(正式名称)</th>
            <th>魚の画像1</th>
            <th>詳細説明</th>
            <th>食べ方1</th>
            <th>食べ方2</th>
            <th>食べ方3</th>
        </tr>
        @foreach ($fishes2 as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->formal_name }}</td>
                <td>{{ $item->fish_img1 }}</td>
                <td>{{ $item->detail }}</td>
                <td>{{ $item->cooking1 }}</td>
                <td>{{ $item->cooking2 }}</td>
                <td>{{ $item->cooking3 }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html> --}}
