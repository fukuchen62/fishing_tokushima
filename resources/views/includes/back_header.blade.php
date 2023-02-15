<header id="header">
    <div class="header container mb20">
        {{-- <img src="{{ asset('assets/images/img_neko_700_3.jpg') }}" alt="LOGO" class=""> --}}
        <h1 class="page_title">@yield('title')</h1>
    </div>

    <div class="subtitle container">
        <h2>@yield('subtitle')</h2>
        <div class="login">
            <span>@yield('login_name') 様ログイン中　</span>
            <a class="logout" href="{{ route('logout') }}">ログアウト</a>
        </div>
    </div>
</header>
