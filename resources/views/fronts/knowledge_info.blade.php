<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>

<body>
    <ul>
        <li><a href="{{ route('knowledgelist') }}">入門知識一覧</a></li>
        <li><a href="{{ route('spotslist') }}">釣り場一覧</a></li>
        <li><a href="{{ route('shopslist') }}">釣具屋一覧</a></li>
    </ul>
    <h1>記事詳細</h1>
    <table border="1">
        <tr>
            <th>タイトル&nbsp;</th>
            <th>内容&nbsp;</th>
        </tr>
        <tr>
            <td>{{ $knowledges->title }}</td>
            <td>{{ $knowledges->content }}</td>
        </tr>
    </table>
</body>

</html>
