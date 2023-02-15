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

    @if (isset($item))
        <table>
            <tr>
                <th>title</th>
                <th>thumbnail</th>
                <th>overview</th>
                <th>level</th>
                <th>スポット名</th>
                <th>釣り方</th>
                <th>釣れる月</th>
                <th>flow</th>
            </tr>
            <tr>
                <td>{{ $item -> title }}</td>
                <td>{{ $item -> thumbnail }}</td>
                <td>{{ $item -> overview }}</td>
                <td>{{ $item -> level }}</td>
                <td>{{ $item -> spot -> name }}</td>
                <td>{{ $item -> fish -> method }}</td>
                <td>{{ $item -> fish -> getMonth() }}</td>
                <td>{{ $item -> flow }}</td>
            </tr>
        </table>
    @endif


</body>
</html>
