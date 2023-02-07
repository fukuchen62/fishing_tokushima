<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <meta name="description"
        content="徳島県民vs他県民対抗！様々なソフトのショートカットコマンドを楽しく練習できるアプリです。徳島出身のかわいいキャラクター・阿波ショー子とすだちのおっちゃん(妖精)が、業務効率改善のためアプリで特訓を行います。徳島県を中心としたIT関連情報も発信しています。">
    <meta name="keywords"
        content="徳島,阿波,ショートカット,ショートカットキー,クイズ,ゲーム,キーボード,コマンド,記事,業務効率化,業務改善,Office,Excel,word,PowerPoint,Outlook,VSC,Illustrator,Photoshop,IT,デジタル,生産性向上、阿波踊り,演舞場,学習,記憶,コピー,切り取り,貼り付け,Ctrl,Alt,Shift,Space,ショー子,すだちのおっちゃん,tokushima,game,shortcut">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- faviconタグ -->
    <link rel="icon" href="{{ asset('img/icon/favicon.ico') }}" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon/apple_touch_icon_180x180.png') }}">

    <title>@yield('title')</title>
    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    @yield('css')

    <!-- jquery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="wrapper">
        <div id="drawerBtn" class="drawer_btn">
            <div id="hamburger" class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- .drawer_btn -->
        <div id="drawer" class="drawer">
            <nav class="main_nav_wrapper">
                <ul class="main_nav">
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
                        <a href="{{ route('front.about_us') }}">私たちについて</a>
                    </li>
                </ul>
                <div class="main_nav_button_layout">
                    <a href="shortcut_select" class="main_nav_button">
                        <span>ゲームする</span>
                        <span>Play Games</span>
                    </a>
                </div>
            </nav>
        </div>
        <!-- #drawer -->
        <div class="wrapper">
            @include('includes.front_header')

            @yield('main')

            <span class="spacer_sm"></span>
            @include('includes.front_footer')
        </div>

        <!-- .wrapper -->

        @yield('audio')

        <div id="pagetop" class="pagetop">
            <a href="#">
                <span>Top</span>
            </a>
        </div> <!-- .pagetop -->


        <script src="{{ asset('js/common.js') }}"></script>
        <script src="{{ asset('js/audio.js') }}"></script>

        @yield('js')
</body>

</html>
