<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <th>魚の名前(普通の呼び方)</th>
            <th>魚の名前(正式名称)</th>
            <th>魚の画像1</th>
            <th>詳細説明</th>
            <th>難易度</th>
            <th>釣れる月</th>
            <th>釣れる場所</th>
            <th>釣り方</th>
            <th>食べ方1</th>
            <th>食べ方2</th>
            <th>食べ方3</th>
            <th>食べ方の写真1</th>
            <th>注意事項</th>
        </tr>
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->formal_name }}</td>
            <td>{{ $item->fish_img1 }}</td>
            <td>{{ $item->detail }}</td>
            <td><?php echo $item->getLevel(); ?></td>
            <td>{{ $item->getMonth() }}</td>
            <td>
                @foreach ($spots as $spot)
                    {{ $spot->name }},
                @endforeach
            </td>
            <td>{{ $item->method }}</td>
            <td>{{ $item->cooking1 }}</td>
            <td>{{ $item->cooking2 }}</td>
            <td>{{ $item->cooking3 }}</td>
            <td>{{ $item->cooking_img1 }}</td>
            <td>{{ $item->warning }}</td>
        </tr>
    </table>

    <ul>
        @foreach ($fishlist as $fish)
            <li>{{ $fish->name }}</li>
        @endforeach
    </ul>


</body>

</html>
