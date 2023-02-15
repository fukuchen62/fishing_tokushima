{{-- レイアウトテンプレートクラスを継承する --}}
@extends('layouts.news_ly')

@section('title', 'プラン新規登録')

@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/planshow" >HOME</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/admin/planentry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('content')
    <!-- <form action="admin/newsentry" method="post"> -->
        <form method="post" action="{{ route('planentry') }}">
    <table>
        @csrf
        <!-- <tr><th>プラン名: </th><td><input type="text"
            name="name" required></td></tr> -->
        <tr><th>タイトル: </th><td><input type="text"
            name="title" required></td></tr>
        <tr><th>概要: </th><td><input type="text"
            name="overview" required></td></tr>
            <tr>
                <th>難易度：</th>
                <td>
                    <textarea name="level" id="content" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr><th>地域・市町村: </th><td><input type="text"
                name="city_id" ></td></tr>
            <tr><th>釣りスポット: </th><td><input type="boolean"
                name="spot_id" value="1"></td></tr>
            <tr><th>魚: </th><td><input type="boolean"
                name="fish_id" value="1"></td></tr>
                <tr><th>釣り方のフロー: </th><td><input type="boolean"
                name="flow" value="1"></td></tr>
                <tr><th>アイキャッチ: </th><td><input type="text"
                name="eye_catch" ></td></tr>
            <tr><th>サムネイル: </th><td><input type="boolean"
                name="thumbnail" value="1"></td></tr>
            <tr><th>表示フラグ: </th><td><input type="boolean"
                name="is_show" value="1"></td></tr>
            

        <tr><th></th><td><input type="submit"
            value="送信"></td></tr>
    </table>
    </form>
@endsection


@section('footer')
copyright 2020 tuyano.
@endsection

