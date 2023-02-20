@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', 'スポット')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>スポットの編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./spotsshow">HOME</a></li>
    </ul>

    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('spotsedit') }}">
        <table class="info">
            @csrf
            <input type="hidden" name="id" value="{{ $spot->id }}">
            <tr>
                <th width="15%"> <span>*</span> 釣りスポット名: </th>
                <td><input type="text" name="name" value="{{ $spot->name }}" required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5"> {{ $spot->overview }} </textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 地域ID: </th>
                <td><input type="text" name="city_id" value="{{ $spot->city_id }}" required></td>
            </tr>
            <tr>
                <th>郵便番号: </th>
                <td><input type="text" name="postal_code" value="{{ $spot->postal_code }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 住所:</th>
                <td>
                    <input type="text" name="spot_address" value="{{ $spot->spot_address }}" required>
                </td>
            </tr>
            <tr>
                <th>アイフレーム: </th>
                <td><input type="text" name="iframe_url" value="{{ $spot->iframe_url }}"></td>
            </tr>
            <tr>
                <th>経度: </th>
                <td><input type="text" name="spot_longitude" value="{{ $spot->spot_longitude }}"></td>
            </tr>
            <tr>
                <th>緯度: </th>
                <td><input type="text" name="spot_latitude" value="{{ $spot->spot_latitude }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> トイレ: </th>
                <td><input type="text" name="toilet" value="{{ $spot->toilet }}" required></td>
            </tr>
            <tr>
                <th>トイレの経度: </th>
                <td><input type="text" name="toilet_longitude" value="{{ $spot->toilet_longitude }}"></td>
            </tr>
            <tr>
                <th>トイレの緯度: </th>
                <td><input type="text" name="toilet_latitude" value="{{ $spot->toilet_latitude }}"></td>
            </tr>
            <tr>
                <th>画像1: </th>
                <td><input type="text" name="img1" value="{{ $spot->img1 }}"></td>
            </tr>
            <tr>
                <th>画像2: </th>
                <td><input type="text" name="img2" value="{{ $spot->img2 }}"></td>
            </tr>
            <tr>
                <th>画像3:</th>
                <td>
                    <input type="text" name="img3" value="{{ $spot->img4 }}">
                </td>
            </tr>
            <tr>
                <th>画像4:</th>
                <td>
                    <input type="boolean" name="img4" value="{{ $spot->img4 }}">
                </td>
            </tr>
            <tr>
                <th>画像5: </th>
                <td><input type="text" name="img5" value="{{ $spot->img5 }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 魚ID: </th>
                <td><input type="text" name="fish_id" value="{{ $spot->fish_id }}" required></td>
            </tr>
            <tr>
                <th>金額: </th>
                <td><input type="text" name="mony" value="{{ $spot->mony }}"></td>
            </tr>
            <tr>
                <th>BBQ: </th>
                <td><input type="text" name="bbq" value="{{ $spot->bbq }}"></td>
            </tr>
            <tr>
                <th>ショップID:</th>
                <td>
                    <input type="boolean" name="shop_id" value="{{ $spot->shop_id }}">
                </td>
            </tr>
            <tr>
                <th>体験プランID: </th>
                <td><input type="text" name="plan_id" value="{{ $spot->plan_id }}"></td>
            </tr>
            <tr>
                <th>避難場所ID: </th>
                <td><input type="text" name="evacuation_id" value="{{ $spot->evacuation_id }}"></td>
            </tr>
            <tr>
                <th>駐車場ID: </th>
                <td><input type="text" name="parking_id" value="{{ $spot->parking_id }}"></td>
            </tr>
            <tr>
                <th>病院ID:</th>
                <td>
                    <input type="text" name="hospital_id" value="{{ $spot->hospital_id }}">
                </td>
            </tr>
            <tr>
                <th>スーパーマーケットID:</th>
                <td>
                    <input type="boolean" name="supermarket_id" value="{{ $spot->supermarket_id }}">
                </td>
            </tr>
            <tr>
                <th>飲食店ID: </th>
                <td><input type="text" name="restaurant_id" value="{{ $spot->restaurant_id }}"></td>
            </tr>
            <tr>
                <th>その他ID: </th>
                <td><input type="text" name="other_id" value="{{ $spot->other_id }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $spot->is_show }}" required>
                </td>
            </tr>
        </table>
        <input type="submit" value="修正" class="submit_btn">
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
