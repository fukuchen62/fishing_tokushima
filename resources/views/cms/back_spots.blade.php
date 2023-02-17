@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', 'スポット')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>スポット一覧</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./spotsshow">HOME</a></li>
    </ul>

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('spotsshow') }}" method="get" class="search">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索" class="search_btn">
    </form>

    <table class="info">
        <tr>
            <th width="5%">ID</th>
            <th width="10%">釣りスポット名</th>
            <th width="20%">概要</th>
            <th width="10%">郵便番号</th>
            <th>住所</th>
            <th width="8%">金額</th>
            <th width="100px">修正</th>
        </tr>
        @foreach ($spotslist as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->overview }}</td>
                <td>{{ $item->postal_code }}</td>
                <td>{{ $item->spot_address }}</td>
                <td>{{ $item->mony }}</td>
                <td class="edit"><a href="{{ route('spotsedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
