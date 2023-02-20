@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '魚')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>徳島で釣れる魚の新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./fishshow">HOME</a></li>
        <li><a href="./fishentry">新規登録</a></li>
    </ul>

    <form method="post" action="{{ route('fishentry') }}">
        <table class="info">
            @csrf
            <tr>
                <th width="20%"> <span>*</span> 魚の名前(普通の呼び方): </th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>魚の名前(正式名称): </th>
                <td><input type="text" name="formal_name"></td>
            </tr>
            <tr>
                <th> <span>*</span> 詳細説明: </th>
                <td>
                    <textarea name="detail" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>注意事項: </th>
                <td>
                    <textarea name="warning" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 食べ方1: </th>
                <td><input type="text" name="cooking1" required></td>
            </tr>
            <tr>
                <th>食べ方2: </th>
                <td><input type="text" name="cooking2"></td>
            </tr>
            <tr>
                <th>食べ方3: </th>
                <td><input type="text" name="cooking3"></td>
            </tr>
            <tr>
                <th>食べ方の写真1: </th>
                <td><input type="text" name="cooking_img1"></td>
            </tr>
            <tr>
                <th>食べ方の写真2: </th>
                <td><input type="text" name="cooking_img2"></td>
            </tr>
            <tr>
                <th>食べ方の写真3: </th>
                <td><input type="text" name="cooking_img3"></td>
            </tr>
            <tr>
                <th> <span>*</span> 釣り方: </th>
                <td><input type="text" name="method" required></td>
            </tr>
            <tr>
                <th>釣れる月: </th>
                <td><input type="text" name="month"></td>
            </tr>
            <tr>
                <th>難易度: </th>
                <td><input type="number" name="level"></td>
            </tr>
            <tr>
                <th>釣りスポット: </th>
                <td><input type="text" name="spot_id"></td>
            </tr>
            <tr>
                <th> <span>*</span> 魚の画像1: </th>
                <td><input type="text" name="fish_img1" required></td>
            </tr>
            <tr>
                <th>魚の画像2: </th>
                <td><input type="text" name="fish_img2"></td>
            </tr>
            <tr>
                <th>魚の画像3: </th>
                <td><input type="text" name="fish_img3"></td>
            </tr>
            <tr>
                <th>おすすめプラン: </th>
                <td><input type="text" name="plan_id"></td>
            </tr>
            <tr>
                <th>備考欄: </th>
                <td><input type="text" name="memo"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" required></td>
            </tr>
        </table>
        <input type="submit" value="送信" class="submit_btn">
    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
