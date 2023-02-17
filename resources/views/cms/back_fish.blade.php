@extends('layouts.news_ly')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '徳島で釣れる魚一覧')

@section('login_name', 'QLIP')

@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./fishshow">HOME</a></li>
        <li><a href="./fishentry">新規登録</a></li>

    </ul>
@endsection

@section('search')

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('fishshow') }}" method="get">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索">
    </form>

@endsection

@section('content')
    <table border="1">
        <tr>
            <th>ID</th>
            <th>釣れる魚一覧</th>
            <th>魚の名前(正式名称)</th>
            <th>修正</th>
        </tr>
        @foreach ($fishlist as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->formal_name }}</td>
                <td><a href="{{ route('fishedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
