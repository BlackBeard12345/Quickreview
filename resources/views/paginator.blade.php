@if ($paginator->lastPage() > 1)
    <div class="offset-6 col-6">
        <div class="pagination-area m-3 ">
            <a href="{{ $paginator->url(1) }}" class="prev page-numbers {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"><i class="fas fa-angle-double-left"></i></a>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                @if ($i <= 4)
                    @if ($paginator->currentPage() == $i)
                        <span class="page-numbers current" aria-current="page">{{ $i }}</span>
                    @else
                        <a href="{{ $paginator->url($i) }}" class="page-numbers">{{ $i }}</a>
                    @endif
                @endif
            @endfor
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="next page-numbers {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}"><i class="fas fa-angle-double-right"></i></a>
        </div>
@endif
