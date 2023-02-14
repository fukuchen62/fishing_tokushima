{{-- レイアウトテンプレートクラスを継承する --}}
@extends('layouts.news_ly')

@section('title', 'ニュース新規登録')

@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/newsshow" >HOME</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('content')
    <!-- <form action="admin/newsentry" method="post"> -->
        <form method="post" action="{{ route('newsentry') }}">
    <table>
        @csrf
        <tr><th>カテゴリー名: </th><td><input type="text"
            name="name" required></td></tr>
        <tr><th>タイトル: </th><td><input type="text"
            name="title" required></td></tr>
        <tr><th>概要: </th><td><input type="text"
            name="overview" required></td></tr>
            <tr>
                <th>詳細内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr><th>アイキャッチ画像: </th><td><input type="text"
                name="eyecatch" ></td></tr>
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

