@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title')
    {{ $category->name }}
@endsection

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/knowledge_info.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/knowledge-keyvisual.jpg') }}" alt="knowledge-keyvisual.jpg">
@endsection

@section('content')
    <div class="mainarea flex expand">
        <div class="main-section expand">
            <section class="firstsection expand p__lr">

                <div class="knowledge__section expand p__lr">

                    <h2 class="pagetitle ">{{ $knowledges->title }}</h2>
                    <div class="pagetitle__border"></div>
                    <div class="i-catchimg">
                        @if ($knowledges->thumbnail != "")
                            <img src="{{ asset('storage/images') }}/{{ $knowledges->thumbnail }}" alt="{{ $knowledges->thumbnail }}">
                        @else
                            <img src="{{ asset('assets/images/img_neko_700_3.jpg') }}" alt="">
                        @endif
                    </div>

                    @php
                        echo $knowledges->content
                    @endphp

                    {{-- 以下、コンテンツ班に渡すもの --}}

                    {{-- コンテンツ班にタイトル入力してもらう --}}
                    {{-- <h3 class="section__box--title ">第一セクション</h3> --}}
                    {{-- <div class="imgbox"> --}}
                        {{-- コンテンツ班に画像名入れてもらう --}}
                        {{-- <img class="knowledge__image" src="{{ asset('storage/images/画像名') }}" alt="画像名"> --}}
                    {{-- </div> --}}
                    {{-- 文章それぞれコンテンツ班に入力してもらう --}}
                    {{-- <p class="knowledge__discription p__lr">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                    </p> --}}
                    {{-- <p class="knowledge__discription p__lr">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                    </p> --}}
                {{-- 以上、コンテンツ班に渡すもの --}}
                </div>
            </section>

        </div>
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
            @foreach ($connection_list as $item)
                @component('components.front_card')
                    @slot('card_link')
                        {{ route('knowledgeinfo', ['id' => $item->id]) }}
                    @endslot

                    @slot('card_src')
                    @if ($item->thumbnail != "")
                        {{ asset('storage/images') }}/{{ $item->thumbnail }}
                    @else
                    https://placehold.jp/320x240.png
                    @endif
                    @endslot

                    @slot('card_alt')
                    @if ($item->thumbnail != "")
                        {{ $item->thumbnail }}
                    @endif
                    @endslot

                    @slot('card_title')
                        {{ $item->title }}
                    @endslot

                    @slot('card_text')
                    @php
                        $overview = mb_strimwidth($item->overview, 0, 150, "・・・");
                    @endphp
                        {{ $overview }}
                    @endslot
                @endcomponent
            @endforeach
        </ul>
        <div class="sidemenu__pagebottom--top expand"></div>
    </article>
    <aside class="sidemenu__pagebottom  p__lr">

        <h2 class="sidemenu__title">カテゴリ</h2>

                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 2]) }}">道具・餌</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a>
                    <div class="sidemenu__border"></div>
                    <a class="sidemenu__discription" href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a>
                    <div class="sidemenu__border"></div>

    </aside>


@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
