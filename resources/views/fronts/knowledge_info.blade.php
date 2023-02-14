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
        <li><a href="http://localhost/fishing_tokushima/public/knowledge_list">入門知識一覧</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/spots_list">釣り場一覧</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/shops_list">釣具屋一覧</a></li>
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
