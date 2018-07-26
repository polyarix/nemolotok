@extends('front.layouts.app')
@section('body_class', 'category-page')
@section('content')
    <section class="category-page__main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs-list"><a href="#">Главная
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#arrow-bread"></use>
                        </svg></a><span>Лицензии</span></div>
            </div>
        </section>
        <div class="container">
            <div class="category-page__main--title">
                <h2>Крепежная система SWISSREX</h2><span>Найдено 587 товаров</span>
            </div>
            <div class="category-page__wrapper">
                <div class="category-page__filter filter">
                    <div class="filter--block">
                        <div class="title">
                            <p>Вы выбрали
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="content selected-filter">
                            <div class="selected-item"><a href="">до 34 982 руб</a></div>
                            <div class="selected-item"><a href="">pebaro</a></div>
                            <div class="selected-item"><a href="">Star tec product</a></div>
                            <button class="filter-button main-button"><span>Сбросить фильтры</span></button>
                        </div>
                    </div>
                    <div class="filter--block">
                        <div class="title">
                            <p>Цена
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="content price-filter">
                            <form>
                                <input type="text" value="160" min="160" id="minCost">
                                <div class="hyphen"></div>
                                <input type="text" value="3400" max="3400" id="maxCost">
                            </form>
                            <div class="price-slider" id="price-slider"></div>
                            <button class="filter-button main-button"><span>Применить</span></button>
                        </div>
                    </div>
                    <div class="filter--block">
                        <div class="title">
                            <p>Производитель
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="content checkbox-filter">
                            <div class="item">
                                <input type="checkbox" id="artu">
                                <label for="artu">ARTU
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#check"></use>
                                    </svg>
                                </label><span>4</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" id="morse">
                                <label for="morse">Morse
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#check"></use>
                                    </svg>
                                </label><span>11</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" id="kaindl">
                                <label for="kaindl">Kaindl
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#check"></use>
                                    </svg>
                                </label><span>7</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" id="renner">
                                <label for="renner">Renner
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#check"></use>
                                    </svg>
                                </label><span>9</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" id="theCoolTool">
                                <label for="theCoolTool">TheCoolTool
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#check"></use>
                                    </svg>
                                </label><span>1</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" id="pebaro">
                                <label for="pebaro">Pebaro
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#check"></use>
                                    </svg>
                                </label><span>14</span>
                            </div>
                        </div>
                    </div>
                    <div class="filter--block">
                        <div class="title">
                            <p>Категории
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="content list-filter">
                            <ul>
                                <li><a href="">Сверла</a></li>
                                <li><a href="">Корончатые сверла</a></li>
                                <li><a href="">Спиральные сверла</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="category-page__results">
                    <div class="category-page__sorting sort-filter">
                        <div class="sort-block">
                            <p>Сорторовать по:</p>
                            <select class="sort-select">
                                <option value="1"> Популярности</option>
                                <option value="2" selected>цене, сначал недорогие</option>
                                <option value="3">цене, сначало дорогие</option>
                                <option value="4">Новизне</option>
                                <option value="4">Рейтингу</option>
                            </select>
                        </div>
                        <div class="sort-block">
                            <p>Показывать по:</p>
                            <select class="sort-select">
                                <option value="1"> 12</option>
                                <option value="2" selected>24</option>
                                <option value="3">36</option>
                                <option value="4">48</option>
                            </select>
                        </div>
                        <div class="sort-view">
                            <div class="view-toggle three active">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#elems-three"></use>
                                </svg>
                            </div>
                            <div class="view-toggle four">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#elems-four"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="category-page__results--wrapper">
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card__wrapper"><a class="item-card__image" href=""><img src="img/pages/example/offer-slide2.jpg">
                                    <div class="item-card__sale"><img src="img/pages/elems/sale.png">
                                        <div class="item-card__sale--info"><span>скидка</span>
                                            <p>17%</p>
                                        </div>
                                    </div></a>
                                <div class="item-card__available"><span>В наличии</span><span>Код: 901200</span></div>
                                <div class="item-card__title"><a href="">Струбцина SWISSREX</a></div>
                                <div class="item-card__price">
                                    <div class="item-card__price--new"><span>1 959 р.</span></div>
                                    <div class="item-card__price--old"><span>2 684 р.</span></div>
                                </div>
                                <div class="item-card__buy"><a class="buy-btn main-button" href=""><span>В корзину</span></a><a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a></div>
                                <div class="item-card__favorite"><a href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                        </svg><span>Добавить в избранное</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <div class="container">
                            <div class="pagination__wrapper"><a href="">Первая</a>
                                <div class="pagination__list">
                                    <ul>
                                        <li><a href="">1</a></li>
                                        <li class="active"><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                    </ul>
                                </div><a href="">Последняя</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="coupon">
        <div class="container">
            <p>Получи купон на скидку 10%  при подписке на наши новости</p>
            <div class="coupon__form">
                <form>
                    <input class="on-bg" type="email" placeholder="Электронная почта">
                    <button class="main-button" type="submit"><span>Подписаться</span></button>
                </form>
            </div>
            <div class="coupon__social"><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#vk"></use>
                    </svg></a><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#fb"></use>
                    </svg></a><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#youtube"></use>
                    </svg></a><a href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#pinterest"></use>
                    </svg></a></div>
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