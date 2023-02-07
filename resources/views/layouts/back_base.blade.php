{{-- author: kazuki sakuragi --}}

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{ asset('css/back_article_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/back_article_style.css') }}">
</head>

<body>
    <header>
        {{-- コンポーネント：ヘッダーを読み込む --}}
        @component('components.back_header')
            {{-- 管理者の名前を埋め込む --}}
            @slot('admin_name')
                {{-- {{ $admin_name }} --}}
            @endslot

            {{-- サブタイトルを埋め込む --}}
            @slot('subtitle')
                {{-- {{ $subtitle }} --}}
            @endslot
        @endcomponent
    </header>
    <main class="main">
        <div class="sidebar_wrapper">
            {{-- サブビュー: サイドメニューを読み込む --}}
            @include('includes.back_sidemenu')

            {{-- 内容の表示 --}}

            {{-- <div class="sidebar_main_contents">
            <div class="search_wrapper">
                <div class="search_wrapper"> --}}
            @yield('content')
            </div>
        </div>
        {{-- </div>
            </div>
        </div> --}}
    </main>
</body>
