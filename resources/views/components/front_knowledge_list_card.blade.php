<div class="panel active">
    <ul class="card__area flex">
    {{-- 6個までli作る --}}
    @foreach ($knowledges as $key => $item)

    @if ($key % 6 !== 0 || $key ==0 )
    break;
    @else

    {{-- @if ($key % 6 !== 0 || $key ==0 ) --}}
    @component('components.front_card')
            @slot('card_link')
            {{ route('knowledgeinfo', ['id' => $item->id]) }}
            @endslot

            @slot('card_src')
            {{-- https://placehold.jp/320x240.png --}}
            {{ $item->thumbnail }}
            @endslot

            @slot('card_alt')
            {{ $item->title }}
            @endslot

            @slot('card_title')
            {{ $item->title }}
            @endslot

            @slot('card_text')
            {{ $item->overview }}
            @endslot
    @endcomponent
    @endif

    @endforeach
    </ul>
</div>
