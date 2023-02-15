@extends('layouts.news_ly')

@section('title', 'ショップ一覧')


@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="http://localhost/fishing_tokushima/public/admin/shopsshow">HOME</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('search')

    {{-- 検索条件入力フォーム --}}
    <form action="search" method="get">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索">
    </form>

@endsection
@section('content')
    <table border="1">
        <tr>
            <th>ID&nbsp;</th>
            <th>店名&nbsp;</th>
            <th>地域ID&nbsp;</th>
            <th>郵便番号&nbsp;</th>
            <th>住所&nbsp;</th>
            <th>iframe&nbsp;</th>
            <th>経度&nbsp;</th>
            <th>緯度&nbsp;</th>
            <th>電話番号&nbsp;</th>
            <th>fax&nbsp;</th>
            <th>email&nbsp;</th>
            <th>url&nbsp;</th>
            <th>営業日&nbsp;</th>
            <th>営業内容&nbsp;</th>
            <th>PR&nbsp;</th>
            <th>画像&nbsp;</th>
            <th>備考&nbsp;</th>
            <th>表示フラグ&nbsp;</th>
            <th>修正&nbsp;</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->city_id }}</td>
                <td>{{ $item->postal_code }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->iframe }}</td>
                <td>{{ $item->longitude }}</td>
                <td>{{ $item->latitude }}</td>
                <td>{{ $item->tel }}</td>
                <td>{{ $item->fax }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->url }}</td>
                <td>{{ $item->service_day }}</td>
                <td>{{ $item->service }}</td>
                <td>{{ $item->pr }}</td>
                <td>{{ $item->img }}</td>
                <td>{{ $item->memo }}</td>
                <td>{{ $item->is_show }}</td>
                <td><a href="{{ route('shopsedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
