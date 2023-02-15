<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ニュース詳細</title>
</head>

<body>
    <h1>ニュース詳細</h1>

    <table border="1">
        <tr>
            <th>ニュースID&nbsp;</th>
            <th>カテゴリー名&nbsp;</th>
        </tr>
        <tr>
            <td>{{ $news->id }}</td>
            <td>{{ $news->name }}</td>
        </tr>
    </table>

</body>

</html>
