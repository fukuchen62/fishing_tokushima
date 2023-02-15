<header>
    {{-- コンポーネント：ヘッダーを読み込む --}}
    @component('components.back_header')
        {{-- ログインの名前を埋め込む --}}
        @slot('login_name')
            {{-- {{ $login_name }} --}}
        @endslot

        {{-- サブタイトルを埋め込む --}}
        @slot('subtitle')
            {{-- {{ $subtitle }} --}}
        @endslot
    @endcomponent
</header>
