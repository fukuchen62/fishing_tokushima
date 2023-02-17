{{-- レイアウトテンプレートクラスを継承する --}}
@extends('layouts.news_ly')

@section('title', 'プラン新規登録')

@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./plansshow">HOME</a></li>
        <li><a href="./plansentry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('content')

    <form method="post" action="{{ route('plansentry') }}">
        <table>
            @csrf
            <tr>
                <th>タイトル: </th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th>難易度: </th>
                <td><input type="number" name="level" required></td>
            </tr>
            <tr>
                <th>概要：</th>
                <td>
                    <textarea name="overview" id="overview" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>地域・市町村: </th>
                <td><input type="number" name="city_id" required></td>
            </tr>
            <tr>
                <th>釣りスポット: </th>
                <td><input type="number" name="spot_id" required></td>
            </tr>
            <tr>
                <th>魚: </th>
                <td><input type="number" name="fish_id" required></td>
            </tr>
            <tr>
                <th>釣り方のフロー：</th>
                <td>
                    <textarea name="flow" id="flow" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ: </th>
                <td><input type="text" name="eye_catch"></td>
            </tr>
            <tr>
                <th>サムネイル: </th>
                <td><input type="text" name="thumbnail"></td>
            </tr>
            <tr>
                <th>表示フラグ: </th>
                <td><input type="boolean" name="is_show"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
