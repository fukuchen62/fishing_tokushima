<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <h1>archiveSpot</h1>
    <table>
        <tr>
            @foreach($facilitys as $item)
        </tr>
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
