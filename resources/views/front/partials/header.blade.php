<header class="header" id="header">
    @php
        dd($categories)
    @endphp
    <div class="container">
        <div class="header__top">
            <div class="header__top--left"><a class="city-js" href="#"><span>Москва</span>
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#arrow"></use>
                    </svg>
                    <div class="your-city" id="your-city">
                        <h6>Ваш город: Нижний Новгород</h6><a class="button-small" href=""><span>Да</span></a><a
                                class="button-small gray popup-js" href="#select-city"><span>Выбрать другой</span></a><a
                                class="fancybox-button fancybox-button--close"></a>
                    </div>
                </a><a class="logo" href="">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#logo"></use>
                    </svg>
                    <span>интернет-магазин оригинальных  строительных инструментов</span></a></div>
            <div class="header__top--right">
                <div class="main-menu">
                    <ul>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Поддержка
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                </svg>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">Статьи</a></li>
                                <li><a href="#">Видео</a></li>
                                <li><a href="#">Идеи</a></li>
                                <li><a href="#">Шаблоны</a></li>
                                <li><a href="#">Новости</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Отзывы</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                    <div class="login"><a class="popup-js" href="#login">Войти</a><span>или</span><a href="">Зарегистрироваться</a>
                    </div>
                </div>
                <div class="params">
                    <div class="params__block">
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#phone"></use>
                        </svg>
                        <div class="params__block--text">
                            <p>+7 (495) 120 08 90</p><span>Звонки по Москве</span>
                        </div>
                    </div>
                    <div class="params__block">
                        <svg>
                            <use xlink:href="img/sprite-inline.svg#clock"></use>
                        </svg>
                        <div class="params__block--text">
                            <p>09:00 - 17:30</p><span>Сб,Вс - выходной</span>
                        </div>
                    </div>
                    <div class="params__popup">
                        <ul>
                            <li><a href="#">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#phone-1"></use>
                                    </svg>
                                    <span>Перезвонить</span></a></li>
                            <li><a href="#">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#favorite"></use>
                                    </svg>
                                    <span>Избранное</span></a></li>
                            <li><a href="#">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#basket"></use>
                                    </svg>
                                    <span>Корзина</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="main-catalog">
                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <a href="">каталог товаров</a>
                <ul class="list">

                    <li><a href="">Модульный конструктор PAYMAT</a></li>
                    <li><a href="">Товары для хобби
                            <svg>
                                <use xlink:href="img/sprite-inline.svg#arrow-side"></use>
                            </svg>
                        </a>
                        <ul class="sub-menu">
                            <h6>Товары для хобби</h6>
                            <li><a href="">
                                    <div class="image"><img src="img/pages/example/item1.jpg" alt=""></div>
                                    <span>Выжигатели</span></a></li>
                            <li><a href="">
                                    <div class="image"><img src="img/pages/example/item2.jpg" alt=""></div>
                                    <span>Граверы</span></a></li>
                            <li><a href="">
                                    <div class="image"><img src="img/pages/example/item3.jpg" alt=""></div>
                                    <span>Заготовки из фанеры</span></a></li>
                            <li><a href="">
                                    <div class="image"><img src="img/pages/example/item4.jpg" alt=""></div>
                                    <span>Лобзики и наборы</span></a></li>
                            <li><a href="">
                                    <div class="image"><img src="img/pages/example/item5.jpg" alt=""></div>
                                    <span>Инструменты для творчества</span></a></li>
                        </ul>
                    </li>
                    <li><a href="">Алмазные заточные круги</a></li>
                    <li><a href="">Шлифовальный инструмент</a></li>
                    <li><a href="">Приспособления</a></li>
                    <li><a href="">Сверла</a></li>
                    <li><a href="">Режущий инструмент
                            <svg>
                                <use xlink:href="img/sprite-inline.svg#arrow-side"></use>
                            </svg>
                        </a></li>
                    <li><a href="">Крепежная система SWISSREX</a></li>
                    <li><a href="">Бренды</a></li>
                </ul>
            </div>
            <div class="search">
                <button class="search__icon" type="sumbit">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#search"></use>
                    </svg>
                </button>
                <input type="search" placeholder="Поиск по сайту">
                <div class="search__clear">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#close"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>