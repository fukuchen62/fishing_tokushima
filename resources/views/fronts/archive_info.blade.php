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
    <table>
        <tr>
            <th>ニュース一覧</th>
        </tr>
        @foreach($news as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
