{{-- レイアウトテンプレートクラスを継承する --}}
@extends('layouts.news_ly')

@section('title', '釣れる魚の新規登録')

@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./fishshow">HOME</a></li>
        <li><a href="./fishentry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('content')
    {{-- <form action="fish_Entry" method="post"> --}}
    <form method="post" action="{{ route('fishentry') }}">
        <table>
            @csrf
            <tr>
                <th>魚の名前(普通の呼び方): </th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>魚の名前(正式名称): </th>
                <td><input type="text" name="formal_name"></td>
            </tr>
            <tr>
                <th>詳細説明: </th>
                <td><input type="text" name="detail" required></td>
            </tr>
            <tr>
                <th>注意事項: </th>
                <td><input type="text" name="warning" required></td>
            </tr>
            <tr>
                <th>食べ方1: </th>
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
                <th>釣り方: </th>
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
                <th>魚の画像1: </th>
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
                <td><input type="text" name="plan_id" required></td>
            </tr>
            <tr>
                <th>備考欄: </th>
                <td><input type="text" name="memo"></td>
            </tr>
            <tr>
                <th>表示フラグ: </th>
                <td><input type="boolean" name="is_show" required></td>
            </tr>

            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
