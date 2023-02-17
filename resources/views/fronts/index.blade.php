@extends('layouts.layout_front')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'トップページ')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

@section('key_visual')
    <div class="keyvisual expand">
        キービジュアル
    </div>
@endsection

{{-- メイン --}}
@section('content')

    <section class="firstsection expand">

        <h2 class="section__box--title ">第一セクション</h2>

        <div>
            <div class="btn">基礎ボタン</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>

    </section>
    <!-- <div class="background__wrap"> -->
    <div class="firstsection__bottom expand"></div>
    <!-- </div> -->
    <section>
        <h2>釣りスポット</h2>
        <div>東部</div>
        <!--botan -->
        <div>南部</div>
        <!--botan -->
    </section>

    <section>
        <h2>体験プラン</h2>
        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>

        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>

        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>
        <a href=""> もっと見る</a>
    </section>

    <section>
        <h2>徳島で釣れる魚</h2>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
    </section>

    <section>
        <h2>infomation</h2>
        <div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
        </div>
        <a href=""> もっと見る</a>
    </section>

    {{-- <section class="firstsection">
        <h2>入門知識</h2>
        <div>
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
        </div>

        <h2>釣りスポット</h2>
        <div>
            <a href="{{ route('spotslist', ['city_id' => 1]) }}">東部</a>
        </div>
        <div>
            <a href="{{ route('spotslist', ['city_id' => 2]) }}">南部</a>
        </div>
    </section>

    <div class="firstsection__bottom"></div>

    <section>
        <h2>体験プラン</h2>
        <div>
            <a href="{{ route('plansinfo', ['id' => 1]) }}">アジをサビキ釣り</a>
        </div>
        <div>
            <a href="{{ route('plansinfo', ['id' => 2]) }}">ウキ釣りでアジを釣る</a>
        </div>
        <div>
            <a href="{{ route('plansinfo', ['id' => 1]) }}">アジをサビキ釣り</a>
        </div>
        <div>
            <a href="{{ route('planslist') }}">もっとみる</a>
        </div>
    </section>

    <section>
        <h2>徳島で釣れる魚</h2>
        <div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 2]) }}">イワシ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 3]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 2]) }}">イワシ</a>
            </div>
        </div>
        <div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 3]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 2]) }}">イワシ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 3]) }}">アジ</a>
            </div>
            <div>
                <a href="{{ route('fishinfo', ['id' => 1]) }}">アジ</a>
            </div>
        </div>
    </section>

    <section>
        <h2>Infomation</h2>
        <div>
            @foreach ($items as $key => $item)
                <a href="{{ route('newsinfo', ['id' => $items[$key]]) }}">
                    <ul>
                        <li>{{ $item->created_at }}</li>
                        <li>{{ $item->title }}</li>
                    </ul>
                </a>
            @endforeach
        </div>
        <div>
            <a href="{{ route('news') }}">もっとみる</a>
        </div>
    </section> --}}


@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
