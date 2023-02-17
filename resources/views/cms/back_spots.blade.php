@extends('layouts.news_ly')

@section('title', 'スポット一覧')


@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./spotsshow">HOME</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('search')

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('spotsshow') }}" method="get">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索">
    </form>

@endsection
@section('content')
    <table border="1">
        <tr>
            <th>ID&nbsp;</th>
            <th>釣りスポット名&nbsp;</th>
            <th>概要&nbsp;</th>
            <th>地域ID&nbsp;</th>
            <th>郵便番号&nbsp;</th>
            <th>住所&nbsp;</th>
            <th>iframe&nbsp;</th>
            <th>経度&nbsp;</th>
            <th>緯度&nbsp;</th>
            <th>トイレ&nbsp;</th>
            <th>トイレ経度&nbsp;</th>
            <th>トイレ緯度&nbsp;</th>
            <th>画像1&nbsp;</th>
            <th>画像2&nbsp;</th>
            <th>画像3&nbsp;</th>
            <th>画像4&nbsp;</th>
            <th>画像5&nbsp;</th>
            <th>魚ID&nbsp;</th>
            <th>金額&nbsp;</th>
            <th>BBQ&nbsp;</th>
            <th>ショップID&nbsp;</th>
            <th>体験プランID&nbsp;</th>
            <th>避難場所ID&nbsp;</th>
            <th>駐車場ID&nbsp;</th>
            <th>病院ID&nbsp;</th>
            <th>スーパーマーケットID&nbsp;</th>
            <th>飲食店ID&nbsp;</th>
            <th>その他ID&nbsp;</th>
            <th>表示フラグ&nbsp;</th>
            <th>修正&nbsp;</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->overview }}</td>
                <td>{{ $item->city_id }}</td>
                <td>{{ $item->postal_code }}</td>
                <td>{{ $item->spot_address }}</td>
                <td>{{ $item->iframe_url }}</td>
                <td>{{ $item->spot_longitude }}</td>
                <td>{{ $item->spot_latitude }}</td>
                <td>{{ $item->toilet }}</td>
                <td>{{ $item->toilet_longitude }}</td>
                <td>{{ $item->toilet_latitude }}</td>
                <td>{{ $item->img1 }}</td>
                <td>{{ $item->img2 }}</td>
                <td>{{ $item->img3 }}</td>
                <td>{{ $item->img4 }}</td>
                <td>{{ $item->img5 }}</td>
                <td>{{ $item->fish_id }}</td>
                <td>{{ $item->mony }}</td>
                <td>{{ $item->bbq }}</td>
                <td>{{ $item->shop_id }}</td>
                <td>{{ $item->plan_id }}</td>
                <td>{{ $item->evacuation_id }}</td>
                <td>{{ $item->parking_id }}</td>
                <td>{{ $item->hospital_id }}</td>
                <td>{{ $item->supermarket_id }}</td>
                <td>{{ $item->restaurant_id }}</td>
                <td>{{ $item->other_id }}</td>
                <td>{{ $item->is_show }}</td>
                <td><a href="{{ route('spotsedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
