@if ($paginator->hasPages())
<nav class="pagination" role="navigation" aria-label="pagination">
    {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
             <a class="pagination-previous " disabled>Previous</a>
        @else
            <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Previous</a>
        @endif
     {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}">Next page</a>
        @else
            <a class="pagination-next " disabled>Next page</a>
        @endif

  <ul class="pagination-list">
     {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                {{-- <li class="disabled"><span>{{ $element }}</span></li> --}}
                <li>
                  <span class="pagination-ellipsis">&hellip;</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

                            <a class="pagination-link is-current" aria-label="Page {{ $page }}" aria-current="page">{{ $page }}</a>
                        </li>
                    @else

                      <a class="pagination-link" aria-label="Goto page {{ $page }}" href="{{ $url}}">{{ $page }}</a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach

</nav>
@endif

