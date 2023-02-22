@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '私たちについて')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">私たちについて</h1>
        </div>
    </section>

    <section class="section">

        <h2 class="section__box--title ">このサイト・私たちについて</h2>

            <div>
                <p>私たちは徳島県のQLiPプログラミングスクールにて2022年9月から2023年3月の間開講された<br>
                    職業訓練「Webアプリケーション制作科第2期」の受講生です。
                    <br>本サイトは、必要な知識を短期集中型授業で身につけ、その講座の最終制作として私達が制作したものです。</p>
            </div>
            <div>

        <p>・釣りの入門知識
        初めて釣りをする方向けの基本知識を紹介しています。
<p>
・釣りの体験プラン
お手本となる釣りプランの例を紹介しています。
</p>
<p>・徳島で釣れる魚
徳島で釣れる魚の情報を紹介しています。
</p>
<p>・徳島の釣りスポット
徳島の有名な釣りスポットを紹介しています。
</p>
<p>・徳島の釣具店
徳島県内の釣具店を紹介しています。
</p>
<p>
※釣りをするにあたっての共通の注意事項</p>
<p>当サイトは初心者の人への釣り知識をを紹介するサイトです。
トラブルなどがあった場合、当サイトは責任を持つことはできませんのであらかじめご了承ください。
</p>

            </div>
    </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="./assets/images/fish hook.png" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
