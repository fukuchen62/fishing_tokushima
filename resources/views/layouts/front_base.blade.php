<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    {{-- ディスカッション --}}
    <meta name="description" content="ディスクリプションを記入してください">
    {{-- キーワード --}}
    <meta name="keywords" content="徳島,阿波">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- faviconを読み込む -->
    <link rel="icon" href="{{ asset('assets/images/icon/favicon.ico') }}" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icon/apple_touch_icon_180x180.png') }}">

    {{-- ページタイトル --}}
    <title>@yield('title')</title>

    <!-- reset.cssファイルを読み込む -->
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">

    <!-- 共通のCSSファイル -->
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

    {{-- 独自のCSSファイルを読み込む --}}
    @yield('css')

    <!-- jqueryライブラリ -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    {{-- トークンを読み込む --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="wrapper">
        @include('includes.front_header')

        @yield('main')

        @include('includes.front_footer')
    </div>

    <!-- .wrapper -->
    <div id="pagetop" class="pagetop">
        <a href="#">
            <span>Top</span>
        </a>
    </div> <!-- .pagetop -->

    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/audio.js') }}"></script>

    {{-- 独自のJSファイルを読み込む --}}
    @yield('js')
</body>

</html>
