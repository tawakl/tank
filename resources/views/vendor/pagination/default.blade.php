@if ($paginator->hasPages())
{{--    <div  class="tt-pagination tt-pagin-center margin-top-xlg-100 anim-fadeinup">--}}
        <ul class="pagination tt-pagin-numbers">
            {{-- Prev ious Page Link --}}
            @if ($paginator->onFirstPage())
                <li  class="tt-pagin-item magnetic-item active disabled tt-pagin-prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="tt-pagin-item magnetic-item tt-pagin-prev">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="tt-pagin-item magnetic-item disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="tt-pagin-item magnetic-item active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="tt-pagin-item magnetic-item"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                   <li class="tt-pagin-item magnetic-item tt-pagin-next">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="tt-pagin-item magnetic-item disabled tt-pagin-next" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
{{--    </div>--}}
@endif
