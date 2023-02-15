<header id="header">
    <div class="header flex">
        <div class="header__box--group">
        </div>
        <div class="header__box--border"></div>
        <img src="{{ asset('assets/images/img_neko_700_3.jpg') }}" alt="ネコの画像" class="header__logo">
        <!-- ハンバーガーメニュー -->
        <div class="hamburger flex">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="header__box">
            <div class="g-nav flex">
                <img src="{{ asset('assets/images/img_neko_700_3.jpg') }}"" alt="ネコの画像" class="logo__img">
                <div class="g-nav__box">
                    <div class="g-nav__box--section flex">
                        <div class="g-nav__box--group">
                            <a href="{{ route('knowledgelist') }}" class="g-nav__box--discription">
                                <img src="{{ asset('assets/images/fishing_boat_man.png') }}" alt="魚釣り男"
                                    class="g-nav__box--img">
                                <div class="g-nav__box--text">入門知識</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('fishlist') }}" class="g-nav__box--discription">
                                <img src="{{ asset('assets/images/fishing_boat_man.png') }}" alt="魚釣り男"
                                    class="g-nav__box--img">
                                <div>徳島の魚</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('spotslist') }}" class="g-nav__box--discription">
                                <img src="{{ asset('assets/images/fishing_boat_man.png') }}" alt="魚釣り男"
                                    class="g-nav__box--img">
                                <div>釣りスポット</div>
                            </a>
                        </div>
                    </div>
                    <div class="g-nav__box--section flex">
                        <div class="g-nav__box--group">
                            <a href="{{ route('planlist') }}" class="g-nav__box--discription">
                                <img src="{{ asset('assets/images/fishing_boat_man.png') }}" alt="魚釣り男"
                                    class="g-nav__box--img">
                                <div>体験プラン</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('shopslist') }}" class="g-nav__box--discription">
                                <img src="{{ asset('assets/images/fishing_boat_man.png') }}" alt="魚釣り男"
                                    class="g-nav__box--img">
                                <div>釣具店</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('mypage') }}" class="g-nav__box--discription">
                                <img src="{{ asset('assets/images/fishing_boat_man.png') }}" alt="魚釣り男"
                                    class="g-nav__box--img">
                                <div>マイページ</div>
                            </a>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#30ADD1" fill-opacity="1"
                            d="M0,64L30,85.3C60,107,120,149,180,144C240,139,300,85,360,80C420,75,480,117,540,149.3C600,181,660,203,720,213.3C780,224,840,224,900,202.7C960,181,1020,139,1080,106.7C1140,75,1200,53,1260,69.3C1320,85,1380,139,1410,165.3L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                        </path>
                    </svg>
                </div>
                <div class="g-nav__link flex">
                    <a href="{{ route('escapelist') }}" class="g-nav__link--text">避難場所</a>
                    <a href="{{ route('mypage') }}" class="g-nav__link--text">プライバシーポリシー</a>
                </div>
            </div>
        </div>
    </div>

    {{-- キービジュアル --}}
    @yield('key_visual')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">@yield('title')</h1>
            <div class="pagetitle__border"></div>
        </div>
        <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish1">
        <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish2">
        <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish3">

    </section>
</header>
