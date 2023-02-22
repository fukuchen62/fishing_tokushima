@extends('layouts.layout_front')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'トップページ')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection

@section('key_visual')
    <div class="keyvisual expand">
        キービジュアル
    </div>
@endsection

{{-- メイン --}}
@section('content')

    {{-- キービジュアル --}}
    {{-- ページタイトル --}}
    {{-- ここまでheader --}}

    <section class="firstsection knowledge__section expand">

        <h2 class="pagetitle">入門知識</h2>
        <div class="pagetitle__border bottom__margin"></div>
        <div class="knowledge__section--box">
            <div class="knowledge__section--flexbox knowledge_odd">
                {{-- ここからコンポーネント --}}
                @component('components.front_index_card')
                    @slot('card_link')
                        {{ route('knowledgelist', ['category_id' => 1]) }}
                    @endslot
                    @slot('card_src')
                        ./assets/images/img_neko_700_3.jpg
                    @endslot
                    @slot('card_alt')
                        基礎知識の画像
                    @endslot
                    @slot('card_title')
                        基礎知識
                    @endslot
                    @slot('card_text')
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                    @endslot
                @endcomponent
                {{-- ここまで --}}
            </div>
            <div class="knowledge__section--flexbox knowledge_even">
                {{-- ここからコンポーネント --}}
                @component('components.front_index_card')
                    @slot('card_link')
                        {{ route('knowledgelist', ['category_id' => 2]) }}
                    @endslot
                    @slot('card_src')
                        ./assets/images/img_neko_700_3.jpg
                    @endslot
                    @slot('card_alt')
                        釣具・餌の画像
                    @endslot
                    @slot('card_title')
                        釣り具・餌
                    @endslot
                    @slot('card_text')
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                    @endslot
                @endcomponent
                {{-- ここまで --}}
            </div>
            <div class="knowledge__section--flexbox knowledge_odd">
                {{-- ここからコンポーネント --}}
                @component('components.front_index_card')
                    @slot('card_link')
                        {{ route('knowledgelist', ['category_id' => 3]) }}
                    @endslot
                    @slot('card_src')
                        ./assets/images/img_neko_700_3.jpg
                    @endslot
                    @slot('card_alt')
                        注意点の画像
                    @endslot
                    @slot('card_title')
                        注意点
                    @endslot
                    @slot('card_text')
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                    @endslot
                @endcomponent
                {{-- ここまで --}}
            </div>
            <div class="knowledge__section--flexbox knowledge_even">
                {{-- ここからコンポーネント --}}
                @component('components.front_index_card')
                    @slot('card_link')
                        {{ route('knowledgelist', ['category_id' => 4]) }}
                    @endslot
                    @slot('card_src')
                        ./assets/images/img_neko_700_3.jpg
                    @endslot
                    @slot('card_alt')
                        その他の画像
                    @endslot
                    @slot('card_title')
                        その他
                    @endslot
                    @slot('card_text')
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                        texttexttexttexttexttexttexttexttexttext
                    @endslot
                @endcomponent
                {{-- ここまで --}}
            </div>
    </section>

    {{-- <div>
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
    </div> --}}
    <section class="firstsection expand">
        <h2 class="pagetitle">釣りスポット</h2>
        <div class="pagetitle__border"></div>
        <div class="spotsection__box">
            <a href="{{ route('spotslist', ['city_id' => 1]) }}">東部</a>
            <a href="{{ route('spotslist', ['city_id' => 2]) }}">南部</a>
        </div>
    </section>
    <div class="firstsection__bottom expand"></div>

    <section class="plansection">
        <h2 class="pagetitle">体験プラン</h2>
        <div class="pagetitle__border"></div>

        <div class="plansection__block plan1">
            <a href="{{ route('plansinfo', ['id' => 1]) }}">
                <div class="circle"></div>
                <div class="item">
                    <p></p>
                </div>
            </a>
        </div>
        <div class="plansection__block plan2">
            <a href="{{ route('plansinfo', ['id' => 2]) }}">
                <div class="circle"></div>
                <div class="item">
                    <p></p>
                </div>
            </a>
        </div>
        <div class="plansection__block plan3">
            <a href="{{ route('plansinfo', ['id' => 3]) }}">
                <div class="circle"></div>
                <div class="item">
                    <p></p>
                </div>
            </a>
        </div>
        {{-- <div>
            <a href="{{ route('plansinfo', ['id' => 1]) }}">アジをサビキ釣り</a>
        </div>
        <div>
            <a href="{{ route('plansinfo', ['id' => 2]) }}">ウキ釣りでアジを釣る</a>
        </div>
        <div>
            <a href="{{ route('plansinfo', ['id' => 1]) }}">アジをサビキ釣り</a>
        </div> --}}
        <div>
            <a href="{{ route('planslist') }}" class="btn">もっとみる</a>
        </div>
    </section>

    <section class="fishsection">
        <h2 class="pagetitle">徳島で釣れる魚</h2>
        <div class="pagetitle__border"></div>
        <div class="fishsection__box fishbox1 flex">
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
        </div>
        <div class="fishsection__box fishbox2 flex">
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">
                    <div>吹き出し（魚の名前）</div>
                    <div>画像</div>
                </a>
            </div>
        </div>
    </section>

    <section class="infomationsection">
        <h2 class="pagetitle">Infomation</h2>
        <div class="pagetitle__border"></div>
        <div class="infomation__block">
            @foreach ($items as $key => $item)
                <div class="infomationsection__block--box flex">
                    <div>
                        {{ $item->created_at }}
                    </div>
                    <div>
                        <a href="{{ route('newsinfo', ['id' => $items[$key]]) }}">{{ $item->title }}</a>
                    </div>
                </div>
                <div class="infomation__border"></div>
            @endforeach
            <a href="{{ route('news') }}" class="btn">もっと見る</a>
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
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
