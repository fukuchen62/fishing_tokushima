@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '釣具屋')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>ショップ一覧</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./shopsshow">HOME</a></li>
    </ul>

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('shopsshow') }}" method="get" class="search">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索" class="search_btn">
    </form>

    <table class="info">
        <tr>
            <th width="5%">ID</th>
            <th width="20%">店名</th>
            <th>住所</th>
            <th width="15%">電話番号</th>
            <th width="100px">修正</th>
        </tr>
        @foreach ($shopslist as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->tel }}</td>
                <td class="edit"><a href="{{ route('shopsedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
