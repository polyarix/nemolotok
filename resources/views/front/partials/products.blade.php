<div class="category-page__results--wrapper">
    @forelse($items as $product)
        <div class="item-card">
            <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                            src="{{asset('storage/'.$product->cover()->url)}}">
                    {{--<div class="item-card__sale"><img src="{{asset('front/img/pages/elems/sale.png')}}">--}}
                        {{--<div class="item-card__sale--info"><span>скидка</span>--}}
                            {{--<p>17%</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </a>
                <div class="item-card__available"><span>{{$product->status or "" }}</span><span>Код: {{$product->sku or ""}}</span></div>
                <div class="item-card__title"><a href="">{{$product->description->name or "" }}</a></div>
                <div class="item-card__price">
                    <div class="item-card__price--new"><span>{{$product->price or ""}}р.</span></div>
                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                </div>
                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                            class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                <div class="item-card__favorite"><a href="">
                        <svg>
                            <use xlink:href="{{asset('front/img/sprite-inline.svg#favorite')}}"></use>
                        </svg>
                        <span>Добавить в избранное</span></a></div>
            </div>
        </div>
    @empty

    @endforelse
</div>

{{$items->links('front.partials.pagination')}}