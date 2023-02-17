{{-- レイアウトテンプレートクラスを継承する --}}
@extends('layouts.news_ly')

@section('title', '基礎知識の新規登録画面')

@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./knowledgeshow">HOME</a></li>
        <li><a href="./knowledgeentry">新規登録</a></li>

    </ul>
@endsection

@section('content')
    <form method="post" action="{{ route('knowledgeentry') }}">
        <table>
            @csrf
            <tr>
                <th>カテゴリーID: </th>
                <td><input type="number" name="category_id" required></td>
            </tr>
            <tr>
                <th>タイトル: </th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td><input type="text" name="overview" required></td>
            </tr>
            <tr>
                <th>記事の内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th>サムネ画像：</th>
                <td>
                    <input type="text" name="thumbnail" value="">
                </td>
            </tr>
            <tr>
                <th>表示フラグ：</th>
                <td>
                    <input type="text" name="is_show" value="1"required>
                </td>
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
