{{-- <!DOCTYPE html>
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

        </main> --}}
{{-- ----------フロント班からのもの-- ---------- --}}

{{-- <ul>
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

</html> --}}





{{-- ここから編集↓↓ --}}




@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '入門知識')


@section('pageCss')
    <link rel="stylesheet" href="../assets/css/knowledge_info.css">
@endsection

@section('content')

    <div class="mainarea flex expand">
        <main class="main-section expand">
            <section class="firstsection expand p__lr">

                <div class="knowledge__section expand p__lr">

                    <h2 class="pagetitle ">基礎知識詳細<br>{{ $knowledges->title }}</h2>
                    <div class="pagetitle__border"></div>
                    <div class="i-catchimg">
                        <img src="../assets/images/img_neko_700_3.jpg" alt="">
                    </div>
                    <p class="knowledge__discription p__lr">
                        {{ $knowledges->content }}</p>
                </div>
            </section>

        </main>
        <aside class="sidemenu ">
            <div class="sidemenu__topimg"></div>
            <div class="sidemenu__box">
                <h2 class="sidemenu__title">カテゴリ</h2>
                <div class=" sidemenu__box--block ">
                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 2]) }}">道具・餌</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a>
                    <div class="sidemenu__border"></div>
                </div>
            </div>
            <div class="sidemenu__bottomimg"></div>
        </aside>
    </div>
    <div>
        <div class="knowledge__bottom expand"></div>
    </div>


    <article class="connection">
        <h2 class="section__box--title">関連記事</h2>
        <ul class="card__area flex">
            <li class="card__p">
                <a class="card card__skin" href="">
                    <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                    <div class="card__textbox">
                        <h3 class="card__title">タイトルタイトル</h3>
                        <p class="card__description">説明説明説明説明説明説明</p>
                    </div>
                </a>
            </li>
            <li class="card__p">
                <a class="card card__skin" href="">
                    <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                    <div class="card__textbox">
                        <h3 class="card__title">タイトルタイトル</h3>
                        <p class="card__description">説明説明説明説明説明説明</p>
                    </div>
                </a>
            </li>
            <li class="card__p">
                <a class="card card__skin" href="">
                    <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                    <div class="card__textbox">
                        <h3 class="card__title">タイトルタイトル</h3>
                        <p class="card__description">説明説明説明説明説明説明</p>
                    </div>
                </a>
            </li>
        </ul>
        <div class="sidemenu__pagebottom--top expand"></div>
    </article>

@endsection

<aside class="sidemenu__pagebottom  p__lr">

    <h2 class="sidemenu__title">カテゴリ</h2>

    <a class="sidemenu__discription" href="">入門知識</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="">道具・餌</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="">注意点</a>
    <div class="sidemenu__border"></div>
    <a class="sidemenu__discription" href="">その他</a>
    <div class="sidemenu__border"></div>

</aside>

<script src="../assets/js/main.js"></script>

</html>
