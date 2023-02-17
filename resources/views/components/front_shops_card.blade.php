<!-- カードの構造 -->
<div class="section__content">
    <div class="section__content--left">

        <div>{{ $shop_name }}</div>

        <div><img src="../assets/images/img_neko_700_3.jpg" alt="お店の外観"></div>

        <!-- 疑似要素でアイコンを追加する -->
        <div class="section__image--location">{{ $shop_address }}</div>

        <div class="section__image--open">営業時間</div>
        <div class="section__content--day">
            <p class="section__content--dayleft">{{ $shop_service_day }}</p>
        </div>

        <div class="section__image--number">電話番号 {{ $shop_tel }}</div>
        <div class="section__image--address">メールアドレス {{ $shop_email }}</div>

        <div class="section__image--homepage">
            ホームページ <a href="http://www.iharatsurigu.co.jp/wp/"><span>こちらから</span></a>
        </div>

    </div>

    <div class="section__image--service section__content--left">サービス内容</div>

    <div class="section__content--margin">
        <div class="store__description">
            <p class="store__description--margin">
                {{ $shop_service }}
            </p>
        </div>
    </div>

    <div class="section__image--message section__content--left">お店からのメッセージ</div>

    <div class="section__content--margin">
        <div class="store__description">
            <p class="store__description--margin">
                {{ $shop_pr }}
            </p>
        </div>
    </div>

    <!-- 疑似要素でアイコンを追加する -->
    <div class="section__image--information section__content--left">お店の周辺情報</div>

    <!-- Googleマップで周辺情報を表す -->
    <div class="section__wrap--infomation">
        <iframe src="{{ $shop_iframe }}" width="100%" height="300" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"frameborder="0"></iframe>
    </div>
</div>
<!-- /カードの構造 -->
