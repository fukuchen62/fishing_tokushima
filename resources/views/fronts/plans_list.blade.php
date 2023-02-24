@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '条件検索')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/plan.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plan_search.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    <div class="container">
        <section class="form__section">
            <div class="form__box">
                <div class="form__box--title">
                    <h2>チェックしてみよう</h2>
                </div>
                <form action="{{ route('planslist') }}" method="post">
                    @csrf
                    <div class="search__box">
                        <div class="choice__box">
                            <h3 class="search__box--title">地域</h3>
                            <ul id="area" class="radio_box">
                                <li class="choice__box--item">
                                    <input type="checkbox" name="area[]" id="east" value="1" class="checkbox_list"
                                        >
                                    <label for="east" class="s_search_btn">県東部</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="area[]" id="south" value="2" class="checkbox_list"
                                        >
                                    <label for="south" class="s_search_btn">県南部</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="area[]" id="west" value="3" class="checkbox_list" disabled
                                        >
                                    <label for="west" class="s_search_btn">県西部</label>
                                </li>
                            </ul>
                        </div>
                        <div class="choice__box">
                            <h3 class="search__box--title">難易度</h3>
                            <ul id="level" class="radio_box">
                                <li class="choice__box--item">
                                    <input type="checkbox" name="level[]" id="one" value="1" class=""
                                        checkbox_list>
                                    <label for="one" class="s_search_btn">☆</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="level[]" id="two" value="2" class=""
                                        checkbox_list>
                                    <label for="two" class="s_search_btn">☆☆</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="level[]" id="three" value="3" class=""
                                        checkbox_list>
                                    <label for="three" class="s_search_btn">☆☆☆</label>
                                </li>
                            </ul>
                        </div>
                        <div class="choice__box">
                            <h3 class="search__box--title">魚</h3>
                            <ul id="fish" class="radio_box">
                                <li class="choice__box--item">
                                    <input type="checkbox" name="fish[]" id="aji" value="1" class=""
                                        checkbox_list>
                                    <label for="aji" class="s_search_btn">アジ</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="fish[]" id="iwashi" value="2" class=""
                                        checkbox_list>
                                    <label for="iwashi" class="s_search_btn">イワシ</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="fish[]" id="mebaru" value="3" class=""
                                        checkbox_list>
                                    <label for="mebaru" class="s_search_btn">メバル</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="fish[]" id="kurodai" value="4" class=""
                                        checkbox_list>
                                    <label for="kurodai" class="s_search_btn">クロダイ</label>
                                </li>
                                <li class="choice__box--item">
                                    <input type="checkbox" name="fish[]" id="suzuki" value="5" class=""
                                        checkbox_list>
                                    <label for="suzuki" class="s_search_btn">スズキ</label>
                                </li>
                            </ul>
                        </div>
                        <!-- ボタン -->
                        <div class="result_btn__box">
                            <!-- リセットボタン -->
                            <div class="result_btn__box--resetbtn">
                                <input type="reset" value="リセット" id="reset_btn">
                            </div>
                            <!-- 検索ボタン -->
                            <div class="result_btn__box--searchbtn">
                                <input type="submit" value="これでさがす" id="search_btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="firstsection__bottom"></div>

        <section class="result__section">
            <h2 class="section__box--title">
                <span class="btn_area_ttl">検索結果</span>
                <span class="event_num">
                    @php
                    $n=count($plans);
                    @endphp
                    ({{ $n }}件)
                    </span>
            </h2>
            <ul class="card__area">
                @foreach ($plans as $item)
                    @component('components.front_plans_card')
                        @slot('plan_link')
                            {{ route('plansinfo', ['id' => $item->id]) }}
                        @endslot

                        @slot('plan_thumbnail')
                            {{ $item->thumbnail }}
                        @endslot

                        @slot('plan_title')
                            {{ $item->title }}
                        @endslot

                        @slot('plan_city_id')
                            {{ $item->city_id }}
                        @endslot

                        @slot('plan_level')
                            {{ $item->level }}
                        @endslot
                    @endcomponent
                @endforeach
            </ul>
        </section>
    </div>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
