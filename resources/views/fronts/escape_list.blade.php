<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>避難場所一覧</title>
</head>

<body>
    <h1>避難場所一覧</h1>
    <table>
        <tr>
            <th>避難場所一覧</th>
        </tr>
        @foreach($evacuations as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
