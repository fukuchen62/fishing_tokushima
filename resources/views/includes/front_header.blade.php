<header id="header">

    <div class="header expand flex">
        <div class="header__box--group expand">
        </div>
        <div class="header__box--border expand"></div>
        <img src="./assets/images/img_neko_700_3.jpg" alt="ネコの画像" class="header__logo expand">
        <!-- ハンバーガーメニュー -->
        <div class="hamburger flex expand">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header__box expand">
            <div class="g-nav flex  expand">
                <img src="./assets/images/img_neko_700_3.jpg" alt="サイトロゴ" class="logo__img">
                <div class="g-nav__box ">
                    <div class="g-nav__box--section flex">
                        <div class="g-nav__box--group">
                            <a href="{{ route('knowledgelist') }}" class="g-nav__box--discription">
                                <svg class="g-nav__icon" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="circle__knowledge"
                                        d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z"
                                        fill="#1CB20F" />
                                    <path class="draw draw__knowledge"
                                        d="M35.2727 12.6765C33.7591 12.2029 32.0955 12 30.5 12C27.8409 12 24.9773 12.5412 23 14.0294C21.0227 12.5412 18.1591 12 15.5 12C12.8409 12 9.97727 12.5412 8 14.0294V33.85C8 34.1882 8.34091 34.5265 8.68182 34.5265C8.81818 34.5265 8.88636 34.4588 9.02273 34.4588C10.8636 33.5794 13.5227 32.9706 15.5 32.9706C18.1591 32.9706 21.0227 33.5118 23 35C24.8409 33.85 28.1818 32.9706 30.5 32.9706C32.75 32.9706 35.0682 33.3765 36.9773 34.3912C37.1136 34.4588 37.1818 34.4588 37.3182 34.4588C37.6591 34.4588 38 34.1206 38 33.7824V14.0294C37.1818 13.4206 36.2955 13.0147 35.2727 12.6765ZM35.2727 30.9412C33.7727 30.4676 32.1364 30.2647 30.5 30.2647C28.1818 30.2647 24.8409 31.1441 23 32.2941V16.7353C24.8409 15.5853 28.1818 14.7059 30.5 14.7059C32.1364 14.7059 33.7727 14.9088 35.2727 15.3824V30.9412Z"
                                        fill="white" />
                                    <path class="draw draw__knowledge"
                                        d="M30.7857 21.11C31.9171 21.11 33.01 21.2366 34 21.4757V19.3376C32.9843 19.1266 31.8914 19 30.7857 19C28.6 19 26.62 19.4079 25 20.1675V22.5026C26.4529 21.6023 28.4714 21.11 30.7857 21.11ZM25 23.9092V26.2442C26.4529 25.344 28.4714 24.8517 30.7857 24.8517C31.9171 24.8517 33.01 24.9783 34 25.2174V23.0793C32.9843 22.8683 31.8914 22.7417 30.7857 22.7417C28.6 22.7417 26.62 23.1637 25 23.9092ZM30.7857 26.4974C28.6 26.4974 26.62 26.9054 25 27.665V30C26.4529 29.0997 28.4714 28.6074 30.7857 28.6074C31.9171 28.6074 33.01 28.734 34 28.9731V26.835C32.9843 26.61 31.8914 26.4974 30.7857 26.4974Z"
                                        fill="white" />
                                </svg>
                                <div class="g-nav__box--text">入門知識</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('fishlist') }}" class="g-nav__box--discription">
                                <svg class="g-nav__icon" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="circle__fish"
                                        d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z"
                                        fill="#1A6CE8" />
                                    <path class="draw draw__fish"
                                        d="M29.3151 23.5C29.3143 20.8057 30.0415 18.1592 31.423 15.8295L31.9754 14.8878C30.8175 14.6178 29.6378 14.4479 28.4497 14.38C26.8594 13.1797 24.4891 11.7557 21.7564 11.3026L20.0769 11L21.046 15.3935C18.0256 16.3977 15.361 18.4375 13.5975 19.8409C13.2563 19.5611 12.8992 19.2876 12.5261 19.0206C9.64775 16.9609 6.53886 16.7621 6.40839 16.755L5 16.6818L5.19354 18.0533C5.21456 18.1953 5.68571 21.2301 7.48769 23.4879C5.68571 25.7464 5.21746 28.7791 5.19354 28.9233L5 30.3182L6.40839 30.2216C6.53886 30.2145 9.64775 30.0163 12.5261 27.956C12.8924 27.6941 13.2442 27.425 13.5815 27.1484C15.348 28.5568 18.0133 30.6001 21.0373 31.6044L20.0769 36L21.7564 35.7003C24.4739 35.25 26.8362 33.8253 28.425 32.6236C29.6297 32.5553 30.826 32.3835 32 32.1101L31.4266 31.174C30.0436 28.8436 29.315 26.1958 29.3151 23.5Z"
                                        fill="white" />
                                    <path class="draw draw__fish"
                                        d="M40.2273 21.1989C39.8631 20.5342 39.1975 19.5238 38.0986 18.4891C36.9546 17.4246 35.6485 16.5825 34.2383 16L33.5429 17.3139C32.5332 19.1923 32.001 21.3256 32 23.4978C31.999 25.6701 32.5293 27.804 33.5373 29.6835L34.2688 31C35.6644 30.4246 36.9579 29.5943 38.093 28.5452C40.0692 26.6965 41 24.3776 41 23.503C41 22.6749 40.5019 21.7041 40.2273 21.1989ZM35.0228 23.503C34.8258 23.503 34.6332 23.4399 34.4694 23.3216C34.3055 23.2034 34.1779 23.0352 34.1025 22.8386C34.0271 22.6419 34.0073 22.4255 34.0458 22.2167C34.0842 22.0079 34.1791 21.8161 34.3184 21.6655C34.4577 21.515 34.6352 21.4125 34.8285 21.371C35.0217 21.3294 35.222 21.3507 35.4041 21.4322C35.5861 21.5137 35.7417 21.6516 35.8511 21.8286C35.9606 22.0057 36.019 22.2138 36.019 22.4266C36.019 22.7121 35.9141 22.9859 35.7272 23.1878C35.5404 23.3896 35.287 23.503 35.0228 23.503Z"
                                        fill="white" />
                                </svg>
                                <div>徳島の魚</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('spotslist') }}" class="g-nav__box--discription">
                                <svg class="g-nav__icon" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="circle__spot"
                                        d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z"
                                        fill="#FF0000" />
                                    <path class="draw draw__spot"
                                        d="M23 21.5C23.7563 21.5 24.4039 21.2354 24.9429 20.7062C25.481 20.1779 25.75 19.5425 25.75 18.8C25.75 18.0575 25.481 17.4217 24.9429 16.8925C24.4039 16.3641 23.7563 16.1 23 16.1C22.2437 16.1 21.5966 16.3641 21.0585 16.8925C20.5195 17.4217 20.25 18.0575 20.25 18.8C20.25 19.5425 20.5195 20.1779 21.0585 20.7062C21.5966 21.2354 22.2437 21.5 23 21.5ZM23 35C19.3104 31.9175 16.5549 29.0542 14.7335 26.41C12.9112 23.7667 12 21.32 12 19.07C12 15.695 13.106 13.0062 15.3179 11.0037C17.5289 9.00125 20.0896 8 23 8C25.9104 8 28.4711 9.00125 30.6821 11.0037C32.894 13.0062 34 15.695 34 19.07C34 21.32 33.0893 23.7667 31.2679 26.41C29.4455 29.0542 26.6896 31.9175 23 35Z"
                                        fill="white" />
                                </svg>

                                <div>釣りスポット</div>
                            </a>
                        </div>
                    </div>
                    <div class="g-nav__box--section flex">
                        <div class="g-nav__box--group">
                            <a href="{{ route('planslist') }}" class="g-nav__box--discription">
                                <svg class="g-nav__icon" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="circle__plan"
                                        d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z"
                                        fill="#E89026" />
                                    <path class="draw draw__plan"
                                        d="M20.5905 29.8085L14 26.0869H33.8C34.3835 26.0869 34.9431 26.2988 35.3556 26.6759C35.7682 27.053 36 27.5645 36 28.0978C36 28.6312 35.7682 29.1427 35.3556 29.5198C34.9431 29.8969 34.3835 30.1088 33.8 30.1088H21.7469C21.3384 30.1087 20.938 30.0048 20.5905 29.8085Z"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path class="draw draw__plan"
                                        d="M27.5 13.0164C27.8978 13.0164 28.2794 12.8575 28.5607 12.5746C28.842 12.2918 29 11.9082 29 11.5082C29 11.1082 28.842 10.7246 28.5607 10.4417C28.2794 10.1589 27.8978 10 27.5 10C27.1022 10 26.7206 10.1589 26.4393 10.4417C26.158 10.7246 26 11.1082 26 11.5082C26 11.9082 26.158 12.2918 26.4393 12.5746C26.7206 12.8575 27.1022 13.0164 27.5 13.0164Z"
                                        stroke="white" stroke-width="3" stroke-miterlimit="2" />
                                    <path class="draw draw__plan"
                                        d="M30.0784 28.0988C33.0065 25.8365 31.9085 20.8851 31.1765 19.4266C30.4444 17.9682 29.017 16.0332 29.017 16.0332C29.017 16.0332 28.2484 16.0332 27.5163 16.7873C25.556 18.8075 24.2222 21.3119 22.3922 21.3119C20.5621 21.3119 18 19.8037 18 19.8037"
                                        stroke="white" stroke-width="3" stroke-miterlimit="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path class="draw draw__plan"
                                        d="M20.1111 15.9999C17.514 12.7655 15.4997 11.2764 11.4444 11.0088C10.6493 10.9563 10 11.6081 10 12.403V25.3518M10.7222 36.1424C13.6111 36.1424 12.8441 34.7037 15.0556 34.7037C17.2677 34.7037 16.5 36.1424 19.0278 36.1424C21.5556 36.1424 20.8333 34.7037 23.3611 34.7037C25.8889 34.7037 25.483 36.1424 27.6944 36.1424C29.9066 36.1424 28.7778 34.7037 31.3056 34.7037C33.8333 34.7037 33.1566 36.1424 36 36.1424"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div>体験プラン</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('shopslist') }}" class="g-nav__box--discription">
                                <svg class="g-nav__icon" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="circle__shop"
                                        d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z"
                                        fill="#BAAA14" />
                                    <path class="draw draw__shop"
                                        d="M8.45455 16.3125L7 23.5V26.375H8.45455V35H23V26.375H28.8182V35H31.7273V26.375H33.1818V23.5L31.7273 16.3125H8.45455ZM20.0909 32.125H11.3636V26.375H20.0909V32.125ZM31.7273 14.875H8.45455V12H31.7273V14.875ZM39 16.3125V24.9375H36.0909V16.3125H39ZM36.0909 27.8125H39V30.6875H36.0909V27.8125Z"
                                        fill="white" />
                                </svg>
                                <div>釣具店</div>
                            </a>
                        </div>
                        <div class="g-nav__box--group">
                            <a href="{{ route('mypage') }}" class="g-nav__box--discription">
                                <svg class="g-nav__icon" viewBox="0 0 46 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="circle__mypage"
                                        d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z"
                                        fill="#EF5DE9" />
                                    <path class="draw draw__mypage"
                                        d="M28.7406 18.6536C28.5562 18.6536 28.3833 18.6248 28.2219 18.5671C28.0605 18.5104 27.9107 18.4134 27.7723 18.2761L25.8012 16.3198C25.5245 16.0452 25.3862 15.7189 25.3862 15.3409C25.3862 14.9639 25.5245 14.6495 25.8012 14.3978C26.0548 14.1232 26.3775 13.9859 26.7695 13.9859C27.1614 13.9859 27.4842 14.1118 27.7378 14.3635L28.7406 15.3588L32.6484 11.4462C32.9251 11.1716 33.2478 11.0343 33.6167 11.0343C33.9856 11.0343 34.3199 11.1716 34.6196 11.4462C34.8732 11.7207 35 12.0525 35 12.4415C35 12.8305 34.8732 13.1508 34.6196 13.4025L29.7089 18.2761C29.5706 18.4134 29.4208 18.5104 29.2594 18.5671C29.098 18.6248 28.9251 18.6536 28.7406 18.6536ZM12.9366 34.8875C12.4755 35.0705 12.0375 35.0302 11.6225 34.7667C11.2075 34.504 11 34.121 11 33.6176V13.7457C11 12.9906 11.2711 12.344 11.8134 11.8059C12.3547 11.2686 13.0058 11 13.7666 11H23.4496C22.9885 11.6864 22.6427 12.3445 22.4121 12.9741C22.1816 13.6029 22.0663 14.3177 22.0663 15.1185C22.0663 16.7659 22.5905 18.2189 23.6391 19.4773C24.6885 20.7357 26.0086 21.5251 27.5994 21.8455C28.1297 21.9141 28.5908 21.9484 28.9827 21.9484C29.3746 21.9484 29.8357 21.9141 30.366 21.8455V33.6176C30.366 34.121 30.1585 34.504 29.7435 34.7667C29.3285 35.0302 28.8905 35.0705 28.4294 34.8875L20.683 31.5926L12.9366 34.8875Z"
                                        fill="white" />
                                </svg>
                                <div>マイページ</div>
                            </a>
                        </div>
                    </div>
                    <!-- 波 -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#30ADD1" fill-opacity="1"
                            d="M0,64L30,85.3C60,107,120,149,180,144C240,139,300,85,360,80C420,75,480,117,540,149.3C600,181,660,203,720,213.3C780,224,840,224,900,202.7C960,181,1020,139,1080,106.7C1140,75,1200,53,1260,69.3C1320,85,1380,139,1410,165.3L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                        </path>
                    </svg>
                </div>
                <div class="g-nav__link flex">
                    <a href="{{ route('escapelist') }}" class="g-nav__link--text">避難場所</a>
                    <a href="{{ route('praivacypage') }}" class="g-nav__link--text">プライバシーポリシー</a>
                </div>
            </div>
        </div>
    </div>

    {{-- キービジュアル --}}
    @yield('key_visual')

    <section class="titlesection expand">
        <div class="titlesection__box">
            <h1 class="pagetitle">@yield('title')</h1>
            <div class="pagetitle__border"></div>
        </div>
        <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish1">
        <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish2">
        <img src="assets/images/kai_baigai.png" alt="貝" class="titlesection__img shellfish3">

    </section>
</header>
