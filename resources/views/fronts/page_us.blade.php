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

        <h2 class="section__box--title ">私たちとは</h2>

            <div>
                <p>私たちは徳島県のQLiPプログラミングスクールにて2022年9月から2023年3月の間開講された<br>
                    職業訓練「Webアプリケーション制作科第2期」の受講生です。
                    <br>本サイトは、必要な知識を短期集中型授業で身につけ、その講座の最終制作として私達が制作したものです。</p>
            </div>

    </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="./assets/images/fish hook.png" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
