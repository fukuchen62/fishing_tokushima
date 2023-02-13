<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <meta name="description" content="ディスクリプションを記入してください">
    <meta name="keywords" content="徳島,阿波">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- faviconタグ -->
    <link rel="icon" href="{{ asset('img/icon/favicon.ico') }}" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon/apple_touch_icon_180x180.png') }}">

    <title>@yield('title')</title>
    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

    @yield('css')

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="wrapper">
        {{-- <div id="drawerBtn" class="drawer_btn">
            <div id="hamburger" class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> --}}
        <!-- .drawer_btn -->
        {{-- <div id="drawer" class="drawer">
            <nav class="main_nav_wrapper">
                <ul class="main_nav">
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
                        <a href="{{ route('newslist') }}">私たちについて</a>
                    </li>
                </ul>
                <div class="main_nav_button_layout">
                    <a href="shortcut_select" class="main_nav_button">
                        <span>ゲームする</span>
                        <span>Play Games</span>
                    </a>
                </div>
            </nav>
        </div> --}}
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


        <script src="{{ asset('assets/js/common.js') }}"></script>
        <script src="{{ asset('assets/js/audio.js') }}"></script>

        @yield('js')
</body>

</html>
