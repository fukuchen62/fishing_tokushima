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

                <div class="section__content">
                    <div class="section__content--left">

                        <div>{{ $item->name }}</div>

                        <div><img src="../assets/images/img_neko_700_3.jpg" alt="お店の外観"></div>

                        <!-- 疑似要素でアイコンを追加する -->
                        <div class="section__image--location">{{ $item->address }}</div>

                        <div class="section__image--open">営業時間</div>
                        <div class="section__content--day">
                            <p class="section__content--dayleft">{{ $item->service_day }}</p>
                        </div>

                        <div class="section__image--number">電話番号 {{ $item->tel }}</div>
                        <div class="section__image--address">メールアドレス {{ $item->email }}</div>

                        <div class="section__image--homepage">
                            ホームページ <a href="http://www.iharatsurigu.co.jp/wp/"><span>こちらから</span></a>
                        </div>

                    </div>


                    <div class="section__image--service section__content--left">サービス内容</div>

                    <div class="section__content--margin">
                        <div class="store__description">
                            <p class="store__description--margin">
                                {{ $item->service }}
                            </p>
                        </div>
                    </div>

                    <div class="section__image--message section__content--left">お店からのメッセージ</div>

                    <div class="section__content--margin">
                        <div class="store__description">
                            <p class="store__description--margin">
                                {{ $item->pr }}
                            </p>
                        </div>
                    </div>

                    <!-- 疑似要素でアイコンを追加する -->
                    <div class="section__image--information section__content--left">お店の周辺情報</div>

                    <!-- Googleマップで周辺情報を表す -->
                    <div class="section__wrap--infomation">
                        {{ $item->iframe }}
                        {{-- <iframe class="section__map--information"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105749.94989893542!2d134.50598449901784!3d34.07756439038653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536e59cfa2e1a5%3A0xfc218cb261e84ce7!2z44GE44Gv44KJ6Yej5YW3!5e0!3m2!1sja!2sjp!4v1676339393022!5m2!1sja!2sjp"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe> --}}
                    </div>
                </div>

                @endforeach
        </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
