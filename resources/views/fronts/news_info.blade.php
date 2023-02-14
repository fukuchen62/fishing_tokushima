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

    <table>
        <tr>
            <th>ニュース詳細</th>
        </tr>
        @foreach ($news as $item )
        <tr>
            <td>{{ $item ->getData() }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
