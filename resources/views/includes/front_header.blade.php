<header class="header">
    <div class="header_inner">
        <h1 class="header_logo">
            <a href="{{ route('home') }}">
                <img class="logo" src="{{ asset('img/awa_short_logo.png') }}" alt="サイトロゴ">
            </a>
        </h1>
        <nav class="pc_nav_wrapper">
            <ul class="pc_nav">
                <li>
                    <a href="{{ route('newslist') }}">あわ☆しょーと！について</a>
                </li>
                <li>
                    <a href="{{ route('newslist') }}">とくしまIT情報</a>
                </li>
                <li>
                    <a href="{{ route('newslist') }}">ショートカット一覧</a>
                </li>
                <li>
                    <a href="{{ route('newslist') }}">ランキング</a>
                </li>
            </ul>
            <a href="{{ route('newslist') }}" class="pc_nav_button">
                <span>ゲームする</span>
                <span>Play Games</span>
            </a>
        </nav>
    </div>
    <!-- .header_inner -->
</header>
