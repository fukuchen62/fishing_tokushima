<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>内容</h2>
    @if (isset($item))

    {{-- お気に入り保存 --}}

{{ Cookie::get('plan_id') }}

{{-- @php
    $msg="";
@endphp


{{ $msg }} --}}

    {{-- @php
        $val="";
        if (isset($_COOKIE["plan_id"])) {
            $val = $_COOKIE["plan_id"];
        }
    @endphp

    <p>cookie: {{ $val }}</p> --}}


        @if (Cookie::get('plan_id')==$item->id)
        <div>
        <p>お気に入り登録済</p>
        <a href="{{ route('cookie', ['plan_id' => $item->id]) }}"><p>リンク2</p></a>
        </div>
        @else
            <a href="{{ route('cookie', ['plan_id' => $item->id]) }}"><p>リンク1</p></a>
        @endif

    {{-- お気に入りボタンは不採用 --}}
    {{-- <form action="{{ route('mypage')}}" method="post">
        <table>
        @csrf
        <tr>
        <td><input type="submit" name="plan_id" value="{{ $item->id }}" id=""></td>
        </tr>
        </table>
    </form> --}}

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

    <h2>関連プラン</h2>

    <h3>魚が一緒</h3>
    @if (isset($connection1))
    <table>
            <tr>
                <th>id</th>
                <th>eye_catch</th>
                <th>title</th>
                <th>地域</th>
                <th>レベル</th>
                <th>overview</th>
                <td>リンク</td>
            </tr>
        @foreach ($connection1 as $key => $value)
            <tr>
                <td>{{ $value -> id }}</td>
                <td>{{ $value -> eye_catch }}</td>
                <td>{{ $value -> title }}</td>
                <td>{{ $value -> city -> area }}</td>
                <td><?php echo $value -> getLevel() ?></td>
                <td>{{ $value -> overview }}</td>
                <td><a href="{{ route('plansinfo', ['id' =>  $value->id ]) }}">リンク</a></td>
            </tr>
        @endforeach
        </table>
    @endif


    <h3>スポットが一緒</h3>
    @if (isset($connection2))
    <table>
            <tr>
                <th>id</th>
                <th>eye_catch</th>
                <th>title</th>
                <th>地域</th>
                <th>レベル</th>
                <th>overview</th>
                <td>リンク</td>
            </tr>
        @foreach ($connection2 as $key => $value)
            <tr>
                <td>{{ $value -> id }}</td>
                <td>{{ $value -> eye_catch }}</td>
                <td>{{ $value -> title }}</td>
                <td>{{ $value -> city -> area }}</td>
                <td><?php echo $value -> getLevel() ?></td>
                <td>{{ $value -> overview }}</td>
                <td><a href="{{ route('plansinfo', ['id' =>  $value->id ]) }}">リンク</a></td>
            </tr>
        @endforeach
        </table>
    @endif

</body>
</html>
