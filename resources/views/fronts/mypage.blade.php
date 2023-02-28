@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'マイページ')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/mypage.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/mypage_keyvisual.jpg') }}"
    alt="mypage_keyvisual.jpg">
@endsection

{{-- メイン --}}
@section('content')

        <section class="firstsection expand">

            <div class="tabs">
                <a class="spot tab_item" href="{{ route('mypage', ['category' => "spot"]) }}">スポット</a>
                <a class="plan tab_item" href="{{ route('mypage', ['category' => "plan"]) }}">プラン</a>
            </div>


            <div class="tab_content" id="all_content">

                {{-- spotが選択された場合・デフォルト --}}
                @if ($category == "spot")
                @if ($spots != null)
                <ul class="card__area flex">
                    @foreach ($spots as $key => $spot)

                    @component('components.front_card')
                    @slot('card_link')
                        {{ route('spotsinfo', ['id' => $spot->id]) }}
                    @endslot

                    @slot('card_src')
                    @if ($spot->img1 !="")
                        {{ asset('storage/images') }}/{{ $spot->img1 }}
                    @else
                        https://placehold.jp/320x240.png
                    @endif
                    @endslot

                    @slot('card_alt')
                        {{ $spot->img1 }}
                    @endslot

                    @slot('card_title')
                        {{ $spot->name }}
                    @endslot

                    @slot('card_text')
                        @php
                            $overview = mb_strimwidth( $spot->overview , 0, 150, "・・・");
                        @endphp
                            {{ $overview }}
                    @endslot
                    @endcomponent

                    @endforeach
                    </ul>

                @else
                <!-- 以下表示する物がない状態 -->
                <div class="nonedisplay">
                    <img src="{{ asset('assets/images/svg/mypage_fish.svg') }}" alt="sakana">
                    <img src="{{ asset('assets/images/svg/mypage_heart.svg') }}" alt="heart">
                </div>
                    <p>まだお気に入りがありません</p>
                    <p>お気に入りを探しに行きましょう！</p>
                    <a class="btn" href="{{ route('spotslist') }}">釣りスポット</a>
                @endif

                {{-- planが選択された場合 --}}
                @elseif ($category == "plan")

                @if ($plans != null)
                <ul class="card__area flex">
                    @foreach ($plans as $key => $plan)

                    @component('components.front_card')
                    @slot('card_link')
                        {{ route('plansinfo', ['id' => $plan->id]) }}
                    @endslot

                    @slot('card_src')
                    @if ($plan->eye_catch !="")
                        {{ asset('storage/images') }}/{{ $plan->eye_catch }}
                    @else
                        https://placehold.jp/320x240.png
                    @endif
                    @endslot

                    @slot('card_alt')
                        {{ $plan->eye_catch }}
                    @endslot

                    @slot('card_title')
                        {{ $plan->title }}
                    @endslot

                    @slot('card_text')
                        @php
                            $overview = mb_strimwidth( $plan->overview , 0, 150, "・・・");
                        @endphp
                            {{ $overview }}
                    @endslot
                    @endcomponent

                    @endforeach
                    </ul>

                @else
                <!-- 以下表示する物がない状態 -->
                <div class="nonedisplay">
                    <img src="{{ asset('assets/images/svg/mypage_fish.svg') }}" alt="sakana">
                    <img src="{{ asset('assets/images/svg/mypage_heart.svg') }}" alt="heart">
                </div>
                    <p>まだお気に入りがありません</p>
                    <p>お気に入りを探しに行きましょう！</p>
                    <a class="btn" href="{{ route('planslist') }}">体験プラン</a>
                @endif

                @endif
            </div>
        </section>
        <div class="firstsection__bottom expand"></div>

@endsection


{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/js/mypage.js') }}"></script>
@endsection
