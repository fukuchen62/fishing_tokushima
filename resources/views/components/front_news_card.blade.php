<!-- <li class="card__p">
    <a class="card card__skin" href="">
        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
        <div class="card__textbox">
            <h3 class="card__title">記事タイトル</h3>
            <p>2023.2.15</p>
            <p class="card__description">説明説明説明説明説明説明</p>
        </div>
    </a>
</li> -->


<li class="card__p">
    <a class="card card__skin" href="{{ $news_link }}">
        <img class="card__img" src="https://placehold.jp/320x240.png" alt="">
        <div class="card__textbox">
            <p>{{ $news_name }}</p>
            @php
                $ts = strtotime($news_created_at);
            @endphp
            <p>
                {{ date('Y.m.d', $ts) }}
            </p>
            <h3 class="card__title">{{ $news_title }}</h3>
            <p class="card__description">{{ $news_overview }}</p>
        </div>
    </a>
</li>
