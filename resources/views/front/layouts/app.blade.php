<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="{{asset('front/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title></title>
</head>
<body class="@yield('body_class')">

@include('front.partials.header')

@yield('content')

<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__top--menu">
                <h6>Информация</h6>
                <ul>
                    <li><a href="">О компании</a></li>
                    <li><a href="">Доставка и оплата</a></li>
                    <li><a href="">Обмен и возврат</a></li>
                    <li><a href="">Часто задаваемые вопросы</a></li>
                    <li><a href="">Политика конфеденциальности</a></li>
                    <li><a href="">Юр. лицам</a></li>
                    <li><a href="">Карта сайта</a></li>
                </ul>
            </div>
            <div class="footer__top--menu">
                <h6>Информация</h6>
                <ul>
                    <li><a href="">Модульный конструктор PAYMAT</a></li>
                    <li><a href="">Товары для хобби</a></li>
                    <li><a href="">Алмазные заточные круги</a></li>
                    <li><a href="">Шлифовальный инструмент</a></li>
                    <li><a href="">Приспособление</a></li>
                    <li><a href="">Сверла</a></li>
                    <li><a href="">Режущий инструмент</a></li>
                    <li><a href="">Крепежная система SWISSREX</a></li>
                    <li><a href="">Бренды</a></li>
                </ul>
            </div>
            <div class="footer__top--contacts">
                <h6>Для связи</h6>
                <div class="phone-number"><a href="tel:+74951200890">+7 (495) 120 08 90</a><span>Звонки по Москве</span>
                </div>
                <div class="phone-number"><a href="tel:+78007070991">+7 (800) 707 09 91</a><a
                            class="request-call popup-js" href="#request">Заказать звонок</a></div>
                <div class="footer__top--menu">
                    <h6>Контакты</h6>
                    <ul>
                        <li><a href="">Контакты</a></li>
                        <li><a href="">Как добраться?</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__top--payment">
                <h6>принимаем к оплате</h6>
                <div class="payment-methods">
                    <div class="payment-methods--block"><img src="img/pages/elems/visa.png" alt=""></div>
                    <div class="payment-methods--block"><img src="img/pages/elems/mastercard.png" alt=""></div>
                    <div class="payment-methods--block"><img src="img/pages/elems/mir.png" alt=""></div>
                </div>
                <span>Интернет платежи на сайте защищены SSL сертификатом</span>
                <h6>Обратная связь</h6><a href="">Отзывы покупателей</a>
                <div class="logo"><img src="img/pages/elems/yandex-market.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="owner"><span>© 2015-2017 Немолоток.</span></div>
            <div class="designed"><span>Разработано в <b>POLYARIX</b></span></div>
        </div>
    </div>
</footer>
<div class="login-popup popup" id="login">
    <h3>Вход</h3>
    <div class="login-popup__form">
        <form>
            <label>Ваш телефон или эл. почта <span>*</span>
                <input required>
            </label>
            <label>Пароль <span>*</span>
                <input type="password" required>
            </label>
            <div class="agree">
                <input type="checkbox" id="remember">
                <label for="remember">Запомнить меня
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#check"></use>
                    </svg>
                </label>
            </div>
            <div class="button-block">
                <button class="main-button" type="sumbit"><span>Войти</span></button>
                <a class="popup-js" href="#recover">Забыли пароль?</a>
            </div>
        </form>
        <p>Вы еще не зарегистрированы на сайте?<a href="">Пройдите регистрацию</a></p>
    </div>
    <a class="fancybox-button fancybox-button--close"></a>
</div>
<div class="recover popup" id="recover">
    <h3>Забыли пароль?</h3>
    <p>Введите ваш адрес электронной почты. Вы получите ссылку для восстановления пароля.</p>
    <div class="popup__form">
        <form>
            <label>Электронная почта<span>*</span>
                <input type="email" required>
            </label>
            <button class="main-button" type="submit"><span>Восстановить пароль</span></button>
        </form>
    </div>
    <a class="fancybox-button fancybox-button--close"></a>
</div>
<div class="fast-buy popup" id="fast-buy">
    <h3>Быстрый заказ в 1 клик</h3>
    <div class="fast-buy__item">
        <div class="image"><img src="img/pages/example/fast-buy.jpg" alt="" title=""></div>
        <div class="description"><a href="">Диск алмазный для заточки инструмента для дрели D110</a>
            <div class="price">
                <p>399 181 руб.</p>
            </div>
            <div class="old-price"><span>399 715 р.</span></div>
        </div>
    </div>
    <div class="fast-buy__form">
        <form>
            <label>Имя
                <input>
            </label>
            <label>Телефон <span>*</span>
                <input class="tel" placeholder="+7 (___) ___-__-__">
            </label>
            <button class="main-button"><span>Купить</span></button>
        </form>
    </div>
    <a class="fancybox-button fancybox-button--close"></a>
</div>
<div class="thanks-popup popup" id="thanks-popup">
    <h4>Спасибо!</h4>
    <div class="thanks-popup__image">
        <svg>
            <use xlink:href="img/sprite-inline.svg#double-check"></use>
        </svg>
    </div>
    <p>Мы получили вашу заявку, перезвоним в течении дня</p><a class="fancybox-button fancybox-button--close"></a>
</div>
<div class="basket-popup" id="basket-popup">
    <div class="basket-popup__top">
        <h3>Корзина</h3>
        <div class="basket-popup__table">
            <div class="basket-popup__table--header">
                <div class="name"><span>Товар</span></div>
                <div class="price"><span>Цена</span></div>
                <div class="amount"><span>Количество</span></div>
                <div class="sum"><span>Сумма</span></div>
            </div>
            <div class="basket-popup__table--item">
                <div class="name">
                    <div class="image"><img src="img/pages/example/basket.jpg"></div>
                    <a class="title" href="#">Универсальная крепежная система SWISSREX</a>
                </div>
                <div class="price"><span>1 252 967 р.</span></div>
                <div class="counter">
                    <div class="counter-item minus-js">-</div>
                    <div class="counter-item value-js">1</div>
                    <div class="counter-item plus-js">+</div>
                </div>
                <div class="sum"><span>1 522 967 р.</span></div>
                <div class="remove-item">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#close-gray"></use>
                    </svg>
                </div>
            </div>
            <div class="basket-popup__table--item">
                <div class="name">
                    <div class="image"><img src="img/pages/example/basket.jpg"></div>
                    <a class="title" href="#">Универсальная крепежная система SWISSREX</a>
                </div>
                <div class="price"><span>1 252 967 р.</span></div>
                <div class="counter">
                    <div class="counter-item minus-js">-</div>
                    <div class="counter-item value-js">1</div>
                    <div class="counter-item plus-js">+</div>
                </div>
                <div class="sum"><span>1 522 967 р.</span></div>
                <div class="remove-item">
                    <svg>
                        <use xlink:href="img/sprite-inline.svg#close-gray"></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="basket-popup__total">
            <div class="info"><span>Всего в корзине</span>
                <p>2 товара на сумму <b>1 252 967 р.</b></p>
            </div>
            <div class="buttons"><span class="buy-one-click popup-js">Продолжить покупки</span>
                <div class="main-button"><span>Оформить заказ</span></div>
            </div>
        </div>
    </div>
    <div class="basket-popup__bottom">
        <h5>С этим товаром покупают</h5>
        <div class="basket-popup__slider">
            <div class="card-item">
                <div class="image"><img src="img/pages/example/basket-item.jpg"></div>
                <a href="#">Держатель для коронок Morse (32-168 мм, 9,5 мм)*</a>
                <p>1 199 р.</p>
                <div class="main-button"><span>Добавить</span></div>
            </div>
            <div class="card-item">
                <div class="image"><img src="img/pages/example/basket-item.jpg"></div>
                <a href="#">Держатель для коронок Morse (32-168 мм, 9,5 мм)*</a>
                <p>1 199 р.</p>
                <div class="main-button"><span>Добавить</span></div>
            </div>
            <div class="card-item">
                <div class="image"><img src="img/pages/example/basket-item.jpg"></div>
                <a href="#">Держатель для коронок Morse (32-168 мм, 9,5 мм)*</a>
                <p>1 199 р.</p>
                <div class="main-button"><span>Добавить</span></div>
            </div>
            <div class="card-item">
                <div class="image"><img src="img/pages/example/basket-item.jpg"></div>
                <a href="#">Держатель для коронок Morse (32-168 мм, 9,5 мм)*</a>
                <p>1 199 р.</p>
                <div class="main-button"><span>Добавить</span></div>
            </div>
            <div class="card-item">
                <div class="image"><img src="img/pages/example/basket-item.jpg"></div>
                <a href="#">Держатель для коронок Morse (32-168 мм, 9,5 мм)*</a>
                <p>1 199 р.</p>
                <div class="main-button"><span>Добавить</span></div>
            </div>
            <div class="card-item">
                <div class="image"><img src="img/pages/example/basket-item.jpg"></div>
                <a href="#">Держатель для коронок Morse (32-168 мм, 9,5 мм)*</a>
                <p>1 199 р.</p>
                <div class="main-button"><span>Добавить</span></div>
            </div>
        </div>
    </div>
    <a class="fancybox-button fancybox-button--close"></a>
</div>
<div class="select-city" id="select-city">
    <h3>Выберите свой город, или ближайший к нему:</h3>
    <ul>
        <li><a>Москва</a></li>
        <li><a>Санкт-Петербург</a></li>
        <li><a>Астрахань</a></li>
        <li><a>Барнаул</a></li>
        <li><a>Владивосток</a></li>
        <li><a>Волгоград</a></li>
        <li><a>Воронеж</a></li>
        <li><a>Екатеринбург</a></li>
        <li><a>Ижевск</a></li>
        <li><a>Иркутск</a></li>
        <li><a>Казань</a></li>
        <li><a>Кемерово</a></li>
        <li><a>Краснодар</a></li>
        <li><a>Красноярск</a></li>
        <li><a>Махачкала</a></li>
        <li><a>Нижний Новгород</a></li>
        <li><a>Новокузнецк</a></li>
        <li><a>Новосибирск</a></li>
        <li><a>Омск</a></li>
        <li><a>Оренбург</a></li>
        <li><a>Пермь</a></li>
        <li><a>Ростов-на-Дону</a></li>
        <li><a>Самара</a></li>
        <li><a>Саратов</a></li>
        <li><a>Тольятти</a></li>
        <li><a>Томск</a></li>
        <li><a>Тюмень</a></li>
        <li><a>Ульяновск</a></li>
        <li><a>Уфа</a></li>
        <li><a>Хабаровск</a></li>
        <li><a>Челябинск</a></li>
        <li><a>Ярославль</a></li>
    </ul>
    <div class="select-city__search">
        <p>От вашего выбора зависит стоимость товара и доставки</p>
        <form>
            <input placeholder="Введите название города" id="filter">
            <button class="main-button" type="submit"><span>Найти</span></button>
        </form>
        <ul class="results-list"></ul>
    </div>
    <a class="fancybox-button fancybox-button--close"></a>
</div>
<div class="request-popup popup" id="request">
    <h4>Обратный звонок</h4>
    <p>Мы перезвоним вам и поможем!</p>
    <form>
        <label>Представьтесь
            <input>
        </label>
        <label>Телефон <span>*</span>
            <input class="tel" placeholder="+7 (___) ___-__-__">
        </label><a class="main-button popup-js" href="#thanks-popup"><span>Жду звонок</span></a>
    </form>
    <a class="fancybox-button fancybox-button--close"></a>
</div>
<script src="{{asset('front/js/vendor.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
</body>
</html>