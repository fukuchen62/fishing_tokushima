{{-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>

<body>

    <ul>
        <li><a href="{{ route('knowledgelist') }}">入門知識一覧</a></li>
        <li><a href="{{ route('spotslist') }}">釣り場一覧</a></li>
        <li><a href="{{ route('shopslist') }}">釣具屋一覧</a></li>
    </ul>

    <h1>釣り場一覧</h1>

    <a href="{{ route('spotslist', ['city_id' => 1]) }}">東部</a>
    <a href="{{ route('spotslist', ['city_id' => 2]) }}">南部</a>


    @if ($spots != null)
        <table border="1">
            <tr>
                <th>ID&nbsp;</th>
                <th>釣りスポット名&nbsp;</th>
                <th>概要&nbsp;</th>
                <th>地域ID&nbsp;</th>
                <th>郵便番号&nbsp;</th>
                <th>住所&nbsp;</th>
                <th>iframe&nbsp;</th>
                <th>経度&nbsp;</th>
                <th>緯度&nbsp;</th>
                <th>トイレ&nbsp;</th>
                <th>トイレ経度&nbsp;</th>
                <th>トイレ緯度&nbsp;</th>
                <th>画像1&nbsp;</th>
                <th>画像2&nbsp;</th>
                <th>画像3&nbsp;</th>
                <th>画像4&nbsp;</th>
                <th>画像5&nbsp;</th>
                <th>魚ID&nbsp;</th>
                <th>金額&nbsp;</th>
                <th>BBQ&nbsp;</th>
                <th>ショップID&nbsp;</th>
                <th>体験プランID&nbsp;</th>
                <th>避難場所ID&nbsp;</th>
                <th>駐車場ID&nbsp;</th>
                <th>病院ID&nbsp;</th>
                <th>スーパーマーケットID&nbsp;</th>
                <th>飲食店ID&nbsp;</th>
                <th>その他ID&nbsp;</th>
                <th>表示フラグ&nbsp;</th>
                <th>投稿日時&nbsp;</th>
                <th>編集日時&nbsp;</th>
            </tr>
            @foreach ($spots as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->overview }}</td>
                    <td>{{ $item->city_id }}</td>
                    <td>{{ $item->postal_code }}</td>
                    <td>{{ $item->spot_address }}</td>
                    <td>{{ $item->iframe_url }}</td>
                    <td>{{ $item->spot_longitude }}</td>
                    <td>{{ $item->spot_latitude }}</td>
                    <td>{{ $item->toilet }}</td>
                    <td>{{ $item->toilet_longitude }}</td>
                    <td>{{ $item->toilet_latitude }}</td>
                    <td>{{ $item->img1 }}</td>
                    <td>{{ $item->img2 }}</td>
                    <td>{{ $item->img3 }}</td>
                    <td>{{ $item->img4 }}</td>
                    <td>{{ $item->img5 }}</td>
                    <td>{{ $item->fish_id }}</td>
                    <td>{{ $item->mony }}</td>
                    <td>{{ $item->bbq }}</td>
                    <td>{{ $item->shop_id }}</td>
                    <td>{{ $item->plan_id }}</td>
                    <td>{{ $item->evacuation_id }}</td>
                    <td>{{ $item->parking_id }}</td>
                    <td>{{ $item->hospital_id }}</td>
                    <td>{{ $item->supermarket_id }}</td>
                    <td>{{ $item->restaurant_id }}</td>
                    <td>{{ $item->other_id }}</td>
                    <td>{{ $item->is_show }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td><a href="{{ route('spotsinfo', ['id' => $item->id]) }}">詳細</a></td>
                </tr>
            @endforeach
        </table>
    @endif

</body>

</html> --}}

@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '釣りスポット一覧')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/spots.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">釣りスポット一覧</h1>
        </div>
    </section>

    <!-- 浅瀬背景 -->
    <div class="shallow">
        <!-- 東部・南部ボタン -->
        <div>


            <button class="spot__btn"><a href="{{ route('spotslist', ['city_id' => 1]) }}">東部</a></button>
            <button class="spot__btn"><a href="{{ route('spotslist', ['city_id' => 2]) }}">南部</a></button>
            <p class="spot__discription">ポイントをタップするとエリアへ遷移されます。</p>
        </div>
        <!-- スポットマップ -->
        <div class="spot__map p__lr">
            <img class="spot__map--east" src="../assets/images/tokushima_east.svg" alt="">
            <a class="spot__map--point" href=""></a>
            <a class="spot__map--point" href=""></a>
            <a class="spot__map--point" href=""></a>
            <div class="spot__map--south">
                <a class="spot__map--point" href=""></a>
                <a class="spot__map--point" href=""></a>
                <a class="spot__map--point" href=""></a>
            </div>
        </div>
        <!-- 貝殻イラスト -->
        <div class="spot__shell">
            <img class="shell" src="" alt="貝殻イラスト">
            <img class="shell" src="" alt="貝殻イラスト">
            <img class="shell" src="" alt="貝殻イラスト">
        </div>
    </div>
    <!-- スポットcard -->
    <ul class="card__area">
        @foreach ($spots as $item)
            @component('components.front_spots_card')
                @slot('spot_link')
                    {{ route('spotsinfo', ['id' => $item->id]) }}
                @endslot
                @slot('spot_src')
                @endslot

                @slot('spot_alt')
                    {{ $item->title }}
                @endslot

                @slot('spot_title')
                    {{ $item->title }}
                @endslot

                @slot('spot_text')
                    {{ $item->overview }}
                @endslot
            @endcomponent
        @endforeach
    </ul>

    <!-- 貝殻イラスト -->
    <div class="spot__shell">
        <img class="shell" src="{{ asset('assets/images/kai_baigai.png') }}" alt="貝殻イラスト">
        <img class="shell" src="" alt="貝殻イラスト">
        <img class="shell" src="" alt="貝殻イラスト">
    </div>
    <div class="firstsection__bottom"></div>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
