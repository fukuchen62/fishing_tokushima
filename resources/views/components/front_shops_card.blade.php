<div class="p__lr">
    <div class="shop__content">
        <div class="section__content section__content--displayflex">
            <div class="section__content--photomaxwidth">
                <img class="section__content--photo" src="{{ asset('storage/images') }}/{{ $shop_img }}"
                    alt="お店の外観">
            </div>
            <div class="section__content--left">
                <div class="section__content--full">
                    <!-- tableにする -->
                    <table class="shop__table">
                        <tr>
                            <th colspan="2">{{ $shop_name }}</th>
                        </tr>
                        <tr>
                            <td class="section__image--location">住所</td>
                            <td>{{ $shop_address }}</td>
                        </tr>
                        <tr>
                            <td class="section__image--open">営業時間</td>
                            <td>{{ $shop_service_day }}</td>
                        </tr>
                        <tr>
                            <td class="section__image--number">電話番号</td>
                            <td>{{ $shop_tel }}</td>
                        </tr>
                        <tr>
                            <td class="section__image--address">メールアドレス</td>
                            <td>{{ $shop_email }}</td>
                        </tr>
                        <tr>
                            <td class="section__image--homepage">ホームページ</td>
                            <td><a href="{{ $shop_url }}">{{ $shop_url }}</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="section__content--displayflex section__content--top flex__content">

            <div class="section__content--displayblock">
                <div class="shop__content--title section__content--left">サービス内容</div>

                <div class="section__content--margin">
                    <div class="shop__description--service">
                        {{ $shop_service }}
                    </div>
                </div>
            </div>

            <div class="section__content--displayblock section__content--topmessage">
                <div class="shop__content--title section__content--left">お店からのメッセージ</div>

                <div class="section__content--margin">
                    <div class="shop__description--message">
                        {{ $shop_pr }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
