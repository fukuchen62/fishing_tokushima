<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">

    {{-- ディスカッション --}}
    <meta name="description" content="@yield('description')">
    {{-- キーワード --}}
    <meta name="keywords" content="@yield('keywords')">

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
    @yield('pageCss')

    <!-- jqueryライブラリ -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    {{-- トークンを読み込む --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="wrapper">
        @include('includes.front_header')

        <main class="main">
            @yield('content')
        </main>
        <!-- サイドバー -->
        <div class="sidebar">
            @yield('sidebar')
        </div>

        @include('includes.front_footer')
    </div>

    {{-- 独自のJSファイルを読み込む --}}
    @yield('pageJs')
</body>

</html>
