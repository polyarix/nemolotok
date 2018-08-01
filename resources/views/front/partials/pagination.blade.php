@if($paginator->hasPages())
<div class="pagination">
    <div class="container">
        <div class="pagination__wrapper">
            <a href="{{$paginator->toArray()['first_page_url']}}">Первая</a>
            <div class="pagination__list">
                <ul>
                    @foreach($elements as $element)
                        @if(is_string($element))
                            <li class="active">{{$element}}</li>
                        @endif

                        @if(is_array($element))
                            @foreach($element as $page=>$url)
                                @if($page === $paginator->currentPage())
                                        <li class="active"><a href="{{$url}}">{{$page}}</a></li>
                                @else
                                        <li><a href="{{$url}}">{{$page}}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </div>
            <a href="{{$paginator->toArray()['last_page_url']}}">Последняя</a>
        </div>
    </div>
</div>
@endif