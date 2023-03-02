@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '釣具屋')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>ショップの新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./shopsshow">HOME</a></li>
        <li><a href="./shopsentry">新規登録</a></li>
    </ul>

    <form method="post" action="{{ route('shopsentry') }}">
        <table class="info new_info">
            @csrf
            <tr>
                <th width="20%"> <span>*</span> 店名: </th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 地域ID: </th>
                <td><input type="text" name="city_id" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 郵便番号: </th>
                <td><input type="text" name="postal_code"></td>
            </tr>
            <tr>
                <th> <span>*</span> 住所:</th>
                <td>
                    <input type="text" name="address" required>
                </td>
            </tr>
            <tr>
                <th>iframe:</th>
                <td>
                    <input type="text" name="iframe">
                </td>
            </tr>
            <tr>
                <th>経度: </th>
                <td><input type="text" name="longitude"></td>
            </tr>
            <tr>
                <th>緯度: </th>
                <td><input type="text" name="latitude"></td>
            </tr>
            <tr>
                <th> <span>*</span> 電話番号: </th>
                <td><input type="text" name="tel" required></td>
            </tr>
            <tr>
                <th>fax:</th>
                <td>
                    <input type="text" name="fax">
                </td>
            </tr>
            <tr>
                <th>email: </th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>url: </th>
                <td><input type="text" name="url"></td>
            </tr>
            <tr>
                <th> <span>*</span> 営業日: </th>
                <td><input type="text" name="service_day" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 営業内容:</th>
                <td>
                    <textarea name="service" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>PR:</th>
                <td>
                    <textarea name="pr" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th>画像: </th>
                <td><input type="text" name="img"></td>
            </tr>
            <tr>
                <th>備考: </th>
                <td><input type="text" name="memo"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" required>
                </td>
            </tr>
        </table>

        <div class="submit">
            <input type="submit"value="登録" class="submit_btn" onclick="return saveComfirm('ショップ')">
        </div>

    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
