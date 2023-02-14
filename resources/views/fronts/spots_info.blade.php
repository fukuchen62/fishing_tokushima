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

    <h1>singleArea</h1>
    <table border="1">
        <tr>
            <th>住所&nbsp;</th>
            <th>駐車場&nbsp;</th>
            <th>釣り方&nbsp;</th>
            <th>周辺施設&nbsp;</th>
            <th>近くの病院&nbsp;</th>
            <th>避難場所&nbsp;</th>
        </tr>
        <tr>
            <td>{{ $spots->spot_address }}</td>

            <td>ミニッツパーク</td>
            <td>サビキ釣り</td>
            <td>ファミマ</td>
            <td>どっかの病院</td>
            <td>高台</td>
        </tr>


    </table>
</body>

</html>
