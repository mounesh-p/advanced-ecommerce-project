@if ($paginator->hasPages())


<div class="clearfix filters-container">
    <div class="text-right">
        <div class="pagination-container">

            <ul class="list-inline list-unstyled">


                @if ($paginator->onFirstPage())
                <li class="disabled prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </li>
            @else
                <li class="prev">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-left"></i></a>
                </li>
            @endif



                 {{-- Pagination Elements --}}
                 @foreach ($elements as $element)
                 {{-- "Three Dots" Separator --}}
                 @if (is_string($element))
                     <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                 @endif

                 {{-- Array Of Links --}}
                 @if (is_array($element))
                     @foreach ($element as $page => $url)
                         @if ($page == $paginator->currentPage())
                             <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                         @else
                             <li><a href="{{ $url }}">{{ $page }}</a></li>
                         @endif
                     @endforeach
                 @endif
             @endforeach


              {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li class="next">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-angle-right"></i></a>
            </li>
        @else
            <li class="disabled next" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
            </li>
        @endif

            </ul>
            <!-- /.list-inline -->
        </div>
        <!-- /.pagination-container -->
    </div>
    <!-- /.text-right -->

</div>


@endif
