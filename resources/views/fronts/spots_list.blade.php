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

    <!-- 浅瀬背景 -->
    <div class="shallow expand ">
        <!-- 東部・南部ボタン -->
        <ul class="tabs">
            <li class="">
                <a class="tab_item" href="{{ route('spotslist', ['city_id' => 1]) }}">東部</a>
            </li>
            <li class="">
                <a class="tab_item" href="{{ route('spotslist', ['city_id' => 2]) }}">南部</a>
            </li>
        </ul>
        <p class="spot__discription">アイコンをクリックするとスポットに遷移します。</p>
    </div>

    @php
        // 確認用
        // var_dump($items);
        // var_dump($shops);
    @endphp

    <!-- Googleマップ -->
    <div class="shallow expand ">
        <div class="spot__iframe">
            <div class="section__wrap--infomation">
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
                                zoom: 9.8,
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
                                    echo "\"" . route('spotsinfo') . '?id=' . $items[$i]['id'] . "\"";
                                    echo ', text:"';
                                    echo $items[$i]['text'];
                                    echo "\",color: \"#AD7000\",fontFamilt: 'Kosugi Maru',fontSize: \"14px\",fontWeight: \"bold\",};";
                                    echo "\n";
                                }
                                
                            @endphp

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
                        <div id="map" class="googlemap" style="width:100%; height:600px"></div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <!-- セクションを区切る波 -->
    <div class="firstsection__bottom expand"></div>

    <!-- スポット一覧 -->
    <section class="expand">
        <h3 class="section__box--title">検索結果</h3>
        <ul class="card__area">
            @foreach ($spots as $item)
                @component('components.front_spots_card')
                    @slot('spot_link')
                        {{ route('spotsinfo', ['id' => $item->id]) }}
                    @endslot
                    @slot('spot_src')
                        {{ asset('storage/images') }}/{{ $item->img1 }}
                    @endslot

                    @slot('spot_alt')
                        {{ $item->name }}
                    @endslot

                    @slot('spot_title')
                        {{ $item->name }}
                    @endslot

                    @slot('spot_text')
                        @php
                            $overview = mb_strimwidth($item->overview, 0, 180, '・・・');
                        @endphp
                        {{ $overview }}
                    @endslot
                @endcomponent
            @endforeach
        </ul>
    </section>

    <!-- 貝殻イラスト -->
    <div class="spot__shell p__lr">
        <img class="shell" src="{{ asset('assets/images/shell-1.png') }}" alt="貝殻イラスト">
        <img class="shell" src="{{ asset('assets/images/shell-2.png') }}" alt="貝殻イラスト">
        <img class="shell" src="{{ asset('assets/images/shell-3.png') }}" alt="貝殻イラスト">
    </div>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap"></script>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
