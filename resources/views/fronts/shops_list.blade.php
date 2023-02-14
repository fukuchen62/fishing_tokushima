<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>

<body>
    <ul>
        <li><a href="http://localhost/fishing_tokushima/public/knowledge_list">入門知識一覧</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/spots_list">釣り場一覧</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/shops_list">釣具屋一覧</a></li>
    </ul>

    <h1>pageShop</h1>

    <table border="1">
        <tr>
            <th>ID&nbsp;</th>
            <th>店名&nbsp;</th>
            <th>地域ID&nbsp;</th>
            <th>郵便番号&nbsp;</th>
            <th>住所&nbsp;</th>
            <th>iframe&nbsp;</th>
            <th>経度&nbsp;</th>
            <th>緯度&nbsp;</th>
            <th>電話番号&nbsp;</th>
            <th>fax&nbsp;</th>
            <th>email&nbsp;</th>
            <th>url&nbsp;</th>
            <th>営業日&nbsp;</th>
            <th>営業内容&nbsp;</th>
            <th>PR&nbsp;</th>
            <th>表示フラグ&nbsp;</th>
            <th>画像&nbsp;</th>
            <th>備考&nbsp;</th>
            <th>投稿日時&nbsp;</th>
            <th>編集日時&nbsp;</th>
        </tr>
        @foreach ($shops as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->city_id }}</td>
                <td>{{ $item->postal_code }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->iframe }}</td>
                <td>{{ $item->longitude }}</td>
                <td>{{ $item->latitude }}</td>
                <td>{{ $item->tel }}</td>
                <td>{{ $item->fax }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->url }}</td>
                <td>{{ $item->service_day }}</td>
                <td>{{ $item->service }}</td>
                <td>{{ $item->pr }}</td>
                <td>{{ $item->is_show }}</td>
                <td>{{ $item->img }}</td>
                <td>{{ $item->memo }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
