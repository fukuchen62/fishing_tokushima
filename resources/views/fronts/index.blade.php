@extends('layouts.layout_front')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'トップページ')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

@section('key_visual')
    <div class="keyvisual">
        キービジュアル
    </div>
@endsection

{{-- メイン --}}
@section('content')

    <section class="firstsection">

        <h2 class="section__box--title ">第一セクション</h2>

        <div>
            <div class="btn">基礎ボタン</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>

    </section>
    <div class="firstsection__bottom"></div>

    <section>
        <h2>釣りスポット</h2>
        <div>東部</div>
        <!--botan -->
        <div>南部</div>
        <!--botan -->
    </section>

    <section>
        <h2>体験プラン</h2>
        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>

        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>

        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>
        <a href=""> もっと見る</a>
    </section>

    <section>
        <h2>徳島で釣れる魚</h2>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
    </section>

    <section>
        <h2>infomation</h2>
        <div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
        </div>
        <a href="">もっと見る</a>
    </section>
    <div id="page_top" class="flex">
        <!-- 余裕があれば魚が釣られるアニメーションを追加 -->
        <!-- <img src=".//assets/images/fish_yellow.png" alt="黄色魚" class="topbutton__fish"> -->
        <a href="#"><img src="./assets/images/fish hook.png" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
