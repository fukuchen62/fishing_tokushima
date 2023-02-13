<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <h1>記事詳細</h1>
    <table border="1">
        <tr>
            <th>タイトル&nbsp;</th>
            <th>内容&nbsp;</th>
            {{-- <th>釣り方&nbsp;</th>
            <th>周辺施設&nbsp;</th>
            <th>近くの病院&nbsp;</th>
            <th>避難場所&nbsp;</th> --}}
        </tr>
        @foreach ($knowledges as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->content }}</td>
                

                {{-- <td><a href="board/edit?id={{ $item->id }}">編集</a></td> --}}
            </tr>
        @endforeach
    </table>
</body>
</html>
