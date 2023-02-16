<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ニュース一覧</title>
</head>

<body>
    <ul>
        <li><a href="{{ route('knowledgelist') }}">入門知識一覧</a></li>
        <li><a href="{{ route('spotslist') }}">釣り場一覧</a></li>
        <li><a href="{{ route('shopslist') }}">釣具屋一覧</a></li>
    </ul>
    <h1>ニュース一覧</h1>
    <a href="{{ route('news', ['name' => '更新']) }}">更新</a>
    <a href="{{ route('news', ['name' => '体験']) }}">体験</a>
    <a href="{{ route('news', ['name' => 'イベント']) }}">イベント</a>


    <table border="1">
        <tr>
            {{-- <th>ニュースID&nbsp;</th> --}}
            <th>カテゴリー名&nbsp;</th>
            <th>タイトル&nbsp;</th>
            <th>概要&nbsp;</th>
            {{-- <th>詳細内容&nbsp;</th> --}}
            <th>アイキャッチ画像&nbsp;</th>
            {{-- <th>表示フラグ&nbsp;</th> --}}
            {{-- <th>新規作成日時&nbsp;</th> --}}
            <th>修正日時&nbsp;</th>
            {{-- <th>削除日時&nbsp;</th> --}}
        </tr>
        @foreach ($news as $item)
            <tr>
                {{-- <td>{{ $item->id }}</td> --}}
                <td>{{ $item->name }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                {{-- <td>{{ $item->content }}</td> --}}
                <td>{{ $item->eyecatch }}</td>
                {{-- <td>{{ $item->is_show }}</td> --}}
                {{-- <td>{{ $item->created_at }}</td> --}}
                <td>{{ $item->updated_at }}</td>
                {{-- <td>{{ $item->deleted_at }}</td> --}}
                <td><a href="{{ route('newsinfo', ['id' => $item->id]) }}">詳細</a></td>
            </tr>
        @endforeach
    </table>
    <table border="1">
        <tr>
            {{-- <th>ニュースID&nbsp;</th> --}}
            <th>カテゴリー名&nbsp;</th>
            <th>タイトル&nbsp;</th>
            <th>概要&nbsp;</th>
            {{-- <th>詳細内容&nbsp;</th> --}}
            <th>アイキャッチ画像&nbsp;</th>
            {{-- <th>表示フラグ&nbsp;</th> --}}
            {{-- <th>新規作成日時&nbsp;</th> --}}
            <th>修正日時&nbsp;</th>
            {{-- <th>削除日時&nbsp;</th> --}}
        </tr>
        @foreach ($allnews as $item)
            <tr>
                {{-- <td>{{ $item->id }}</td> --}}
                <td>{{ $item->name }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                {{-- <td>{{ $item->content }}</td> --}}
                <td>{{ $item->eyecatch }}</td>
                {{-- <td>{{ $item->is_show }}</td> --}}
                {{-- <td>{{ $item->created_at }}</td> --}}
                <td>{{ $item->updated_at }}</td>
                {{-- <td>{{ $item->deleted_at }}</td> --}}
                <td><a href="{{ route('newsinfo', ['id' => $item->id]) }}">詳細</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
