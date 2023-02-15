<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ニュース一覧</title>
</head>

<body>
    <h1>ニュース一覧</h1>

    <table border="1">
        <tr>
            <th>ニュースID&nbsp;</th>
            <th>カテゴリー名&nbsp;</th>
            <th>タイトル&nbsp;</th>
            <th>概要&nbsp;</th>
            <th>詳細内容&nbsp;</th>
            <th>アイキャッチ画像&nbsp;</th>
            <th>表示フラグ&nbsp;</th>
            <th>新規作成日時&nbsp;</th>
            <th>修正日時&nbsp;</th>
            <th>削除日時&nbsp;</th>
        </tr>
        @foreach ($news as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->eyecatch }}</td>
                <td>{{ $item->is_show }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>{{ $item->deleted_at }}</td>
                <td><a href="{{ route('newsinfo', ['id' => $item->id]) }}">詳細</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
