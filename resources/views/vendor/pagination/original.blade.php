@if ($paginator->hasPages())
    <nav>
        {{-- もともとのページネーション --}}
        {{-- <ul class="tab-area flex">
                @for ($i = 0; $i < $number; $i++)
                    <li class="tab">
                        <a href="{{ route('knowledgelist') }}?category_id={{ $category_id }}&page= {{ $i + 1 }}">
                            {{ $i + 1 }}
                        </a>
                    </li>
                @endfor
            </ul> --}}

        <ul class="pagination tab-area flex">
            {{-- Previous Page Link --}}
            {{-- @if ($paginator->onFirstPage())
                <li class="disabled tab active" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">1</span>
                </li>
            @else
                <li class="tab">
                    {{ $paginator->previousPageUrl() }}
                    <a href="{{ route('knowledgelist') }}?category_id={{ $category_id }}&page= {{ 1 }}" rel="prev" aria-label="@lang('pagination.previous')">1</a>
                </li>
            @endif --}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled tab" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="tab active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="tab active"><a href="{{ route('knowledgelist') }}?category_id={{ $category_id }}&page= {{ $page }}">{{ $page }}</a></li>
                            {{-- {{ $url }} --}}

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            {{-- @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif --}}
        </ul>
    </nav>
@endif
