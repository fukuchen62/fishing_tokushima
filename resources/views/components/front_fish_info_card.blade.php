{{-- カードの構造 --}}
<li class="card__p">
    <a class="card card__skin" href="{{ $card_link }}">
        <img class="card__img" src="{{ $card_src }}" alt="{{ $card_alt }}">
        <div class="card__textbox">
            <h3 class="card__title">{{ $card_name }}</h3>
            <p class="card__discription">{{ $card_overview }}</p>
        </div>
    </a>
</li>
