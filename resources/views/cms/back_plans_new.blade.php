@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '体験プラン')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>体験プランの新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./plansshow">HOME</a></li>
        <li><a href="./plansentry">新規登録</a></li>
    </ul>

    <form method="post" action="{{ route('plansentry') }}">
        <table class="info new_info">
            @csrf
            <tr>
                <th width="15%"> <span>*</span> タイトル: </th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 概要：</th>
                <td>
                    <textarea name="overview" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 難易度: </th>
                <td><input type="number" name="level" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 地域ID: </th>
                <td><input type="number" name="city_id" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 釣りスポットID: </th>
                <td><input type="number" name="spot_id" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 魚ID: </th>
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
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show"></td>
            </tr>
        </table>
        <input type="submit" value="送信" class="submit_btn">
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
