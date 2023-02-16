@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '入門知識')

{{-- 該当ページのCSS --}}
@section('pageCss')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/knowledge.css') }}"> --}}
@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">入門知識</h1>
        </div>
    </section>

    <section class="firstsection">

        <div class="tab-wrap">
            <input id="tab01" type="radio" name="tab" class="tab-switch" checked="checked"><label class="tab-label"
                for="tab01">基礎知識</label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab02" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab02">釣り道具・餌</label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab03" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab03">注意点</label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab04" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab04">その他</label>
            <div class="tab-content">
                カード
            </div>

        </div>

        @foreach ($knowledges as $item)
            @component('components.front_card')
                @slot('card_src')
                @endslot

                @slot('card_alt')
                    {{ $item->title }}
                @endslot

                @slot('card_title')
                    {{ $item->title }}
                @endslot

                @slot('card_text')
                    {{ $item->overview }}
                @endslot
            @endcomponent
        @endforeach


    </section>
    <div class="firstsection__bottom"></div>

    {{-- <section>
        <ul>
            <li><a href="{{ route('knowledgelist') }}">入門知識一覧</a></li>
            <li><a href="{{ route('spotslist') }}">釣り場一覧</a></li>
            <li><a href="{{ route('shopslist') }}">釣具屋一覧</a></li>
        </ul>

        <h1>入門知識一覧</h1>
        <a href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a>
        <a href="{{ route('knowledgelist', ['category_id' => 2]) }}">道具・餌</a>
        <a href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a>
        <a href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a>

        <table border="1">
            <tr>
                <th>ID&nbsp;</th>
                <th>タイトル&nbsp;</th>
                <th>概要&nbsp;</th>
                <th>内容&nbsp;</th>
                <th>投稿日時&nbsp;</th>
                <th>編集日時&nbsp;</th>
            </tr>
            @foreach ($knowledges as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->overview }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td><a href="{{ route('knowledgeinfo', ['id' => $item->id]) }}">詳細</a></td>
                </tr>
            @endforeach
        </table>
    </section> --}}

    <div id="page_top" class="flex">
        <a href="#"><img src="./assets/images/fish hook.png" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
