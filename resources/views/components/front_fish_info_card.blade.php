{{-- カードの構造 --}}
<li class="card__p">
    <a class="card card__skin" href="{{ $spot_link }}">
        <img class="card__img" src="{{ $spot_src }}" alt="{{ $spot_alt }}">
        <div class="card__textbox">
            <h3 class="card__title">{{ $spot_name }}</h3>
            <p class="card__discription">{{ $spot_overview }}</p>
        </div>
    </a>
</li>
