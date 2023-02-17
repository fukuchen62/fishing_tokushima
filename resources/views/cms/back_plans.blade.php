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
            <th>修正</th>
            <th>ID</th>
            <th>カテゴリー名前</th>
            <th>タイトル</th>
        </tr>
        @foreach ($planslist as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->title }}</td>
                <td><a href="{{ route('plansedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection