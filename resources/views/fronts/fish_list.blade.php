<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>徳島で釣れる魚一覧</title>
</head>

<body>
    <h1>徳島で釣れる魚一覧</h1>
    {{-- @foreach ($fishes as $item) --}}
    {{-- <ul>
            <li><a href="./fishlist?month={{ $item->month }}">1月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">2月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">3月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">4月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">5月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">6月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">7月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">8月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">9月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">10月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">11月</a></li>
            <li><a href="./fishlist?month={{ $item->month }}">12月</a></li>
        </ul> --}}
    {{-- @endforeach --}}
    <a href="{{ route('fishlist', ['month' => '1']) }}">1月</a>
    <a href="{{ route('fishlist', ['month' => '2']) }}">2月</a>
    <a href="{{ route('fishlist', ['month' => '3']) }}">3月</a>
    <a href="{{ route('fishlist', ['month' => '4']) }}">4月</a>
    <a href="{{ route('fishlist', ['month' => '5']) }}">5月</a>
    <a href="{{ route('fishlist', ['month' => '6']) }}">6月</a>
    <a href="{{ route('fishlist', ['month' => '7']) }}">7月</a>
    <a href="{{ route('fishlist', ['month' => '8']) }}">8月</a>
    <a href="{{ route('fishlist', ['month' => '9']) }}">9月</a>
    <a href="{{ route('fishlist', ['month' => 'a']) }}">10月</a>
    <a href="{{ route('fishlist', ['month' => 'b']) }}">11月</a>
    <a href="{{ route('fishlist', ['month' => 'c']) }}">12月</a>

    {{-- <ul>
        <li><a href="./fishlist?month=1">1月</a></li>
        <li><a href="./fishlist?month=2">2月</a></li>
        <li><a href="./fishlist?month=3">3月</a></li>
        <li><a href="./fishlist?month=4">4月</a></li>
        <li><a href="./fishlist?month=5">5月</a></li>
        <li><a href="./fishlist?month=6">6月</a></li>
        <li><a href="./fishlist?month=7">7月</a></li>
        <li><a href="./fishlist?month=8">8月</a></li>
        <li><a href="./fishlist?month=9">9月</a></li>
        <li><a href="./fishlist?month=10">10月</a></li>
        <li><a href="./fishlist?month=11">11月</a></li>
        <li><a href="./fishlist?month=12">12月</a></li>
    </ul> --}}

    <table>
        <tr>
            <th>釣れる月</th>
            <th>魚の名前(普通の呼び方)</th>
            <th>魚の名前(正式名称)</th>
            <th>魚の画像1</th>
            <th>詳細説明</th>
            <th>食べ方1</th>
            <th>食べ方2</th>
            <th>食べ方3</th>
            <th>リンク</th>
        </tr>
        @foreach ($fishes as $item)
            <tr>
                <td>{{ $item->month }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->formal_name }}</td>
                <td>{{ $item->fish_img1 }}</td>
                <td>{{ $item->detail }}</td>
                <td>{{ $item->cooking1 }}</td>
                <td>{{ $item->cooking2 }}</td>
                <td>{{ $item->cooking3 }}</td>
                <td><a href="./fishinfo?id={{ $item->id }}">詳細ページへ</a></td>
            </tr>
        @endforeach
    </table>

</body>

</html>
