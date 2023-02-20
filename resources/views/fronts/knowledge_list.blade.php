@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '入門知識')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/knowledge.css') }}">
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
                for="tab01"><a href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a></label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab02" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab02"><a href="{{ route('knowledgelist', ['category_id' => 2]) }}">釣り道具・餌</a></label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab03" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab03"><a href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a></label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab04" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab04"><a href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a></label>
            <div class="tab-content">
                カード
            </div>

        </div>

        @foreach ($knowledges as $item)
            @component('components.front_card')
                @slot('card_link')
                    {{ route('knowledgeinfo', ['id' => $item->id]) }}
                @endslot
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

    {{-- ---------------------------------------- --}}

        <section class="firstsection expand">

            <div class="tabs p__lr">
                <input id="all" type="radio" name="tab_item" checked>
                <label class="tab_item" for="all"><span class="title__icon">基礎知識</span></label>

                <input id="programming" type="radio" name="tab_item">
                <label class="tab_item" for="programming"><span class="title__icon">道具・餌</span></label>

                <input id="design" type="radio" name="tab_item">
                <label class="tab_item" for="design"><span class="title__icon">注意点</span></label>

                <input id="other" type="radio" name="tab_item">

                <label class="tab_item" for="other"><span class="title__icon">その他</span></label>

                <div class="tab_content" id="all_content">

                    <div class="panel-area">
                        <div class="panel active">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <div class="imgbox">
                                            <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        </div>
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="tab-area flex">
                        <li class="tab active">1</li>
                        <li class="tab">2</li>
                        <li class="tab">3</li>
                        <li class="tab ">4</li>
                        <li class="tab">5</li>
                        <li class="tab">6</li>
                    </ul>


                </div>

                <div class="tab_content" id="programming_content">
                    <div class="panel-area">
                        <div class="panel active">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="tab-area flex">
                        <li class="tab active">1</li>
                        <li class="tab">2</li>
                        <li class="tab">3</li>
                        <li class="tab ">4</li>
                        <li class="tab">5</li>
                        <li class="tab">6</li>
                    </ul>

                </div>

                <div class="tab_content" id="design_content">
                    <div class="panel-area">
                        <div class="panel active">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="tab-area flex">
                        <li class="tab active">1</li>
                        <li class="tab">2</li>
                        <li class="tab">3</li>
                        <li class="tab ">4</li>
                        <li class="tab">5</li>
                        <li class="tab">6</li>
                    </ul>
                </div>

                <div class="tab_content" id="other_content">
                    <div class="panel-area">
                        <div class="panel active">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel">
                            <ul class="card__area flex">
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="card__p">
                                    <a class="card card__skin" href="">
                                        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
                                        <div class="card__textbox">
                                            <h3 class="card__title">タイトルタイトル</h3>
                                            <p class="card__description">説明説明説明説明説明説明</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="tab-area flex">
                        <li class="tab active">1</li>
                        <li class="tab">2</li>
                        <li class="tab">3</li>
                        <li class="tab ">4</li>
                        <li class="tab">5</li>
                        <li class="tab">6</li>
                    </ul>
                </div>

        </section>
        <div class="firstsection__bottom expand"></div>



        <div id="page_top" class="flex">
            <!-- 余裕があれば魚が釣られるアニメーションを追加 -->
            <!-- <img src=".//assets/images/fish_yellow.png" alt="黄色魚" class="topbutton__fish"> -->
            <a href="#"><img src="../assets/images/fish hook.png" alt="釣り針" class="topbutton__hook"></a>
        </div>
        {{----------------- フロント班からのもの -------------------}}

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">入門知識</h1>
        </div>
    </section>

    <section class="firstsection">

        <div class="tab-wrap">
            <input id="tab01" type="radio" name="tab" class="tab-switch" checked="checked"><label class="tab-label"
                for="tab01"><a href="{{ route('knowledgelist', ['category_id' => 1]) }}">基礎知識</a></label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab02" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab02"><a href="{{ route('knowledgelist', ['category_id' => 2]) }}">釣り道具・餌</a></label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab03" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab03"><a href="{{ route('knowledgelist', ['category_id' => 3]) }}">注意点</a></label>
            <div class="tab-content">
                カード
            </div>

            <input id="tab04" type="radio" name="tab" class="tab-switch"><label class="tab-label"
                for="tab04"><a href="{{ route('knowledgelist', ['category_id' => 4]) }}">その他</a></label>
            <div class="tab-content">
                カード
            </div>

        </div>

        @foreach ($knowledges as $item)
            @component('components.front_card')
                @slot('card_link')
                    {{ route('knowledgeinfo', ['id' => $item->id]) }}
                @endslot
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
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
