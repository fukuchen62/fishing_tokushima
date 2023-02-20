@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'ページタイトル')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">ページタイトル</h1>
        </div>
    </section>

    <section class="section">
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
    </section>

    <!-- 下記よりマップ -->
    <!-- グーグルマップAPI使用 -->
    <section class="map-box content">

        <h2 class="ta-a h2 mb30 map-sub">ＭＡＰ表示</h2>

        <div id="map" style="width:620px; height:400px"></div>
    </section>
    </div>

    </main>

    @php
        // マップ表示するための情報保存用
        // latitude:緯度, longitude:経度, name:避難場所名
        // $evas = [];
        // カウント
        $eva_count = count($evacuations);
        // print_r($eva_count);
        
        foreach ($evacuations as $item) {
            $evas[] = [$item->latitude, $item->longitude, $item->name];
        }
        print_r($evas);
    @endphp

    <script type="text/javascript">
        function initMap() {

            const color = 'black'; // ラベルの色
            const font_family = 'Kosugi Maru' //ラベルのフォント
            const font_size = '14px' //ラベルのサイズ
            // 徳島全域が入るように
            var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
            var opts = {
                zoom: 9.2,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            // マップ生成
            var map = new google.maps.Map(document.getElementById("map"), opts);

            // マーカー生成
            // フォント変えられる
            let evas = [];

            // @foreach ($evacuations as $value)

            // @endforeach

            @php
                for ($i = 0; $i < $eva_count; $i++) {
            
                    {{   "evas[${i}]={lat:" . $evas[$i][0] . ','; }}
                    {{   'lng:' . $evas[$i][1] . ',';}}
                    {{   'text:' . $evas[$i][2];}}
                    {{   " color: #AD7000, fontFamilt: 'Kosugi Maru', fontSize: 14px, fontWeight: bold,};";}}
                    {{   "\n";}}
            
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
            for (let i = 0; i < evas.length; i++) {
                marker = new google.maps.Marker({
                    position: evas[i],
                    label: evas[i],
                    map: map
                });
            }

            // マーカー表示
            marker.setMap(map);
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap"></script>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
