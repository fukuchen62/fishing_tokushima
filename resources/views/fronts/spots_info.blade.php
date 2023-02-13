<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
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
        @foreach ($spots as $item)
            <tr>
                <td>{{ $item->spot_address }}</td>
                
                <td>ミニッツパーク</td>
                <td>サビキ釣り</td>
                <td>ファミマ</td>
                <td>どっかの病院</td>
                <td>高台</td>

                {{-- <td><a href="board/edit?id={{ $item->id }}">編集</a></td> --}}
            </tr>
        @endforeach
    </table>
</body>
</html>
