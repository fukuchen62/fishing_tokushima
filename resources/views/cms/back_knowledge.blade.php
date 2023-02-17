@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>入門知識一覧</h3>

    <ul class="menubar">
        <li><a href="./knowledgeshow">HOME</a></li>
        <li><a href="./knowledgeentry">新規登録</a></li>
    </ul>

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('knowledgeshow') }}" method="get" class="search">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索">
    </form>

    <table class="info">
        <tr>
            <th width="5%">ID</th>
            <th width="8%">カテゴリーID</th>
            <th width="8%">タイトル</th>
            <th>概要</th>
            <th width="5%">修正</th>
        </tr>
        @foreach ($knowledgelist as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->category_id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                <td class="edit_btn"><a href="{{ route('knowledgeedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
