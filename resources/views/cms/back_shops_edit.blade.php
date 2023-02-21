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
        <table class="info edit_info">
            @csrf
            <input type="hidden" name="id" value="{{ $shop->id }}">
            <tr>
                <th width="15%"> <span>*</span> 店名: </th>
                <td><input type="text" name="name" value="{{ $shop->name }}" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 地域ID: </th>
                <td><input type="text" name="city_id" value="{{ $shop->city_id }}" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 郵便番号: </th>
                <td><input type="text" name="postal_code" value="{{ $shop->postal_code }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 住所:</th>
                <td>
                    <input type="text" name="address" value="{{ $shop->address }}" required>
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
                <th> <span>*</span> 電話番号: </th>
                <td><input type="text" name="tel" value="{{ $shop->tel }}" required></td>
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
                <th> <span>*</span> 営業日: </th>
                <td><input type="text" name="service_day" value="{{ $shop->service_day }}" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 営業内容:</th>
                <td>
                    <textarea name="service" cols="50" rows="5" required> {{ $shop->service }} </textarea>
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
                <th> <span>*</span> 表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $shop->is_show }}" required>
                </td>
            </tr>
        </table>

        <div class="submit">
            @php
                $title = $shop->name;
            @endphp
            <input type="submit"value="修正" class="submit_btn" onclick="return saveComfirm('{{ $title }}')">
        </div>

    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
