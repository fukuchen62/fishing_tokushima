@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', 'ニュース')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>ニュースの新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./newsshow">HOME</a></li>
        <li><a href="./newsentry">新規登録</a></li>
    </ul>

    <form method="post" action="{{ route('newsentry') }}">
        <table class="info">
            @csrf
            <tr>
                <th width="15%">カテゴリー名: </th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>タイトル: </th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>詳細内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ画像: </th>
                <td><input type="text" name="eyecatch"></td>
            </tr>
            <tr>
                <th>表示フラグ: </th>
                <td><input type="boolean" name="is_show" value="1"></td>
            </tr>
        </table>
        <input type="submit" value="送信" class="submit_btn">
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
