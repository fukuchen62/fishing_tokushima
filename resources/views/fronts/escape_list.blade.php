@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '避難場所')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/evacuation.css') }}">
@endsection

@section('key_visual')
    <div class="keyvisual expand">
        キービジュアル
    </div>
@endsection

{{-- メイン --}}
@section('content')

    <div class="container">
        <!-- 浅瀬背景 -->
        <div class="shallow expand">
            <!-- プラン概要セクション -->
            <section class="evacuation__section p__lr">
                <h2 class="section__box--title">安全に釣りを楽しむために</h2>
                <p class="evacuation__box--warning">初めての釣りスポットでは、必ず災害時の緊急避難経路をチェックしてください。</p>
                <p>海の中では地震に気づかず津波に巻き込まれる可能性があります。警報を聞いたり、地震を感知した場合にはすみやかに周囲に確認し、海にサーファーがいる場合には発炎筒や車のクラクション等で知らせ、すぐに避難しましょう。
                    <br>
                    その際、車での避難はやめましょう。避難経路を塞ぐなど被害が拡大してしまう恐れがあります。
                </p>
                <p>釣りスポットのピンにズームすると、周辺の指定緊急避難場所が確認できます。必ず現地での避難経路と合わせてご確認ください。
                    <br>
                    ※本マップの表示の有無・表示位置・名称等について、現況との誤差があることをあらかじめ理解したうえでご利用ください。
                </p>
                <div class="map">
                    <script type="text/javascript">
                        function initMap() {

                            const color = 'black'; // ラベルの色
                            const font_family = 'Kosugi Maru' //ラベルのフォント
                            const font_size = '14px' //ラベルのサイズ
                            // 徳島全域が入るように
                            var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
                            var opts = {
                                zoom: 9.2,
                                width: '100%',
                                center: latlng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            // マップ生成
                            var map = new google.maps.Map(document.getElementById("map"), opts);

                            // マーカー生成
                            // フォント変えられる
                            let items = [];


                            @php
                                for ($i = 0; $i < count($items); $i++) {
                                    echo "items[${i}]={lat:";
                                    echo $items[$i]['lat'];
                                    echo ', lng:';
                                    echo $items[$i]['lng'];
                                    echo ', text:"';
                                    echo $items[$i]['text'];
                                    echo "\", color: \"#AD7000\", fontFamilt: 'Kosugi Maru', fontSize: \"14px\", fontWeight: \"bold\",};";
                                    echo "\n";
                                }
                            @endphp

                            // 例
                            // spots[0] = {
                            //     lat: 34.06505,
                            //     lng: 134.56786,
                            //     text: "みなと公園",
                            //     color: "black",
                            //     fontFamilt: 'Kosugi Maru',
                            //     fontSize: "14px",
                            //     fontWeight: "bold",
                            // };

                            var marker = new google.maps.Marker();
                            for (let i = 0; i < items.length; i++) {
                                marker = new google.maps.Marker({
                                    position: items[i],
                                    label: items[i],
                                    map: map
                                });
                            }

                            // マーカー表示
                            marker.setMap(map);
                        }
                    </script>
                    <!-- 下記よりマップ -->
                    <!-- グーグルマップAPI使用 -->
                    <section class="map-box content">
                        {{-- <h2 class="ta-a h2 mb30 map-sub">ＭＡＰ表示</h2> --}}
                        <div id="map" style="width:100%; height:600px"></div>
                    </section>

                </div>
            </section>
        </div>
        <!-- セクションを区切る波 -->
        <div class="firstsection__bottom expand"></div>
    </div>


    {{-- <section class="section">
        <h1>避難場所一覧</h1>
        <table>
            <tr>
                <th>避難場所一覧</th>
            </tr>

            <table border="1">
                <tr>

                    <th>市町村ID</th>
                    <th>地域</th>
                    <th>避難場所名</th>
                    <th>住所</th>
                    <th>経度</th>
                    <th>緯度</th>

                </tr>
                @foreach ($evacuations as $item)
                    <tr>

                        <td>{{ $item->city_id }}</td>
                        <td>
                            @if ($item->city != null)
                                {{ $item->city->getData() }}
                            @endif
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->longitude }}</td>
                        <td>{{ $item->latitude }}</td>

                    </tr>
                @endforeach
            </table>
    </section> --}}

    @php
        // マップ表示するための情報保存用
        // latitude:緯度, longitude:経度, name:避難場所名
        // $evas = [];
        // カウント
        // $eva_count = count($evacuations);
        // // print_r($eva_count);
        
        // foreach ($evacuations as $item) {
        //     $evas[] = [$item->latitude, $item->longitude, $item->name];
        // }
        // print_r($evas);
        
        // print_r($items);
        
        // var_dump($items);
    @endphp

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap"></script>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
