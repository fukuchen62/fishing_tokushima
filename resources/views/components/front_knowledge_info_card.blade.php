<li class="card__p">
    <a class="card card__skin" href="{{ $knowledge_link }}">
        <img class="card__img" src="{{ asset('storage/images') }}/{{ $knowledge_thumbnail }}"
            alt="{{ $knowledge_thumbnail }}">
        <div class="card__textbox">
            <h3 class="card__title">{{ $knowledge_title }}</h3>
            <p class="card__description">{{ $knowledge_overview }}</p>
        </div>
    </a>
</li>
