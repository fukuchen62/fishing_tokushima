{{-- カードの構造 --}}
{{-- toppageの入門知識 --}}
<div class="imgbox">
    <a href="{{ $card_link }}">
        <img class="knowledge_img" src="{{ $card_src }}" alt="{{ $card_alt }}">
    </a>
</div>
<div class="knowledge__text--block">
    <h3>{{ $card_title }}</h3>
    <p class="knowledge__text--box">{{ $card_text }}</p>
</div>
