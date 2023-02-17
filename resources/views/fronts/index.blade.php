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
        <h2>入門知識</h2>
        <div>
            <a href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a>
        </div>
        <div>
            <a href="{{ route('knowledgelist', ['category_id' => 2]) }}">道具・餌</a>
        </div>
        <div>
            <a href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a>
        </div>
        <div>
            <a href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a>
        </div>

        <h2>釣りスポット</h2>
        <div>
            <a href="{{ route('spotslist', ['city_id' => 1]) }}">東部</a>
        </div>
        <div>
            <a href="{{ route('spotslist', ['city_id' => 2]) }}">南部</a>
        </div>
    </section>

    <div class="firstsection__bottom"></div>

    <section>
        <h2>体験プラン</h2>
        <div>
            <a href="{{ route('planinfo', ['id' => 1]) }}">アジをサビキ釣り</a>
        </div>
        <div>
            <a href="{{ route('planinfo', ['id' => 2]) }}">ウキ釣りでアジを釣る</a>
        </div>
        <div>
            <a href="{{ route('planinfo', ['id' => 1]) }}">アジをサビキ釣り</a>
        </div>
        <div>
            <a href="{{ route('planlist') }}">もっとみる</a>
        </div>
    </section>

    <section>
        <h2>徳島で釣れる魚</h2>
        <div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 2]) }}">イワシ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 3]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 2]) }}">イワシ</a>
            </div>
        </div>
        <div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 3]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 2]) }}">イワシ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 3]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
        </div>
    </section>

    <section>
        <h2>Infomation</h2>
        <div>
            @foreach ($items as $key => $item)
                <a href="{{ route('newsinfo', ['id' => $items[$key]]) }}">
                    <ul>
                        <li>{{ $item->created_at }}</li>
                        <li>{{ $item->title }}</li>
                    </ul>
                </a>
            @endforeach
        </div>
        <div>
            <a href="{{ route('news') }}">もっとみる</a>
        </div>
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
