@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '釣具屋')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>ショップの編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./shopsshow">HOME</a></li>
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

    <form method="post" action="{{ route('shopsedit') }}">
        <table class="info">
            @csrf
            <input type="hidden" name="id" value="{{ $shop->id }}">
            <tr>
                <th width="15%">店名: </th>
                <td><input type="text" name="name" value="{{ $shop->name }}"></td>
            </tr>
            <tr>
                <th>地域ID: </th>
                <td><input type="text" name="city_id" value="{{ $shop->city_id }}"></td>
            </tr>
            <tr>
                <th>郵便番号: </th>
                <td><input type="text" name="postal_code" value="{{ $shop->postal_code }}"></td>
            </tr>
            <tr>
                <th>住所:</th>
                <td>
                    <input type="text" name="address" value="{{ $shop->address }}">
                </td>
            </tr>
            <tr>
                <th>iframe:</th>
                <td>
                    <input type="text" name="iframe" value="{{ $shop->iframe }}">
                </td>
            </tr>
            <tr>
                <th>経度: </th>
                <td><input type="text" name="longitude" value="{{ $shop->longitude }}"></td>
            </tr>
            <tr>
                <th>緯度: </th>
                <td><input type="text" name="latitude" value="{{ $shop->latitude }}"></td>
            </tr>
            <tr>
                <th>電話番号: </th>
                <td><input type="text" name="tel" value="{{ $shop->tel }}"></td>
            </tr>
            <tr>
                <th>fax:</th>
                <td>
                    <input type="text" name="fax" value="{{ $shop->fax }}">
                </td>
            </tr>
            <tr>
                <th>email: </th>
                <td><input type="text" name="email" value="{{ $shop->email }}"></td>
            </tr>
            <tr>
                <th>url: </th>
                <td><input type="text" name="url" value="{{ $shop->url }}"></td>
            </tr>
            <tr>
                <th>営業日: </th>
                <td><input type="text" name="service_day" value="{{ $shop->service_day }}"></td>
            </tr>
            <tr>
                <th>営業内容:</th>
                <td>
                    <textarea name="service" cols="50" rows="5"> {{ $shop->service }} </textarea>
                </td>
            </tr>
            <tr>
                <th>PR:</th>
                <td>
                    <textarea name="pr" cols="50" rows="5"> {{ $shop->pr }} </textarea>
                </td>
            </tr>
            <tr>
                <th>画像: </th>
                <td><input type="text" name="img" value="{{ $shop->img }}"></td>
            </tr>
            <tr>
                <th>備考: </th>
                <td><input type="text" name="memo" value="{{ $shop->memo }}"></td>
            </tr>
            <tr>
                <th>表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $shop->is_show }}">
                </td>
            </tr>
        </table>
        <input type="submit" value="修正" class="submit_btn">
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
