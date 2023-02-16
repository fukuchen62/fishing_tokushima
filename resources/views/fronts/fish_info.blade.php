@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '徳島の魚詳細')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

{{-- メイン --}}
@section('content')

    <div class="wrap">
        <div class="container">
            <section class="titlesection">
                <div class="titlesection__box">
                    <h1 class="pagetitle">{{ $item->name }}{{ '（' . $item->formal_name . '）' }}</h1>
                </div>
            </section>

            <section id="fishinfo__section" class="fishinfo__section">

                <ul class="fishinfo__box">
                    <li>
                        <div class="fishinfo__box--img">
                            <!-- slick用（仮） -->
                            <div class="your-class">
                                <div>{{ $item->fish_img1 }}</div>
                                <div>{{ $item->fish_img2 }}</div>
                                <div>{{ $item->fish_img3 }}</div>
                            </div>
                        </div>
                    </li>

                    <!-- ボタン部分？ -->
                    <!-- <div class=""></div> -->

                    <!-- 概要 -->
                    <li>
                        <div class="fishinfo__box--description">
                            <h3>概要</h3>
                            <p>{{ $item->detail }}</p>
                            <div class="fishinfo__box--feed">
                                <p class=""><img style="vertical-align: middle" src="../storage/images/fish_ebi.png"
                                        alt="エビの画像" width="35" height="40">餌の種類：アカアミ</p>
                                <h3 class="card__title">難易度</h3>
                                <div><?php echo $item->getLevel(); ?></div>
                            </div>
                    </li>
                </ul>
        </div>
    </div>
    <div class="fishes__table">
        <h3 class="table__title">詳細情報</h3>
        <table class="table radius-table">
            <tr class="table__tr">
                <td class="table__subtitle">季節・時間帯</td>
                <td>{{ $item->getMonth() }}</td>
            </tr>
            <tr class="table__tr">
                <td class="table__subtitle">釣れる場所</td>
                <td>
                    @foreach ($spots as $spot)
                        {{ $spot->name }},
                    @endforeach
                </td>
            </tr>
            <tr class="table__tr">
                <td class="table__subtitle">釣り方</td>
                <td>{{ $item->method }}</td>
            </tr>
        </table>
    </div>

    <!-- おいしい食べ方 -->
    <div class="fishes__box--description">
        <ul class="fishinfo__box--food">
            <li>
                <div>{{ $item->cooking_img1 }}</div>
                <div>{{ $item->cooking_img2 }}</div>
                <div>{{ $item->cooking_img3 }}</div>
            </li>
            <li>
                <div class="traiangle"></div>
            </li>
            <li>
                <div class="fishinfo__box--text">
                    <h3>おいしい食べ方</h3>
                    <p>{{ $item->cooking1 }}</p>
                    <p>{{ $item->cooking2 }}</p>
                    <p>{{ $item->cooking3 }}</p>
                    <p>食べ方の詳細？</p>
            </li>
        </ul>
    </div>

    </div>

    <!-- 装飾（貝）の画像 -->
    <div>
        <ul class="fishesinfo__img--shell">
            <li><img src="../storage/images/shell-1.png" width="40" height="40" alt=""></li>
            <li><img src="../storage/images/shell-2.png" width="40" height="40" alt=""></li>
            <li><img src="../storage/images/shell-3.png" width="40" height="40" alt=""></li>
            <li><img src="../storage/images/ukiwa.png" width="40" height="40" alt=""></li>
            <li><img src="../storage/images/shell-1.png" width="40" height="40" alt=""></li>
            <li><img src="../storage/images/shell-2.png" width="40" height="40" alt=""></li>
            <li><img src="../storage/images/shell-3.png" width="40" height="40" alt=""></li>
        </ul>
    </div>
    </section>

    <!-- 保存方法・注意事項 -->
    <section class="preservation__section">
        <div class="preservation__box">
            <h3>保存方法</h3>
            <p>アジや小魚の締め方は氷締めがもっともいいとされる。<br>
                氷水（氷＋海水）を張ったクーラーに魚を入れて締める。<br>
                要するに凍死させてしまうわけだ。
                魚体の中を血が巡りながら締まっていくので、内臓奥の血合いが残りにくく、またワタのニオイも身に移らない。</p>
        </div>

        <!-- ウミガメ装飾 -->
        <div class="fishesinfo__decoration">
            <ul class="fishesinfo__img--turtle">
                <li class="fishesinfo__foam1"></li>
                <li class="fishesinfo__foam2"></li>
                <li><img src="../storage/images/umigame-1.png" width="100" height="100" alt="ウミガメ"></li>
                <li><img src="../storage/images/umigame-2.png" width="100" height="100" alt="ウミガメ"></li>
            </ul>
        </div>


        <div class="note__box">
            <h3>注意事項</h3>
            <p>{{ $item->warning }}</p>
        </div>
    </section>

    <!-- 釣れるスポット -->
    <section class="spot__section">
        <div class="spot__box">
            <h2 class="spot__box--title">釣れるスポット</h2>
            <ul class="spot__box--list">
                @foreach ($spots as $key => $spot)
                    @component('components.front_fish_info_card')
                        @slot('spot_link')
                            {{ route('spotsinfo', ['id' => $spots[$key]]) }}
                        @endslot
                        @slot('spot_alt')
                            {{ $spot->name }}
                        @endslot
                        @slot('spot_src')
                            {{ $spot->img1 }}
                        @endslot
                        @slot('spot_name')
                            {{ $spot->name }}
                        @endslot
                        @slot('spot_overview')
                            {{ $spot->overview }}
                        @endslot
                    @endcomponent
                @endforeach
            </ul>
        </div>
    </section>

    <!-- そのほかの魚 -->
    <section class="recommend__section">
        <div class="recommend__box">
            <h2 class="recommend__box--title">その他の魚</h2>
            <ul class="recommend__box--list">
                @foreach ($fishlist as $key => $fish)
                    @component('components.front_fish_info_card')
                        @slot('spot_link')
                            {{ route('fishinfo', ['id' => $fishlist[$key]]) }}
                        @endslot
                        @slot('spot_alt')
                            {{ $fish->name }}
                        @endslot
                        @slot('spot_src')
                            {{ $fish->fish_img1 }}
                        @endslot
                        @slot('spot_name')
                            {{ $fish->name }}
                        @endslot
                        @slot('spot_overview')
                            {{ $fish->detail }}
                        @endslot
                    @endcomponent
                @endforeach
            </ul>
        </div>
    </section>

    </div>


    <div id="page_top" class="flex">
        <a href="#"><img src="./assets/images/fish hook.png" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
