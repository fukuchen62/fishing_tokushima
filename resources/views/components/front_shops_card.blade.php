<!-- カードの構造 -->

<div class="spot__map" id="east__content">
    <div class="area active">
        <div class="spot__map--points">
            <div class="section__content section__content--displayflex">


                <div class="section__content--photomaxwidth">
                    <img class="section__content--photo" src="{{ asset('storage/images') }}/{{ $shop_img}}" alt="{{ $shop_img}}">
                </div>

                <div class="section__content--left">

                    <div class="section__content--full">
                        <div class="section__content--title">{{ $shop_name }}</div>
                        <div class="section__content--displayblock">
                            <!-- 疑似要素でアイコンを追加する -->
                            <div class="section__image--location">{{ $shop_address }}</div>

                            <div class="section__image--open">営業時間</div>
                            <div class="section__content--day">{{ $shop_service_day }}</div>

                            <div class="section__image--number">電話番号 {{ $shop_tel }}</div>
                            <div class="section__image--address">メールアドレス {{ $shop_email }}</div>

                            <div class="section__image--homepage">
                                ホームページ <a href="http://www.iharatsurigu.co.jp/wp/"><span>こちらから</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section__content--displayflex section__content--top flex__content">

                <div class="section__content--displayblock">
                    <div class="section__image--service section__content--left">サービス内容</div>

                    <div class="section__content--margin">
                        <div class="shop__description--service">{{ $shop_service }}</div>
                    </div>
                </div>

                <div class="section__content--displayblock section__content--topmessage">
                    <div class="section__image--message section__content--left">お店からのメッセージ</div>

                    <div class="section__content--margin">
                        <div class="shop__description--message">{{ $shop_pr }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /カードの構造 -->
