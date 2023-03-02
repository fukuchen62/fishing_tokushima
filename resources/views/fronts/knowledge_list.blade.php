@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '入門知識')

{{-- 該当ページのCSS --}}
@section('pageCss')
<link rel="stylesheet" href="{{ asset('assets/css/knowledge.css') }}">
@endsection

@section('key_visual')

@endsection

{{-- メイン --}}
@section('content')

<section class="firstsection expand">

    <div class="tabs ">
        <input type="hidden" value="{{ $category_id }}" name="category">
        <a class="category1 tab_item" href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a>
        <a class="category2 tab_item" href="{{ route('knowledgelist', ['category_id' => 2]) }}">道具・餌</a>
        <a class="category3 tab_item" href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a>
        <a class="category4 tab_item" href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a>
    </div>


    <div class="tab_content" id="all_content">
        <div class="panel-area">

            <div class="panel">
                <ul class="card__area flex">
                    @foreach ($knowledges as $item)
                    @component('components.front_card')
                    @slot('card_link')
                    {{ route('knowledgeinfo', ['id' => $item->id]) }}
                    @endslot

                    @slot('card_src')
                    @if ($item->thumbnail != '')
                    {{ asset('storage/images') }}/{{ $item->thumbnail }}
                    @else
                    https://placehold.jp/320x240.png
                    @endif
                    @endslot

                    @slot('card_alt')
                    @if ($item->thumbnail != '')
                    {{ $item->thumbnail }}
                    @endif
                    @endslot

                    @slot('card_title')
                    {{ $item->title }}
                    @endslot

                    @slot('card_text')
                    @php
                    $overview = mb_strimwidth($item->overview, 0, 180, '・・・');
                    @endphp
                    {{ $overview }}
                    @endslot
                    @endcomponent
                    @endforeach
                </ul>
            </div>
        </div>

            {{-- ページネーション --}}
            @php
                $count = count($knowledges)+1;
                // カウントがうまくいかないため、＋１して対応
                $number = $count / 6;
            @endphp
            {{-- 下記試しのため使用 --}}
            <p>{{ $count }}</p>
            {{-- <p>{{ $number }}</p> --}}

        {{-- ページネーションのjavascriptのためのinput --}}
        <input type="hidden" value="{{ $page }}" name="page">

            <ul class="tab-area flex">
                @for ($i = 0; $i < $number; $i++)
                    <li class="tab">
                        <a href="{{ route('knowledgelist') }}?category_id={{ $category_id }}&page= {{ $i + 1 }}">
                            {{ $i + 1 }}
                        </a>
                    </li>
                @endfor
            </ul> --}}
            @php
            $data = [
            // 'knowledges' => $items,
            'category_id' => $category_id,
            // 'page' => $page,
        ];
            @endphp

            {{ $knowledges->links('vendor.pagination.original',$data) }}

        </div>

</section>
<div class="firstsection__bottom expand"></div>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
<script src="{{ asset('assets/js/knowledge.js') }}"></script>
@endsection
