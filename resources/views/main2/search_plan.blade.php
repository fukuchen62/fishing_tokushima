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
            <th>id</th>
        </tr>
        @foreach ($items as $item )
        <tr>
            <td>{{ $item ->getData() }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
