<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>体験プランの一覧</h1>

    <form action="./planlist" method="post">
        @csrf
        <input type="number" name="area" value="">
        {{-- {{ $area }} --}}
        <input type="text" name="level" value="">
        {{-- {{ $level }} --}}
        <input type="text" name="fish" value="">
        {{-- {{ $fish }} --}}
        <input type="submit" value="find">
    </form>


    <form action="./planlist" method="post">
        @csrf

        {{-- area --}}
        <div class="checklist">
            <input type="checkbox" name="area" value="1" id="toubu" onclick="" /><label for="toubu">東部</label>
        </div>

        <div class="checklist">
            <input type="checkbox" name="area" value="2" id="nanbu" onclick="" /><label for="nanbu">南部</label>
        </div>

        <div class="checklist">
            <input type="checkbox" name="area" value="3" id="seibu" onclick="" disabled=true /><label for="seibu">西部</label>
        </div>

        {{-- level --}}
        <div class="checklist">
            <input type="checkbox" name="level" value="1" id="toubu" onclick="" /><label for="toubu">★</label>
        </div>

        <div class="checklist">
            <input type="checkbox" name="level" value="2" id="nanbu" onclick="" /><label for="nanbu">★★</label>
        </div>

        <div class="checklist">
            <input type="checkbox" name="level" value="3" id="seibu" onclick="" /><label for="seibu">★★★</label>
        </div>

        {{-- fish --}}
        <div class="checklist">
            <input type="checkbox" name="fish" value="1" id="toubu" onclick="" /><label for="toubu">アジ</label>
        </div>

        <div class="checklist">
            <input type="checkbox" name="fish" value="2" id="nanbu" onclick="" /><label for="nanbu">イワシ</label>
        </div>

        <input type="submit" value="find">
    </form>


    <table>
        <tr>
            <th>アイキャッチ</th>
            <th>体験プラン</th>
            <th>概要</th>
            <th>リンク</th>
        </tr>
        @foreach ($plans as $item)
            <tr>
                <td>{{ $item->eye_catch }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->overview }}</td>
                <td><a href="./plans_info?id={{ $item->id }}">リンク</a></td>
            </tr>
        @endforeach
    </table>

</body>

</html>
