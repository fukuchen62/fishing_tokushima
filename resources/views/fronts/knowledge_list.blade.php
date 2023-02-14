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
        <li><a href="http://localhost/fishing_tokushima/public/knowledge/knowledgelist">入門知識一覧</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/spot/spotlist">釣り場一覧</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/shop/shoplist">釣具屋一覧</a></li>
    </ul>

    <h1>入門知識一覧</h1>

    <table border="1">
        <tr>
            <th>ID&nbsp;</th>
            <th>タイトル&nbsp;</th>
            <th>概要&nbsp;</th>
            <th>内容&nbsp;</th>
            <th>投稿日時&nbsp;</th>
            <th>編集日時&nbsp;</th>
        </tr>
        @foreach ($knowledges as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td><a href="./knowledgeinfo?id={{ $item->id }}">詳細</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
