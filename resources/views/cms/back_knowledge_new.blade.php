@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '入門知識')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>基礎知識の新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./knowledgeshow">HOME</a></li>
        <li><a href="./knowledgeentry">新規登録</a></li>
    </ul>

    <form method="post" action="{{ route('knowledgeentry') }}">
        <table class="info new_info">
            @csrf
            <tr>
                <th width="15%"> <span>*</span> カテゴリーID: </th>
                <td><input type="number" name="category_id" required></td>
            </tr>
            <tr>
                <th> <span>*</span> タイトル: </th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th>記事の内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> サムネ画像：</th>
                <td>
                    <input type="text" name="thumbnail" value="" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ：</th>
                <td>
                    <input type="text" name="is_show" value="1"required>
                </td>
            </tr>
        </table>

        <div class="submit">
            <input type="submit" value="登録" class="submit_btn" onclick="return saveComfirm('入門知識')">
        </div>
    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
