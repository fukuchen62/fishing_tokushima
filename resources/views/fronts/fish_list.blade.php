@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('key_visual')
    {{ asset('assets/images/fish_keyvisual.jpg') }}
@endsection

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
                <input type="hidden" value="{{ $month }}" name="month_choice">
                <tr>
                    <td>
                        <a href="{{ route('fishlist', ['month' => '1']) }}">
                            <button class='secList secList1'>１月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => '2']) }}">
                            <button class='secList secList2'>２月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => '3']) }}">
                            <button class='secList secList3'>３月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => '4']) }}">
                            <button class='secList secList4'>４月</button>
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('fishlist', ['month' => '5']) }}">
                            <button class='secList secList5'>５月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => '6']) }}">
                            <button class='secList secList6'>６月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => '7']) }}">
                            <button class='secList secList7'>７月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => '8']) }}">
                            <button class='secList secList8'>８月</button>
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('fishlist', ['month' => '9']) }}">
                            <button class='secList secList9'>９月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => 'a']) }}">
                            <button class='secList secList10'>１０月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => 'b']) }}">
                            <button class='secList secList11'>１１月</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('fishlist', ['month' => 'c']) }}">
                            <button class='secList secList12'>１２月</button>
                        </a>
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
            <h3 class="rerults__box--subtitle">この月に狙える魚！クリックして詳しいページへ！</h3>
            <ul class="results__box--info">
                @foreach ($fishes as $item)
                    @component('components.front_fish_list1_card')
                        @slot('fish_link')
                            {{ route('fishinfo', ['id' => $item->id]) }}
                        @endslot

                        @slot('fish_src')
                            {{ asset('storage/images') }}/{{ $item->fish_img1 }}
                        @endslot

                        @slot('fish_alt')
                            {{ $item->fish_img1 }}
                        @endslot
                    @endcomponent
                @endforeach
            </ul>
        </div>
    </section>

    <div class="firstsection__bottom--under expand"></div>

    <!-- 玄人向けの魚 -->
    <section class="others__section p__lr">
        <div class="others__box">
            <h2 class="others__box--title">徳島の海産物</h2>
            <h3 class="others__box--subtitle">その他、徳島で釣れる・食べれる海産物</h3>
            <ul class="others__box--info">

                @foreach ($fishes2 as $item)
                    @component('components.front_fish_list_card')
                        @slot('fish_src')
                            {{ asset('storage/images') }}/{{ $item->fish_img1 }}
                        @endslot

                        @slot('fish_alt')
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

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/js/fish.js') }}"></script>
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
