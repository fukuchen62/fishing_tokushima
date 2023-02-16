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

        <table border="1">
            <tr>

                <th>市町村ID</th>
                <th>地域</th>
                <th>避難場所名</th>
                <th>住所</th>
                <th>経度</th>
                <th>緯度</th>

            </tr>
            @foreach($evacuations as $item)
                <tr>

                    <td>{{ $item->city_id }}</td>
                    <td>
                        @if ($item-> city != null)
                        {{ $item->city->getData() }}
                        @endif
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->longitude }}</td>
                    <td>{{ $item->latitude }}</td>

                </tr>
            @endforeach
        </table>

</body>

</html>
