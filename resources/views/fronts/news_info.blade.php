<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ニュース詳細</title>
</head>

<body>

    <ul>
        <li><a href="{{ route('knowledgelist') }}">入門知識一覧</a></li>
        <li><a href="{{ route('spotslist') }}">釣り場一覧</a></li>
        <li><a href="{{ route('shopslist') }}">釣具屋一覧</a></li>
    </ul>

    <h1>ニュース詳細</h1>

    <table border="1">
        <tr>
            <th>記事タイトル&nbsp;</th>
            <th>カテゴリー名&nbsp;</th>
            <th>内容&nbsp;</th>
            <th>アイキャッチ画像&nbsp;</th>
            <th>更新日時&nbsp;</th>
        </tr>
        <tr>
            <td>{{ $news->title }}</td>
            <td>{{ $news->name }}</td>
            <td>{{ $news->content }}</td>
            <td>{{ $news->eyecatch }}</td>
            <td>{{ $news->updated_at }}</td>
        </tr>
    </table>

</body>

</html>
