<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>{{ $msg }}</p>


    <form action="{{ route('mypage')}}" method="post">
        <table>
            @csrf

            @if ($errors->has('msg'))
            <tr>
                <th>ERROR</th>
                <td>{{ $errors -> fist('msg') }}</td>
            </tr>
            @endif

            <tr>
                <th>MESSAGE:</th>
                <td><input type="text" name="msg" id=""></td>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>


    </form>

</body>
</html>
