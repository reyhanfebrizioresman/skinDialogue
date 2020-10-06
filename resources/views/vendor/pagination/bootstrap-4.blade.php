@if ($paginator->hasPages())
    <style>
            .page-item.active .page-link {
                z-index: 3;
                color: #fff;
                background-color: rgb(234, 136, 135)!important;
                border-color: rgb(234, 136, 135) !important;
            }
            .page-item{
                margin-left: 0.25rem;
                margin-right: 0.25rem;
            }
            li{
                display: list-item;
                text-align: -webkit-match-parent;
            }
            .page-item:first-child .page-link {
                margin-left: 0;
                border-top-left-radius: 0.3125rem;
                border-bottom-left-radius: 0.3125rem;
            }
            .page-item .page-link {
                border-top-right-radius: 0.3125rem;
                border-bottom-right-radius: 0.3125rem;
            }
            .page-link {
                cursor: pointer;
                text-align: center;
                min-width: 2.25rem;
            }
            .page-link {
                position: relative;
                display: block;
                padding: 0.5rem 0.75rem;
                margin-left: 0;
                line-height: 1.25;
                color: #677788 ;
                background-color: #fff;
                border: 0 solid #e7eaf3;
            }
  
    </style>
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">Next</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
