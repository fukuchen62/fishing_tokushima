@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '釣具店一覧')

{{-- 該当ページのCSS --}}
@section('pageCss')
<link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    <section>

            <input id="east" type="radio" name="tab__item" checked>
            <label class="tab__item" for="east"><a href="{{ route('shopslist', ['city_id' => 1]) }}">東部</a></label>
            <input id="south" type="radio" name="tab__item">
            <label class="tab__item" for="south"><a href="{{ route('shopslist', ['city_id' => 2]) }}">南部</a></label>
            <input id="west" type="radio" name="tab__item">
            <label class="tab__item" for="west"><a href="{{ route('shopslist', ['city_id' => 3]) }}">西部</a></label>
            <input id="north" type="radio" name="tab__item">
            <label class="tab__item" for="north"><a href="{{ route('shopslist', ['city_id' => 4]) }}">北部</a></label>
            <button>

            <h3 class="section__box--title">検索結果</h3>

            @foreach ($shops as $item)
                @component('components.front_shops_card')

                    @slot('shop_link')
                        {{ route('shopslist', ['id' => $item->id]) }}
                    @endslot

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

                @endcomponent
            @endforeach
    </section>

    <div class="section__image--information section__content--information">お店の周辺情報</div>

            <!-- Googleマップで周辺情報を表す -->
            <div class="section__wrap--infomation">
                <iframe class="section__map--information"
                    src="@foreach ($shops as $item)
                    {{ $item->iframe }}
                    @endforeach"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

        <!-- セクションを区切る波 -->
        <div class="firstsection__bottom expand"></div>

        <div id="page_top" class="flex">
            <!-- 余裕があれば魚が釣られるアニメーションを追加 -->
            <!-- <img src=".//assets/images/fish_yellow.png" alt="黄色魚" class="topbutton__fish"> -->
            <a href="#"><img src="../assets/images/fish hook.png" alt="釣り針" class="topbutton__hook"></a>
        </div>


        <div class="footer__top--img expand" style="background-color: #fff;">
            <img src="../assets/images/footer_top_img.png" alt="貝と浮き輪" class="footer__image--adjust">
        </div>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
