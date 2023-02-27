@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '釣具店一覧')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    <div class="shallow expand">
        <!-- 地域切替タブ -->
        <ul class="tabs p__lr section__btn flex">
            <li class=""><a class="tab_item section__btn--margin"
                    href="{{ route('shopslist', ['city_id' => 1]) }}">東部</a></li>
            <li class=""><a class="tab_item section__btn--margin"
                    href="{{ route('shopslist', ['city_id' => 2]) }}">南部</a></li>
            <li class=""><a class="tab_item section__btn--margin"
                    href="{{ route('shopslist', ['city_id' => 3]) }}">西部</a></li>
            <li class=""><a class="tab_item section__btn--margin"
                    href="{{ route('shopslist', ['city_id' => 4]) }}">北部</a></li>
        </ul>

        @php
            // 確認用
            // var_dump($items);
            // var_dump($shops);
        @endphp

        <!-- googlemap -->
        <div class="section__wrap--infomation p__lr">
            <div class="map">
                <script type="text/javascript">
                    // ホバー時のメッセージ
                    var hoverinfos = [];

                    function initMap() {

                        const color = 'black'; // ラベルの色
                        const font_family = 'Kosugi Maru' //ラベルのフォント
                        const font_size = '14px' //ラベルのサイズ
                        // 徳島全域が入るように
                        var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
                        var opts = {
                            zoom: 10,
                            center: latlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        // マップ生成
                        var map = new google.maps.Map(document.getElementById("map"), opts);

                        // マーカ配列
                        // フォント変えられる
                        let markers = [];

                        // PHPの配列をJavaScriptの配列に変換
                        @php
                            for ($i = 0; $i < count($items); $i++) {
                                echo "markers[$i]={lat:";
                                echo $items[$i]['lat'];
                                echo ', lng:';
                                echo $items[$i]['lng'];
                                echo ', url:';
                                echo "\"#mk" . ($i + 1) . "\"";
                                echo ', text:"';
                                echo $items[$i]['text'];
                                echo "\",color: \"#AD7000\",fontFamilt: 'Kosugi Maru',fontSize: \"14px\",fontWeight: \"bold\",};";
                                echo "\n";
                            }

                        @endphp

                        // var marker = new google.maps.Marker();
                        // for (let i = 0; i < items.length; i++) {
                        //     marker = new google.maps.Marker({
                        //         position: items[i],
                        //         label: items[i],
                        //         map: map
                        //     });

                        // マーカー生成
                        for (var i = 0; i < markers.length; i++) {
                            createMarker(
                                markers[i].text,
                                markers[i].lat,
                                markers[i].lng,
                                markers[i].url,
                                map,
                            );
                        }

                        // マーカー表示
                        marker.setMap(map);
                    }

                    // マーカーを設定
                    function createMarker(name, lat, lng, url, map) {

                        var latlng = new google.maps.LatLng(lat, lng);
                        var pixelOffset = new google.maps.Size(0, -40);

                        var marker = new google.maps.Marker({
                            position: latlng,
                            // icon: {
                            //     url: 'fish.png',
                            //     scaledSize: new google.maps.Size(42, 55),
                            // },
                            map: map
                        });

                        //クリックしたら指定したurlに遷移するイベント
                        marker.addListener('click', (function(url) {
                            return function() {
                                location.href = url;
                            };
                        })(url));

                        // マーカーにマウスを乗せたときのイベント
                        marker.addListener('mouseover', function() {
                            // infoの位置
                            hoverinfo = new google.maps.InfoWindow({
                                map: map,
                                content: name,
                                noSuppress: true,
                                pixelOffset: pixelOffset
                            });

                            hoverinfo.setPosition(
                                latlng
                            );

                            // マーカーからマウスを降ろしたときのイベント
                            marker.addListener('mouseout', function() {
                                if (hoverinfo) {
                                    hoverinfo.close();
                                }
                            });
                        });

                    }
                </script>
                <!-- 下記よりマップ -->
                <!-- グーグルマップAPI使用 -->
                <section class="map-box content">
                    {{-- <h2 class="ta-a h2 mb30 map-sub">ＭＡＰ表示</h2> --}}
                    <div id="map"></div>
                </section>

            </div>
        </div>

        <h3 class="section__box--title">検索結果</h3>
        <!-- ショップ一覧 -->
        @foreach ($shops as $item)
            @component('components.front_shops_card')
                @slot('shop_img')
                    {{ $item->img }}
                @endslot

                @slot('shop_name')
                    {{ $item->name }}
                @endslot

                @slot('shop_address')
                    {{ $item->address }}
                @endslot

                @slot('shop_service_day')
                    @php
                        echo $item->service_day;
                    @endphp
                @endslot

                @slot('shop_tel')
                    {{ $item->tel }}
                @endslot

                @slot('shop_email')
                    {{ $item->email }}
                @endslot

                @slot('shop_url')
                    {{ $item->url }}
                @endslot

                @slot('shop_service')
                    @php
                        echo $item->service;
                    @endphp
                @endslot

                @slot('shop_pr')
                    @php
                        echo $item->pr;
                    @endphp
                @endslot
            @endcomponent
        @endforeach
    </div>

    <!-- セクションを区切る波 -->
    <div class="firstsection__bottom expand"></div>

    <!-- 貝殻と浮き輪のイラスト -->
    <div class="footer__top--img expand" style="background-color: #fff;">
        <img src="{{ asset('assets/images/footer_top_img.png') }}" alt="貝と浮き輪" class="footer__image--adjust">
    </div>

    <!-- Google Map Api -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap"></script>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
