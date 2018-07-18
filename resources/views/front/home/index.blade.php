@extends('front.layouts.app')
@section('body_class', 'main-page')
@section('content')
    <section class="main-section">
        <div class="container">
            <div class="main-section__wrapper">
                <div class="main-slider">
                    <div class="main-slider__slide">
                        <div class="transparent"></div>
                        <div class="main-slider__slide--info"><span>Акция действует до 26.11.17</span>
                            <p>Сверла и фрезы для дрелей</p>
                            <h5>-50%</h5><a class="main-button" href=""><span>Смотреть каталог</span></a>
                        </div>
                        <img src="img/pages/example/main-slide1.jpg" alt="">
                    </div>
                    <div class="main-slider__slide">
                        <div class="transparent"></div>
                        <div class="main-slider__slide--info"><span>Акция действует до 26.11.17</span>
                            <p>Сверла и фрезы для дрелей</p>
                            <h5>-50%</h5><a class="main-button" href=""><span>Смотреть каталог</span></a>
                        </div>
                        <img src="img/pages/example/main-slide1.jpg" alt="">
                    </div>
                    <div class="main-slider__slide">
                        <div class="transparent"></div>
                        <div class="main-slider__slide--info"><span>Акция действует до 26.11.17</span>
                            <p>Сверла и фрезы для дрелей</p>
                            <h5>-50%</h5><a class="main-button" href=""><span>Смотреть каталог</span></a>
                        </div>
                        <img src="img/pages/example/main-slide1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="categories"><a class="categories__block" href="">
                    <div class="categories__block--image"><img src="img/pages/example/category1.jpg" alt=""></div>
                    <span>Мастерам</span></a><a class="categories__block" href="">
                    <div class="categories__block--image"><img src="img/pages/example/category2.jpg" alt=""></div>
                    <span>Мастерицам</span></a><a class="categories__block" href="">
                    <div class="categories__block--image"><img src="img/pages/example/category3.jpg" alt=""></div>
                    <span>Юным гениям</span></a></div>
            <div class="advantages">
                <div class="advantages__block">
                    <div class="advantages__block--icon">
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#factory"></use>
                        </svg>
                    </div>
                    <p>Оригинальная, фабричная продукцая</p>
                </div>
                <div class="advantages__block">
                    <div class="advantages__block--icon">
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#car"></use>
                        </svg>
                    </div>
                    <p>Отправляем товар по всей России</p>
                </div>
                <div class="advantages__block">
                    <div class="advantages__block--icon">
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#guarantee"></use>
                        </svg>
                    </div>
                    <p>Предоставляем официальную гарантию</p>
                </div>
            </div>
        </div>
    </section>
    <section class="special-offer">
        <div class="container">
            <h2>Спецпредложения</h2>
            <div class="special-offer__sale tabs">
                <ul>
                    <li class="active"><a href="#discounts">Скидки</a></li>
                    <li><a href="#stocks">Акции</a></li>
                </ul>
                <div class="special-offer__sale--discount active slider-js" id="discounts">
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide1.jpg">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>47%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>15 967 р.</span></div>
                                <div class="item-card__price--old"><span>30 126 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide2.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>17%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>1 959 р.</span></div>
                                <div class="item-card__price--old"><span>2 684 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide3.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>23%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Ручка для сверлильного приспособления SWISSREX</a>
                            </div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>178 149 р.</span></div>
                                <div class="item-card__price--old"><span>198 944 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide4.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>39%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Диск алмазный для заточки инструмента для дрели
                                    D110</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>3 181 р.</span></div>
                                <div class="item-card__price--old"><span>3 715 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide1.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>39%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>15 967 р.</span></div>
                                <div class="item-card__price--old"><span>30 126 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide1.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>39%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>15 967 р.</span></div>
                                <div class="item-card__price--old"><span>30 126 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранноеs</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="special-offer__sale--stocks slider-js" id="stocks">
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide1.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>47%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>15 967 р.</span></div>
                                <div class="item-card__price--old"><span>30 126 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide2.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>17%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>1 959 р.</span></div>
                                <div class="item-card__price--old"><span>2 684 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide3.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>23%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Ручка для сверлильного приспособления SWISSREX</a>
                            </div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>178 149 р.</span></div>
                                <div class="item-card__price--old"><span>198 944 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide4.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>39%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Диск алмазный для заточки инструмента для дрели
                                    D110</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>3 181 р.</span></div>
                                <div class="item-card__price--old"><span>3 715 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide1.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>39%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>15 967 р.</span></div>
                                <div class="item-card__price--old"><span>30 126 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранное</span></a></div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide1.jpg" alt="">
                                <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                    <div class="item-card__sale--info"><span>скидка</span>
                                        <p>39%</p>
                                    </div>
                                </div>
                            </a>
                            <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                            <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                            <div class="item-card__price">
                                <div class="item-card__price--new"><span>15 967 р.</span></div>
                                <div class="item-card__price--old"><span>30 126 р.</span></div>
                            </div>
                            <div class="item-card__buy"><a class="buy-btn main-button"
                                                           href=""><span>В корзину</span></a><a
                                        class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                            <div class="item-card__favorite"><a href="">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Добавить в избранноеs</span></a></div>
                        </div>
                    </div>
                </div>
                <a class="blue-btn" href="#"><span>Все предложения</span></a>
            </div>
        </div>
    </section>
    <section class="recommended">
        <div class="container">
            <h2>Рекомендуемые товары</h2>
            <div class="recommended__wrapper">
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide1.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>47%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>15 967 р.</span></div>
                            <div class="item-card__price--old"><span>30 126 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"><span>Добавить в избранное</span>
                                    </use>
                                </svg>
                            </a></div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide2.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>17%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>1 959 р.</span></div>
                            <div class="item-card__price--old"><span>2 684 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                </svg>
                                <span>Добавить в избранное</span></a></div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide3.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>23%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Ручка для сверлильного приспособления SWISSREX</a>
                        </div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>178 149 р.</span></div>
                            <div class="item-card__price--old"><span>198 944 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                </svg>
                                <span>Добавить в избранное</span></a></div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide4.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>39%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Диск алмазный для заточки инструмента для дрели
                                D110</a></div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>3 181 р.</span></div>
                            <div class="item-card__price--old"><span>3 715 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                </svg>
                                <span>Добавить в избранное</span></a></div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide1.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>47%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Универсальная крепежная система SWISSREX</a></div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>15 967 р.</span></div>
                            <div class="item-card__price--old"><span>30 126 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                </svg>
                                <span>Добавить в избранное</span></a></div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide2.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>17%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>1 959 р.</span></div>
                            <div class="item-card__price--old"><span>2 684 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                </svg>
                                <span>Добавить в избранное</span></a></div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide3.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>23%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Ручка для сверлильного приспособления SWISSREX</a>
                        </div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>178 149 р.</span></div>
                            <div class="item-card__price--old"><span>198 944 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                </svg>
                                <span>Добавить в избранное</span></a></div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                    src="img/pages/example/offer-slide4.jpg" alt="">
                            <div class="item-card__sale"><img src="img/pages/elems/sale.png" alt="">
                                <div class="item-card__sale--info"><span>скидка</span>
                                    <p>39%</p>
                                </div>
                            </div>
                        </a>
                        <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                        <div class="item-card__title"><a href="">Диск алмазный для заточки инструмента для дрели
                                D110</a></div>
                        <div class="item-card__price">
                            <div class="item-card__price--new"><span>3 181 р.</span></div>
                            <div class="item-card__price--old"><span>3 715 р.</span></div>
                        </div>
                        <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a
                                    class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                        <div class="item-card__favorite"><a href="">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                </svg>
                                <span>Добавить в избранное</span></a></div>
                    </div>
                </div>
            </div>
            <a class="blue-btn" href="#"><span>Показать еще</span></a>
        </div>
    </section>
    <section class="video">
        <div class="video__bg"><img src="img/pages/example/bg-video.jpg" alt=""></div>
        <div class="container">
            <div class="video__info">
                <h5>Видео</h5><span>9 обучающих записей из 147 видеоинструкций</span><a href="">Смотреть все</a>
            </div>
            <div class="video__slider video-slider"><a class="video-item"
                                                       href="https://www.youtube.com/watch?v=rDVIPoI8ebs">
                    <div class="video-item__content">
                        <div class="video-item__preview">
                            <picture>
                                <!--source(srcset="img/pages/example/video-slide1.jpg\" media="(max-width: 767px)")--><img
                                        src="img/pages/example/video-slide1.jpg" alt="">
                            </picture>
                        </div>
                        <div class="video-item__title"><span>Фреза по дереву Woodcarver Kaindl. Как вырезать из дерева рыбу?</span>
                        </div>
                    </div>
                </a><a class="video-item" href="https://www.youtube.com/watch?v=rDVIPoI8ebs">
                    <div class="video-item__content">
                        <div class="video-item__preview">
                            <picture>
                                <!--source(srcset="img/pages/basket/photo.jpg" media="(max-width: 767px)")--><img
                                        src="img/pages/example/video-slide2.jpg" alt="">
                            </picture>
                        </div>
                        <div class="video-item__title"><span>Фреза по дереву Woodcarver Kaindl. Как вырезать из дерева рыбу?</span>
                        </div>
                    </div>
                </a><a class="video-item" href="https://www.youtube.com/watch?v=rDVIPoI8ebs">
                    <div class="video-item__content">
                        <div class="video-item__preview">
                            <picture>
                                <!--source(srcset="img/pages/basket/photo.jpg" media="(max-width: 767px)")--><img
                                        src="img/pages/example/video-slide3.jpg" alt="">
                            </picture>
                        </div>
                        <div class="video-item__title"><span>Фреза по дереву Woodcarver Kaindl. Как вырезать из дерева рыбу?</span>
                        </div>
                    </div>
                </a><a class="video-item" href="https://www.youtube.com/watch?v=rDVIPoI8ebs">
                    <div class="video-item__content">
                        <div class="video-item__preview">
                            <picture>
                                <!--source(srcset="img/pages/basket/photo.jpg" media="(max-width: 767px)")--><img
                                        src="img/pages/example/video-slide1.jpg" alt="">
                            </picture>
                        </div>
                        <div class="video-item__title"><span>Фреза по дереву Woodcarver Kaindl. Как вырезать из дерева рыбу?</span>
                        </div>
                    </div>
                </a><a class="video-item" href="https://www.youtube.com/watch?v=rDVIPoI8ebs">
                    <div class="video-item__content">
                        <div class="video-item__preview">
                            <picture>
                                <!--source(srcset="img/pages/basket/photo.jpg" media="(max-width: 767px)")--><img
                                        src="img/pages/example/video-slide2.jpg" alt="">
                            </picture>
                        </div>
                        <div class="video-item__title"><span>Фреза по дереву Woodcarver Kaindl. Как вырезать из дерева рыбу?</span>
                        </div>
                    </div>
                </a></div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <h2>Отзывы покупателей</h2>
            <div class="reviews__slider">
                <div class="reviews__slider--slide">
                    <div class="quote">
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#quote"></use>
                        </svg>
                    </div>
                    <h6>Марина</h6><span>20 декабря 2017</span>
                    <p>Спасибо Гузель(она принимала заказ и предупреждала о том, что инструменты для начинающих не
                        заточены) и курьеру-водителю Владимиру Сергеевичу за оперативную и слаженную работу. Успехов
                        фирме!</p><a href="#">Читать полнолстью
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
                <div class="reviews__slider--slide">
                    <div class="quote">
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#quote"></use>
                        </svg>
                    </div>
                    <h6>Не Марина</h6><span>26 декабря 2017</span>
                    <p>Спасибо Гузель(она принимала заказ и предупреждала о том, что инструменты для начинающих не
                        заточены) и курьеру-водителю Владимиру Сергеевичу за оперативную и слаженную работу. Успехов
                        фирме!</p><a href="#">Читать полностью
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <a class="blue-btn" href=""><span>Все отзывы</span></a>
        </div>
    </section>
    <section class="original">
        <div class="container">
            <h4>Оригинальные строительные инструменты</h4>
            <div class="original__text"><img src="img/pages/elems/strujka.png" alt="">
                <div class="left">
                    <p>Мы стараемся подбирать только уникальные инструменты – «умные», с которыми приятно работать. Нам
                        важно не просто продать оборудование.</p>
                    <p>Мы хотим, чтобы Вам приятно было работать с нашими инструментами. Чтобы Вы чувствовали полный
                        контроль над процессом. Чтобы Вы были уверенны в себе и в инструменте, который не подведет. За
                        стенами мастерской может происходить все, что угодно. Но инструмент должен быть качественным и
                        надежным.</p>
                    <p>Nemolotok для тех, кто умеет работать в свое удовольствие и ценит это состояние. Мы ценим
                        универсальность и компактность. Потолки должны быть высокими, окна большими и светлыми, а
                        инструменты универсальными и компактными, чтобы не занимать собой Ваше свободное
                        пространство.</p>
                </div>
                <div class="right">
                    <p>Наш магазин для тех, кто работает руками. Слова и картинки – хорошо, но «пощупать» тоже важно.
                        Поэтому в нашем офисе мы оборудовали демонстрационный зал, где можно попробовать в работе любой
                        инструмент.</p>
                    <p>Наш специалист поможет, покажет и расскажет абсолютно обо всех инструментах и особенностях работы
                        с ними. Если есть желание – можно принести свои материалы, чтобы все проверить.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="coupon">
        <div class="container">
            <p>Получи купон на скидку 10% при подписке на наши новости</p>
            <div class="coupon__form">
                <form>
                    <input class="on-bg" type="email" placeholder="Электронная почта">
                    <button class="main-button" type="submit"><span>Подписаться</span></button>
                </form>
            </div>
            <div class="coupon__social"><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#vk"></use>
                    </svg>
                </a><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#fb"></use>
                    </svg>
                </a><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#youtube"></use>
                    </svg>
                </a><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#pinterest"></use>
                    </svg>
                </a></div>
        </div>
    </section>
    <section class="coupon success">
        <div class="container">
            <div class="title">
                <svg>
                    <use xlink:href="img/sprite-inline.svg#success"></use>
                </svg>
                <p>Спасибо, подарочный купон на скидку 10%, отправлен вам на почту</p>
            </div>
        </div>
    </section>
@endsection