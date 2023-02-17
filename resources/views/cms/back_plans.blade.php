@extends('layouts.news_ly')

@section('title', 'プラン一覧')


@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./plansshow">HOME</a></li>
        <li><a href="./plansentry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('search')

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('plansshow') }}" method="get">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索">
    </form>

@endsection

@section('content')
    <table border="1">
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>概要</th>
            <th>難易度</th>
            <th>地域ID</th>
            <th>釣りスポットID</th>
            <th>魚ID</th>
            <th>釣り方のフロー</th>
            <th>アイキャッチ</th>
            <th>サムネイル</th>
            <th>表示フラグ</th>
            <th>修正</th>
        </tr>
        @foreach ($planslist as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                <td>{{ $item->level }}</td>
                <td>{{ $item->city_id }}</td>
                <td>{{ $item->spot_id }}</td>
                <td>{{ $item->fish_id }}</td>
                <td>{{ $item->flow }}</td>
                <td>{{ $item->eye_catch }}</td>
                <td>{{ $item->thumbnail }}</td>
                <td>{{ $item->is_show }}</td>
                <td><a href="{{ route('plansedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
