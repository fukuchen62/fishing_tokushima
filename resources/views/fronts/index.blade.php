@extends('layouts.layout_front_top')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

{{-- @section('title', 'トップページ') --}}

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection

@section('key_visual')
    <p class="catchcopy koresae">これさえ見れば徳島で</p>
    <p class="catchcopy sakanaga">魚が釣れるんじょ</p>
@endsection

{{-- メイン --}}
@section('content')

    <section class="firstsection knowledge__section expand p__lr">

        <div class="flex sectiontitle__box">
            <img class="fishicon" src="./assets/images/svg/icon_fish.svg" alt="">
            <h2 class="pagetitle sectiontitle">入門知識</h2>
        </div>
        <div class="pagetitle__border bottom__margin"></div>
        <div class="knowledge__section--box">
            <div class="knowledge__section--flexbox knowledge_odd">
                {{-- ここからコンポーネント --}}
                @component('components.front_index_card')
                    @slot('card_link')
                        {{ route('knowledgelist', ['category_id' => 1]) }}
                    @endslot
                    @slot('card_src')
                        {{ asset('assets/images/svg/icon_fish.svg') }}
                    @endslot
                    @slot('card_alt')
                        icon_fish.svg
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
                        {{ asset('assets/images/img_neko_700_3.jpg') }}
                    @endslot
                    @slot('card_alt')
                        img_neko_700_3.jpg
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
                        {{ asset('assets/images/img_neko_700_3.jpg') }}
                    @endslot
                    @slot('card_alt')
                        img_neko_700_3.jpg
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
                        {{ asset('assets/images/img_neko_700_3.jpg') }}
                    @endslot
                    @slot('card_alt')
                        img_neko_700_3.jpg
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
        <div class="flex sectiontitle__box">
            <img class="fishicon" src="{{ asset('assets/images/svg/icon_fish.svg') }}" alt="icon_fish.svg">
            <h2 class="pagetitle">釣りスポット</h2>
        </div>
        <div class="pagetitle__border"></div>
        <div class="spotsection__box">
            <div class="tokushima__imgbox">
                <img src="{{ asset('assets/images/tokushima.svg') }}" alt="tokushima.svg">
            </div>
            <a href="{{ route('spotslist', ['city_id' => 1]) }}" class="eastsection">
                <p class="btn eastland">東部</p>
                <div class="spotborder eastborder"></div>
                <div class="spotlink eastcircle"></div>
            </a>
            <a href="{{ route('spotslist', ['city_id' => 2]) }}" class="southsection">
                <p class="btn southland">南部</p>
                <div class="spotborder southborder"></div>
                <div class="spotlink southcircle"></div>
            </a>
        </div>
    </section>
    <div class="firstsection__bottom spot__bottom expand"></div>

    <section class="plansection expand">
        <div class="flex sectiontitle__box">
            <img class="fishicon" src="{{ asset('assets/images/svg/icon_fish__second.svg') }}" alt="icon_fish__second.svg">
            <h2 class="pagetitle plantitle">体験プラン</h2>
        </div>
        <div class="pagetitle__border planbottom"></div>

        <div class="plansection__flexblock">
            <div class="leftbabble">
                <div class="bubble l-large"></div>
                <div class="bubble l-middle"></div>
                <div class="bubble l-small"></div>
            </div>
            <div class="rightbabble">
                <div class="bubble r-large"></div>
                <div class="bubble r-middle"></div>
                <div class="bubble r-small"></div>
            </div>
            <div class="leftbabble left2">
                <div class="bubble l-large"></div>
                <div class="bubble l-middle"></div>
                <div class="bubble l-small"></div>
            </div>
            <div class="rightbabble right2">
                <div class="bubble r-large"></div>
                <div class="bubble r-middle"></div>
                <div class="bubble r-small"></div>
            </div>

            <div class="plansection__block plan1">
                <a href="{{ route('plansinfo', ['id' => 1]) }}">
                    <img class="planimg" src="{{ asset('assets/images/img_neko_700_3.jpg') }}" alt="img_neko_700_3.jpg">
                </a>
                <p class="circle-text fontrotate">
                    <span>い</span><span>わ</span><span>し</span><span>を</span><span>サ</span><span>ビ</span><span>キ</span><span>釣</span><span>り</span><span></span><span></span><span></span>
                </p>
            </div>
            <div class="plansection__block plan2">
                <a class="block" href="{{ route('plansinfo', ['id' => 2]) }}">
                    <img class="planimg" src="{{ asset('assets/images/img_neko_700_3.jpg') }}" alt="img_neko_700_3.jpg">
                    <p class="circle-text fontrotate">
                        <span>浮</span><span>き</span><span>釣</span><span>り</span><span>で</span><span>あ</span><span>じ</span><span>を</span><span>つ</span><span>る</span><span></span><span></span>
                    </p>
                </a>
            </div>
            <div class="plansection__block plan3">
                <a href="{{ route('plansinfo', ['id' => 3]) }}">
                    <img class="planimg" src="{{ asset('assets/images/img_neko_700_3.jpg') }}" alt="img_neko_700_3.jpg">
                    <p class="circle-text fontrotate">
                        <span>ル</span><span>ア</span><span>ー</span><span>で</span><span>あ</span><span>じ</span><span>を</span><span>釣</span><span>っ</span><span>て</span><span>み</span><span>よ</span><span>う</span>
                    </p>
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
            <a href="{{ route('planslist') }}" class="morelook btn">もっと見る</a>
    </section>


    <section class="fishsection  expand">
        <div class="flex sectiontitle__box">
            <img class="fishicon" src="{{ asset('assets/images/svg/icon_fish__second.svg') }}" alt="icon_fish__second.svg">
            <h2 class="pagetitle fishtitle">徳島で釣れる魚</h2>
        </div>
        <div class="pagetitle__border fishbottom"></div>

        <div class="d-demo">
            <div class="d-demo__wrap">
                <ul class="d-demo__list d-demo__list--left">
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 1]) }}">
                            <div class='arrow_box'>アジ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 2]) }}">
                            <div class='arrow_box'>イワシ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 3]) }}">
                            <div class='arrow_box'>メバル</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 4]) }}">
                            <div class='arrow_box'>チヌ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 5]) }}">
                            <div class='arrow_box'>シーバス</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                </ul>
                <ul class="d-demo__list d-demo__list--left">
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 1]) }}">
                            <div class='arrow_box'>アジ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 2]) }}">
                            <div class='arrow_box'>イワシ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 3]) }}">
                            <div class='arrow_box'>メバル</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 4]) }}">
                            <div class='arrow_box'>チヌ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 5]) }}">
                            <div class='arrow_box'>シーバス</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="d-demo">
            <div class="d-demo__wrap">
                <ul class="d-demo__list d-demo__list--left2">
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 3]) }}">
                            <div class='arrow_box'>メバル</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 4]) }}">
                            <div class='arrow_box'>チヌ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 5]) }}">
                            <div class='arrow_box'>シーバス</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 1]) }}">
                            <div class='arrow_box'>アジ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 2]) }}">
                            <div class='arrow_box'>イワシ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                </ul>
                <ul class="d-demo__list d-demo__list--left2">
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 3]) }}">
                            <div class='arrow_box'>メバル</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 4]) }}">
                            <div class='arrow_box'>チヌ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 5]) }}">
                            <div class='arrow_box'>シーバス</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 1]) }}">
                            <div class='arrow_box'>アジ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                    <li class="d-demo__item">
                        <a class="flex" href="{{ route('fishinfo', ['id' => 2]) }}">
                            <div class='arrow_box'>イワシ</div>
                            <div class="fishimgblock"><img src="{{ asset('assets/images/aji-img.png') }}"
                                    alt="aji-img.png"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </section>


    <section class="infomationsection">
        <h2 class="pagetitle">infomation</h2>
        <div class="pagetitle__border"></div>
        <div class="infomation__block">
            @foreach ($items as $key => $item)
                <a href="{{ route('newsinfo', ['id' => $items[$key]]) }}" class="flex">
                    @php
                        $ts = strtotime($item->created_at);
                    @endphp
                    <p class="info__day">
                        {{ date('Y.m.d', $ts) }}
                    </p>
                    <p>
                        {{ $item->title }}
                    </p>
                </a>
                <div class="infomation__border"></div>
            @endforeach
            <a href="{{ route('news') }}" class="infobtn btn">もっと見る</a>
        </div>
    </section>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
