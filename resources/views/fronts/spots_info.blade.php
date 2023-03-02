@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', "$spots->name")
{{-- 上記南さん確認済み --}}

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spots.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spots_info.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    @php
        // var_dump($spots);
        // var_dump($spotInfo);
        // var_dump($evacuationlist[0]['lat']);
        // var_dump($fishlist);
        // var_dump($fishMethod);
        // print_r($fishMethod);
    @endphp

    <!-- 浅瀬背景 -->
    <div class="container shallow expand">
        <div class="column">
            <div class="spotinfo__images p__lr">

                <!-- メイン画像 -->
                <div class="spotinfo__img main-img js-main-img">
                    @if ($spots->img1 != '')
                        <img class="spotinfo__img" src="{{ asset('storage/images') }}/{{ $spots->img1 }}"
                            alt="{{ $spots->img1 }}">
                    @endif
                </div>

                <!-- サムネイル画像 -->
                <ul class="sub-img js-sub-img">
                    <!-- 選択されている画像の枠線を変更 -->
                    <li class="spotinfo__img">
                        @if ($spots->img1 != '')
                            <img class="spotinfo__img" src="{{ asset('storage/images') }}/{{ $spots->img1 }}"
                                alt="{{ $spots->img1 }}">
                        @endif
                    </li>
                    <li class="spotinfo__img">
                        @if ($spots->img2 != '')
                            <img src="{{ asset('storage/images') }}/{{ $spots->img2 }}" alt="{{ $spots->img2 }}">
                        @endif
                    </li>
                    <li class="spotinfo__img">
                        @if ($spots->img3 != '')
                            <img src="{{ asset('storage/images') }}/{{ $spots->img3 }}" alt="{{ $spots->img3 }}">
                        @endif
                    </li>
                    <li class="spotinfo__img">
                        @if ($spots->img4 != '')
                            <img src="{{ asset('storage/images') }}/{{ $spots->img4 }}" alt="{{ $spots->img4 }}">
                        @endif
                    </li>
                    <li class="spotinfo__img">
                        @if ($spots->img5 != '')
                            <img src="{{ asset('storage/images') }}/{{ $spots->img5 }}" alt="{{ $spots->img5 }}">
                        @endif
                    </li>
                </ul>
            </div>

            @php
                $cookie = Cookie::get('spot_id');
                $cookielist = explode (',',$cookie);
                // var_dump($cookielist);
            @endphp

            <p>{{ $cookie }}</p>

            @if (in_array($spots->id, $cookielist))
                <div>
                    <a href="{{ route('cookie', ['spot_id' => $spots->id]) }}" id=""
                        class="favorite favorite__in">
                        <span>お気に入りに登録済み</span>
                        <img src="{{ asset('assets/images/svg/favorite__in.svg') }}" alt="favorite__in.svg">
                    </a>
                </div>
            @else
                <div>
                    <a href="{{ route('cookie', ['spot_id' => $spots->id]) }}" id="" class="favorite">
                        <span>お気に入りに登録する</span>
                        <img src="{{ asset('assets/images/svg/favorite.svg') }}" alt="favorite.svg">
                    </a>
                </div>
            @endif
        </div>

        <div class="column">

            <!-- スポット概要 -->
            <div class="spotinfo__discription p__lr p__b">
                <div class="spotinfo__dis--textbox">
                    <p class="spotinfo__dis--text">{{ $spots->overview }}</p>
                </div>
            </div>

            <!-- 詳細情報table -->
            <section class="spotinfo__table p__lr">
                <h3 class="table__title spotinfo__table--title">詳細情報</h3>
                <table class="table m__b">
                    <tr class="table__tr">
                        <td class="table__subtitle">住所</td>
                        <td>{{ $spots->spot_address }}</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">駐車場</td>
                        <td>
                            @if ($parking['text'] == '駐車場')
                                有
                            @else
                                -
                            @endif
                        </td>
                        {{-- 本来なら「有」or「-」になる予定 --}}
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">釣り方</td>
                        <td>
                            {{-- 重複した配列を削除 --}}
                            @php
                                $fishMethods = array_unique($fishMethod);
                                // print_r($fishMethods);
                                foreach ($fishMethods as $key => $value) {
                                    echo $value . '&nbsp;';
                                }
                            @endphp
                        </td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">トイレ</td>
                        <td>{{ $spots->toilet }}</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">バーベキュー</td>
                        <td>{{ $spots->bbq }}</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__subtitle">避難場所</td>
                        <td>
                            @foreach ($evacuationlist as $item)
                                {{ $item['text'] }}<br>
                            @endforeach
                        </td>
                        {{-- 避難場所の名称を表示 --}}
                    </tr>
                </table>
            </section>
        </div>
    </div>

    <div class="firstsection__bottom expand"></div>

    <!-- 狙える魚 -->
    <div class="sea expand">
        <section class="spotinfo__fish p__lr">
            <h3 class="section__box--title spotinfo__sectiontitle--fish">狙える魚</h3>
            <div class="spotinfo__fishes">
                @foreach ($fishlist as $item)
                    @component('components.front_spots_info')
                        @slot('fish_img')
                            {{ asset('storage/images') }}/{{ $item->fish_img1 }}
                        @endslot

                        @slot('fish_alt')
                            {{ $item->fish_img1 }}
                        @endslot
                    @endcomponent
                @endforeach
            </div>
        </section>

        <!-- googleマップ -->
        <section class="spotinfo__iframe p__lr">
            <h3 class="section__box--title spotinfo__sectiontitle--fish">周辺マップ</h3>
            <div class="map">
                <script type="text/javascript">
                    // ホバー時のメッセージ
                    var hoverinfos = [];

                    function initMap() {

                        const color = 'black'; // ラベルの色
                        const font_family = 'Kosugi Maru' //ラベルのフォント
                        const font_size = '14px' //ラベルのサイズ
                        // 徳島全域が入るように
                        var latlng = new google.maps.LatLng({{ $spots->spot_latitude }}, {{ $spots->spot_longitude }});
                        var opts = {
                            zoom: 14,
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
                            for ($i = 0; $i < count($spotInfo); $i++) {
                                echo "markers[$i]={lat:";
                                echo $spotInfo[$i]['lat'];
                                echo ', lng:';
                                echo $spotInfo[$i]['lng'];
                                echo ', url:';
                                echo "\"#mk" . ($i + 1) . "\"";
                                echo ', text:"';
                                echo $spotInfo[$i]['text'];
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
                            //     url: 'fish__icon.png',
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
        </section>
    </div>


    <!-- セクションを区切る波 -->
    <div class="secondsection__bottom expand"></div>

    <!-- 貝殻イラスト -->
    <div class="spotinfo__shell">
        <img class="shell" src="{{ asset('assets/images/shell-1.png') }}" alt="shell-1.png">
        <img class="shell" src="{{ asset('assets/images/shell-2.png') }}" alt="shell-2.png">
        <img class="shell" src="{{ asset('assets/images/shell-3.png') }}" alt="shell-3.png">
    </div>

    <!-- 近くのスポットcard表示3つ -->
    <section class="p__lr">
        <h3 class="section__box--title spotinfo__sectiontitle">近くのスポット</h3>
        <ul class="card__area">
            @foreach ($connection1 as $item)
                @component('components.front_spots_info2')
                    @slot('spot_link')
                        {{ route('spotsinfo', ['id' => $item->id]) }}
                    @endslot

                    @slot('spot_img')
                        @if ($item->img1 != '')
                            {{ asset('storage/images') }}/{{ $item->img1 }}
                        @else
                            https://placehold.jp/320x240.png
                        @endif
                    @endslot

                    @slot('spot_alt')
                        {{ $item->img1 }}
                    @endslot

                    @slot('spot_name')
                        {{ $item->name }}
                    @endslot

                    @slot('spot_overview')
                        @php
                            $overview = mb_strimwidth($item->overview, 0, 150, '・・・');
                        @endphp
                        {{ $overview }}
                    @endslot
                @endcomponent
            @endforeach
        </ul>

        <a class="btn" href="{{ route('spotslist') }}">スポット一覧</a>
    </section>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap"></script>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/slick/slick-common.js') }}"></script>
@endsection
