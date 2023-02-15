<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <form action="./single_plan" method="post">
        @csrf
        <input type="text" name="input" value="{{ $input }}">
        <input type="submit" value="find">
    </form> --}}

    <h2>内容</h2>
    @if (isset($item))
        <table>
            <tr>
                <th>title</th>
                <th>thumbnail</th>
                <th>overview</th>
                <th>level</th>
                {{-- <th>level2</th> --}}
                <th>スポット名</th>
                <th>釣り方</th>
                <th>釣れる月</th>
                <th>flow</th>
            </tr>
            <tr>
                <td>{{ $item -> title }}</td>
                <td>{{ $item -> thumbnail }}</td>
                <td>{{ $item -> overview }}</td>
                <td><?php echo $item -> getLevel() ?></td>
                {{-- <td>{{ $item -> getLevel() }}</td> --}}
                <td>{{ $item -> spot -> name }}</td>
                <td>{{ $item -> fish -> method }}</td>
                <td>{{ $item -> fish -> getMonth() }}</td>
                <td>{{ $item -> flow }}</td>
            </tr>
        </table>
    @endif

    <h2>関連プラン１</h2>
    @if (isset($connection1))
            <table>
            <tr>
                <th>eye_catch</th>
                <th>title</th>
                <th>overview</th>
            </tr>
            <tr>
                <td>{{ $connection1 -> eye_catch }}</td>
                <td>{{ $connection1 -> title }}</td>
                <td>{{ $connection1 -> overview }}</td>
            </tr>
        </table>
    @endif

    <h2>関連プラン２</h2>
    @if (isset($connection2))
            <table>
            <tr>
                <th>eye_catch</th>
                <th>title</th>
                <th>overview</th>
            </tr>
            <tr>
                <td>{{ $connection2 -> eye_catch }}</td>
                <td>{{ $connection2 -> title }}</td>
                <td>{{ $connection2 -> overview }}</td>
            </tr>
        </table>
    @endif

    <h2>関連プラン３</h2>
        @if (isset($connection3))
            <table>
            <tr>
                <th>eye_catch</th>
                <th>title</th>
                <th>overview</th>
            </tr>
            <tr>
                <td>{{ $connection3 -> eye_catch }}</td>
                <td>{{ $connection3 -> title }}</td>
                <td>{{ $connection3 -> overview }}</td>
            </tr>
        </table>
    @endif


</body>
</html>
