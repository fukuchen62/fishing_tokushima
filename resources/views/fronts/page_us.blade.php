@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'このサイトについて')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/page_us.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    {{-- <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">私たちについて</h1>
        </div>
    </section> --}}

    <div class="section">
        {{-- <h2 class="section__box--title ">このサイト・私たちについて</h2> --}}
        <div>
            <p>私たちは徳島県のQLiPプログラミングスクールにて2022年9月から2023年3月の間開講された職業訓練「Webアプリケーション制作科第2期」の受講生です。</p>
            <p>本サイトは、必要な知識を短期集中型授業で身につけ、その講座の最終制作として私達が制作したものです。</p>
        </div>
        <div>
            <dl>
                <dt>釣りの入門知識</dt>
                <dd>初めて釣りをする方向けの基本知識を紹介しています。</dd>
            </dl>
            <dl>
                <dt>釣りの体験プラン</dt>
                <dd>お手本となる釣りプランの例を紹介しています。</dd>
            </dl>
            <dl>
                <dt>徳島の魚</dt>
                <dd>初心者向けの徳島で釣れる魚の情報を紹介しています。</dd>
            </dl>
            <dl>
                <dt>徳島の釣りスポット</dt>
                <dd>徳島の有名な釣りスポットを紹介しています。</dd>
            </dl>
            <dl>
                <dt>徳島の釣具店</dt>
                <dd>徳島県内の釣具店を紹介しています。</dd>
            </dl>

            <p>※釣りをするにあたっての共通の注意事項</p>
            <p>当サイトは初心者の人への釣り知識をを紹介するサイトです。トラブルなどがあった場合、当サイトは責任を持つことはできませんのであらかじめご了承ください。</p>
        </div>
    </div>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
