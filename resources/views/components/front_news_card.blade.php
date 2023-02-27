
{{-- <li class="card__p">
    <a class="card card__skin" href="./news_info.html">
        <img class="card__img" src="https://placehold.jp/320x240.png" alt="画像">
        <div class="card__textbox">
            <h3 class="card__title">記事タイトル</h3>
            <p class="card__data">2023.2.15</p>
            <p class="card__discription">記事概要テキストテキスト…</p>
        </div>
    </a>
</li> --}}

<li class="card__p">
    <a class="card card__skin" href="{{ $card_link }}">
        <img class="card__img" src="{{ $card_src }}" alt="{{ $card_alt }}">
        <div class="card__textbox">
            <h3 class="card__title">{{ $card_title }}</h3>
            <p class="card__data">{{ $card_created }}</p>
            <p class="card__description">{{ $card_text }}</p>
        </div>
    </a>
</li>
