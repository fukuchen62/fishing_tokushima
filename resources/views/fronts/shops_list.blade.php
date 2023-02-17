@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '釣具店一覧')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">釣具店一覧</h1>
        </div>
    </section>

    <section>
        <!-- <h2 class="section__title">釣具店</h2> -->

        <div class="flex">
            <button>
                <div class="btn"><a href="{{ route('shopslist', ['city_id' => 1]) }}">東部</a></div>
            </button>

            <button>
                <div class="btn"><a href="{{ route('shopslist', ['city_id' => 2]) }}">南部</a></div>
            </button>

            <button>
                <div class="btn"><a href="{{ route('shopslist', ['city_id' => 3]) }}">西部</a></div>
            </button>

            <button>
                <div class="btn"><a href="{{ route('shopslist', ['city_id' => 4]) }}">北部</a></div>
            </button>
        </div>

        <div>
            <h3>検索結果</h3>
            @foreach ($shops as $item)
                @component('components.front_shops_card')
                    @slot('shop_name')
                        {{ $item->name }}
                    @endslot

                    @slot('shop_address')
                        {{ $item->address }}
                    @endslot

                    @slot('shop_service_day')
                        {{ $item->service_day }}
                    @endslot

                    @slot('shop_tel')
                        {{ $item->tel }}
                    @endslot

                    @slot('shop_email')
                        {{ $item->email }}
                    @endslot

                    @slot('shop_service')
                        {{ $item->service }}
                    @endslot

                    @slot('shop_pr')
                        {{ $item->pr }}
                    @endslot

                    @slot('shop_iframe')
                        {{ $item->iframe }}
                    @endslot
                @endcomponent
            @endforeach
    </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
