<header class="header">
    <div class="header_inner">
        <h1 class="header_logo">
            <a href="{{ route('front.index') }}">
                <img class="logo" src="{{ asset('img/awa_short_logo.png') }}" alt="サイトロゴ">
            </a>
        </h1>
        <nav class="pc_nav_wrapper">
            <ul class="pc_nav">
                <li>
                    <a href="{{ route('front.landing') }}">あわ☆しょーと！について</a>
                </li>
                <li>
                    <a href="{{ route('front.article') }}">とくしまIT情報</a>
                </li>
                <li>
                    <a href="{{ route('front.shortcut_list') }}">ショートカット一覧</a>
                </li>
                <li>
                    <a href="{{ route('front.ranking_list') }}">ランキング</a>
                </li>
            </ul>
            <a href="/shortcut_select" class="pc_nav_button">
                <span>ゲームする</span>
                <span>Play Games</span>
            </a>
        </nav>
    </div>
    <!-- .header_inner -->
</header>
