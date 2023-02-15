<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>{{ $msg1 }}</p>
<p>{{ $msg2 }}</p>
<p>{{ $msg3 }}</p>



    <form action="{{ route('mypage')}}" method="post">
        <table>
            @csrf

            {{-- @if ($errors->has('msg'))
            <tr>
                <th>ERROR</th>
                <td>{{ $errors -> fist('msg') }}</td>
            </tr>
            @endif --}}

            <tr>
                <th>MESSAGE:</th>
                <td><input type="submit" name="fish_id" value="1" id=""></td>
                <td><input type="submit" name="spot_id" value="2" id=""></td>
                <td><input type="submit" name="plan_id" value="3" id=""></td>

                {{-- <td><input type="submit" value="送信"></td> --}}
            </tr>
        </table>


    </form>

</body>
</html>
