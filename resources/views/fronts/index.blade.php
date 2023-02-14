<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
</head>

<body>
    <h1>釣っトク！</h1>

    <h2>入門知識</h2>
    <a href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a>
    <a href="{{ route('knowledgelist', ['category_id' => 2]) }}">道具・餌</a>
    <a href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a>
    <a href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a>

    <h2>釣りスポット</h2>
    <a href="{{ route('spotslist', ['city_id' => 1]) }}">東部</a>
    <a href="{{ route('spotslist', ['city_id' => 2]) }}">南部</a>

    <h2>体験プラン</h2>
    <a href="{{ route('planinfo', ['id' => 1]) }}">アジをサビキ釣り</a>
    <a href="{{ route('planinfo', ['id' => 2]) }}">ウキ釣りでアジを釣る</a>
    <a href="{{ route('planlist') }}">もっとみる</a>

    <h2>徳島で釣れる魚</h2>
    <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
    <a href="{{ route('fishinfo', ['id' => 2]) }}">イワシ</a>
    <a href="{{ route('fishinfo', ['id' => 3]) }}">アジ</a>

    <h2>Infomation</h2>
    @if (isset($item))
        {{-- ↑の$itemはどこからきてる？ --}}
        <table>
            <tr>
                <th>投稿日時</th>
                <th>記事タイトル</th>
            </tr>
            @for ($i = 1; $i <= 4; $i++)
                <tr>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->title }}</td>
                    {{-- <td><a href="{{ route('newsinfo', ['created_at' => 1]) }}">移転先へ自動移動</a></td>
            <td><a href="https://allabout.co.jp/gm/gc/23770/">移転先へ自動移動</a></td> --}}
                </tr>
            @endfor
        </table>
    @endif
</body>

</html>
