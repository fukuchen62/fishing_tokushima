<div class="road_for_uncle">

    <a href="{{ route('front.landing') }}" style="width: fit-content; display:block;">
        <img class="key_visual_sub_image key_visual_sub_imageAnimation" src="{{ asset('img/keitora_hata_sudachi.png') }}"
            alt="収穫されるおっちゃん" srcset="">

    </a>

</div>

<footer class="footer">
    <div class="footer_nav_wrapper">
        <div class="footer_nav">
            <ul>
                <li><a href="{{ route('front.landing') }}">あわ☆しょーと！について</a></li>
                <li><a href="{{ route('front.article') }}">とくしまIT情報</a></li>
                <li><a href="{{ route('front.shortcut_list') }}">ショートカット一覧</a></li>
            </ul>
        </div>
        <div class="footer_nav">
            <ul>


                <li><a href="{{ route('front.about_us') }}">私たちについて</a></li>
                <li><a href="{{ route('front.privacy_policy') }}">プライバシーポリシー</a></li>
                <li><a href="{{ route('front.contact') }}">お問い合わせ</a></li>
                <li><a href="back_login">管理画面ログイン</a></li>

            </ul>
        </div>
    </div>
    <!-- .footer_nav -->
    <div class="sns_icon">
        {{-- リンクのURLをドメインに変える --}}
        <a href="https://twitter.com/share?text=ショートカットバトルしようぜ！&url=https://awa-short.com" target="_black"
            rel="noopener norefrrer"><img src="{{ asset('img/2021_Twitter_logo-white.png') }}" alt="twitterロゴ"
                class="twitter_logo"></a>
        {{-- <a href=""><img src="{{ asset('img/f_logo_RGB-White_72.png') }}" alt="facebookロゴ"
                class="facebook_logo"></a> --}}
    </div>
    <p class="copyright">
        {{-- <small>©2022 遖</small> --}}
        <small>(C) 2022 遖</small>
    </p>
    <!-- .copyright -->
</footer>
