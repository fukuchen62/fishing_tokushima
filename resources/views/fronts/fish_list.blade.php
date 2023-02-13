<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>徳島で釣れる魚一覧</title>
</head>

<body>
    <h1>徳島で釣れる魚一覧</h1>
    <table>
        <tr>
            <th>魚一覧</th>
        </tr>
        @foreach($fishes as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>