<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <h1>入門知識一覧</h1>
    {{-- <table>
        <tr>
            @foreach($knowledges as $item)
        </tr>
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table> --}}

    <table border="1">
        <tr>
            <th>ID&nbsp;</th>
            <th>タイトル&nbsp;</th>
            <th>概要&nbsp;</th>
            <th>内容&nbsp;</th>
            <th>投稿日時&nbsp;</th>
            <th>編集日時&nbsp;</th>
        </tr>
        @foreach ($knowledges as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
