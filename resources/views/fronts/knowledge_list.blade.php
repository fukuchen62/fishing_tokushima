@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '入門知識')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/knowledge.css') }}">
@endsection

@section('key_visual')
    キービジュアル
@endsection

{{-- メイン --}}
@section('content')

        <section class="firstsection expand">

            <div class="tabs p__lr">
                <input id="all" type="radio" name="tab_item" checked>
                <label class="tab_item" for="all"><span class="title__icon"><a href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a></span></label>

                <input id="programming" type="radio" name="tab_item">
                <label class="tab_item" for="programming"><span class="title__icon"><a href="{{ route('knowledgelist', ['category_id' => 2]) }}">釣り道具・餌</a></span></label>

                <input id="design" type="radio" name="tab_item">
                <label class="tab_item" for="design"><span class="title__icon"><a href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a></span></label>

                <input id="other" type="radio" name="tab_item">
                <label class="tab_item" for="other"><span class="title__icon"><a href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a></span></label>

                <div class="tab_content" id="all_content">

                    <div class="panel-area">

                        @php
                            $count = count($knowledges);
                            $number = $count / 6
                        @endphp
                        {{-- <p>{{ $count }}</p> --}}

                        @for ($i = 0; $i < $number; $i++)

                        <div class="panel active">
                            <ul class="card__area flex">
                                @foreach ($knowledges as $item)
                                    @component('components.front_card')

                                    @slot('card_link')
                                    {{ route('knowledgeinfo', ['id' => $item->id]) }}
                                    @endslot

                                    @slot('card_src')
                                    {{ asset('storage/images') }}/{{ $item->thumbnail }}
                                    @endslot

                                    @slot('card_alt')
                                    {{ $item->thumbnail }}
                                    @endslot

                                    @slot('card_title')
                                    {{ $item->title }}
                                    @endslot

                                    @slot('card_text')
                                    {{ $item->overview }}
                                    @endslot

                                    @endcomponent
                                @endforeach
                            </ul>
                        </div>

                        @endfor
                    </div>

                    <ul class="tab-area flex">
                        @for ($i = 0; $i < $number; $i++)
                        <li class="tab">{{ $i+1 }}</li>
                        @endfor
                    </ul>

                </div>

                <div class="tab_content" id="programming_content">
                    <div class="panel-area">

                        @php
                            $count = count($knowledges);
                            $number = $count / 6
                        @endphp
                        {{-- <p>{{ $count }}</p> --}}

                        @for ($i = 1; $i <= $number; $i++)

                        <div class="panel active">
                            <ul class="card__area flex">
                                @foreach ($knowledges as $item)
                                    @component('components.front_card')

                                    @slot('card_link')
                                    {{ route('knowledgeinfo', ['id' => $item->id]) }}
                                    @endslot

                                    @slot('card_src')
                                    https://placehold.jp/320x240.png
                                    {{-- {{ $item->thumbnail }} --}}
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
                            </ul>
                        </div>

                        @endfor
                    </div>

                    <ul class="tab-area flex">
                        @for ($i = 0; $i < $number; $i++)
                        <li class="tab">{{ $i+1 }}</li>
                        @endfor
                    </ul>

                </div>

                <div class="tab_content" id="design_content">
                    <div class="panel-area">

                        @php
                            $count = count($knowledges);
                            $number = $count / 6
                        @endphp
                        {{-- <p>{{ $count }}</p> --}}

                        @for ($i = 1; $i <= $number; $i++)

                        <div class="panel active">
                            <ul class="card__area flex">
                                @foreach ($knowledges as $item)
                                    @component('components.front_card')

                                    @slot('card_link')
                                    {{ route('knowledgeinfo', ['id' => $item->id]) }}
                                    @endslot

                                    @slot('card_src')
                                    {{-- https://placehold.jp/320x240.png --}}
                                    {{ $item->thumbnail }}
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
                            </ul>
                        </div>

                        @endfor
                    </div>

                    <ul class="tab-area flex">
                        @for ($i = 0; $i < $number; $i++)
                        <li class="tab">{{ $i+1 }}</li>
                        @endfor
                    </ul>

                </div>

                <div class="tab_content" id="other_content">
                    <div class="panel-area">

                        @php
                            $count = count($knowledges);
                            $number = $count / 6
                        @endphp
                        {{-- <p>{{ $count }}</p> --}}

                        @for ($i = 1; $i <= $number; $i++)

                        <div class="panel active">
                            <ul class="card__area flex">
                                @foreach ($knowledges as $item)
                                    @component('components.front_card')

                                    @slot('card_link')
                                    {{ route('knowledgeinfo', ['id' => $item->id]) }}
                                    @endslot

                                    @slot('card_src')
                                    {{-- https://placehold.jp/320x240.png --}}
                                    {{ $item->thumbnail }}
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
                            </ul>
                        </div>

                        @endfor
                    </div>

                    <ul class="tab-area flex">
                        @for ($i = 0; $i < $number; $i++)
                        <li class="tab">{{ $i+1 }}</li>
                        @endfor
                    </ul>

                </div>

        </section>
        <div class="firstsection__bottom expand"></div>


        {{----------------- 以上フロント班からのもの -------------------}}


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

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
<script src="{{ asset('assets/js/knowledge.js') }}"></script>
@endsection
