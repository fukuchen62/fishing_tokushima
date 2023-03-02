@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', 'スポット')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>スポットの新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./spotsshow">HOME</a></li>
        <li><a href="./spotsentry">新規登録</a></li>
    </ul>

    <form method="post" action="{{ route('spotsenty') }}">
        <table class="info new_info">
            @csrf
            <input type="hidden" name="id" value="{{ $spot->id }}">
            <tr>
                <th width="15%"> <span>*</span> 釣りスポット名: </th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5"> </textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 地域ID: </th>
                <td><input type="text" name="city_id"  required></td>
            </tr>
            <tr>
                <th>郵便番号: </th>
                <td><input type="text" name="postal_code" ></td>
            </tr>
            <tr>
                <th> <span>*</span> 住所:</th>
                <td>
                    <input type="text" name="spot_address"  required>
                </td>
            </tr>
            <tr>
                <th>アイフレーム: </th>
                <td><input type="text" name="iframe_url" ></td>
            </tr>
            <tr>
                <th>経度: </th>
                <td><input type="text" name="spot_longitude" ></td>
            </tr>
            <tr>
                <th>緯度: </th>
                <td><input type="text" name="spot_latitude" ></td>
            </tr>
            <tr>
                <th> <span>*</span> トイレ: </th>
                <td><input type="text" name="toilet" required></td>
            </tr>
            <tr>
                <th>トイレの経度: </th>
                <td><input type="text" name="toilet_longitude"></td>
            </tr>
            <tr>
                <th>トイレの緯度: </th>
                <td><input type="text" name="toilet_latitude" ></td>
            </tr>
            <tr>
                <th>画像1: </th>
                <td><input type="text" name="img1" ></td>
            </tr>
            <tr>
                <th>画像2: </th>
                <td><input type="text" name="img2" ></td>
            </tr>
            <tr>
                <th>画像3:</th>
                <td>
                    <input type="text" name="img3" >
                </td>
            </tr>
            <tr>
                <th>画像4:</th>
                <td>
                    <input type="boolean" name="img4" >
                </td>
            </tr>
            <tr>
                <th>画像5: </th>
                <td><input type="text" name="img5" ></td>
            </tr>
            <tr>
                <th> <span>*</span> 魚ID: </th>
                <td><input type="text" name="fish_id" required></td>
            </tr>
            <tr>
                <th>金額: </th>
                <td><input type="text" name="mony" ></td>
            </tr>
            <tr>
                <th>BBQ: </th>
                <td><input type="text" name="bbq" ></td>
            </tr>
            <tr>
                <th> <span>*</span> ショップID:</th>
                <td>
                    <input type="boolean" name="shop_id"  required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 体験プランID: </th>
                <td><input type="text" name="plan_id"  required></td>
            </tr>
            <tr>
                <th> <span>*</span> 避難場所ID: </th>
                <td><input type="text" name="evacuation_id" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 駐車場ID: </th>
                <td><input type="text" name="parking_id"  required></td>
            </tr>
            <tr>
                <th> <span>*</span> 病院ID:</th>
                <td>
                    <input type="text" name="hospital_id"  required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> スーパーマーケットID:</th>
                <td>
                    <input type="boolean" name="supermarket_id"  required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 飲食店ID: </th>
                <td><input type="text" name="restaurant_id"  required></td>
            </tr>
            <tr>
                <th> <span>*</span> その他ID: </th>
                <td><input type="text" name="other_id"  required></td>
            </tr>

            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" required></td>
            </tr>
        </table>

        <div class="submit">
            <input type="submit" value="登録" class="submit_btn" onclick="return saveComfirm('スポット')">
        </div>

    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
