<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>体験プランの一覧</h1>

    <table>
        <tr>
            <th>アイキャッチ</th>
            <th>体験プラン</th>
            <th>概要</th>
            <th>リンク</th>
        </tr>
        @foreach ($plans as $item )
        <tr>
            <td>{{ $item -> eye_catch }}</td>
            <td>{{ $item -> title }}</td>
            <td>{{ $item -> overview }}</td>
            <td><a href="./single_plan?id={{ $item -> id }}">リンク</a></td>
        </tr>
        @endforeach
    </table>

</body>

</html>
