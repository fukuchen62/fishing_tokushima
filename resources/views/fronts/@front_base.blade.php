@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'ページタイトル')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">ページタイトル</h1>
        </div>
    </section>

    <section class="section">

        <h2 class="section__box--title ">第一セクション</h2>

        <div>
            <h3>サブタイトル</h3>
            <div>
                <p>テキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </div>
    </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
