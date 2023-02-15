<footer class="footer">
    <div class="footer__box flex">
        <ul>
            <li><a href="{{ route('knowledgelist') }}">入門知識</a></li>
            <li><a href="{{ route('fishlist') }}">徳島の魚</a></li>
            <li><a href="{{ route('planlist') }}">体験プラン</a></li>
            <li><a href="{{ route('shopslist') }}">釣具店</a></li>
            <li><a href="{{ route('escapelist') }}">避難場所</a></li>
        </ul>
        <ul>
            <li>釣りスポット</li>
            <li><a href="{{ route('spotslist') }}?city_id=1">東部</a></li>
            <li><a href="{{ route('spotslist') }}?city_id=2">南部</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('mypage') }}">マイページ</a></li>
            <li><a href="{{ route('top') }}">プライバシーポリシー</a></li>
            <li><a href="{{ route('admintop') }}" target="_blank">ログイン</a></li>
        </ul>
    </div>
    <p class="copylight">Copyright@turitoku.com</p>
</footer>
