{{-- カードの構造 --}}
{{-- toppageの入門知識 --}}
<a href="{{ $card_link }}" class="knowledge__imgbox">
    <img class="knowledge_img" src="{{ $card_src }}" alt="{{ $card_alt }}">
    <div class="hover-mask">
        <p>{{ $card_hover }}</p>
    </div>
</a>

<div class="knowledge__text--block">
    <h3>{{ $card_title }}</h3>
    <p class="knowledge__text--box">{{ $card_text }}</p>
</div>
