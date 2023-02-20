<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>

<body>

        <div class="mainarea flex expand">
        <main class="main-section expand">
            <section class="firstsection expand p__lr">

                <div class="knowledge__section expand p__lr">

                    <h2 class="pagetitle ">基礎知識詳細<br>タイトル</h2>
                    <div class="pagetitle__border"></div>

                    <h2 class="section__box--title ">第一セクション</h2>
                    <div class="imgbox">
                        <img class="knowledge__image" src="../assets/images/img_neko_700_3.jpg" alt="知識イメージ画像">
                    </div>
                    <p class="knowledge__discription p__lr">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト</p>
                    <p class="knowledge__discription p__lr">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト</p>



                    <h2 class="section__box--title ">第一セクション</h2>
                    <div class="imgbox">
                        <img class="knowledge__image" src="../assets/images/img_neko_700_3.jpg" alt="知識イメージ画像">
                    </div>
                    <p class="knowledge__discription p__lr">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト</p>
                    <p class="knowledge__discription p__lr">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト</p>
                </div>
            </section>

        </main>
        {{-- ----------フロント班からのもの-- ---------- --}}

    <ul>
        <li><a href="{{ route('knowledgelist') }}">入門知識一覧</a></li>
        <li><a href="{{ route('spotslist') }}">釣り場一覧</a></li>
        <li><a href="{{ route('shopslist') }}">釣具屋一覧</a></li>
    </ul>
    <h1>記事詳細</h1>
    <table border="1">
        <tr>
            <th>タイトル&nbsp;</th>
            <th>内容&nbsp;</th>
        </tr>
        <tr>
            <td>{{ $knowledges->title }}</td>
            <td>{{ $knowledges->content }}</td>
        </tr>
    </table>
</body>

</html>
