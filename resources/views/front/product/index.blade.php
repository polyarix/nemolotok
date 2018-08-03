@extends('front.layouts.app')
@section('body_class', 'card-item')
@section('content')
    <section class="card-item__main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs-list"><a href="#">Главная
                        <svg>
                            <use xlink:href="{{asset('front/img/sprite-inline.svg#arrow-bread')}}"></use>
                        </svg>
                    </a><span>Лицензии</span></div>
            </div>
        </section>
        <div class="container">
            <div class="card-item__photos">
                <div class="gallery gallery-nav">
                    <div class="gallery-nav-js">
                        @foreach($product->files as $file)
                            <div class="item-img"><img src="{{asset('storage/'.$file->images->where('tag', 'list')->first()->url)}}"></div>
                        @endforeach
                    </div>
                </div>
                <div class="gallery gallery-for">
                    @foreach($product->files as $file)
                    <a class="open-modal__gallery item-img"
                                                    href="{{asset('storage/'.$file->images->where('tag', 'big')->first()->url)}}" rel="gallery"
                                                    title="Держатель для коронок Morse (32-168 мм, 13 мм)"><img
                                src="{{asset('storage/'.$file->images->where('tag', 'big')->first()->url)}}">
                    </a>
                    @endforeach
                </div>
            </div>

            <div class="card-item__info">
                <h3>{{$product->description->name or ""}}</h3>
                <div class="params"><a href="">21 отзыв</a>
                    <p>Код: {{$product->sku or ""}}</p>

                    <div class="available">
                        <p>В наличии</p>
                    </div>

                </div>
                <div class="brand">
                    <div class="left">
                        <p>Бренд: <b>Morмse</b></p>
                        <p>Страна производитель: <b>Германия</b></p>
                    </div>
                    <div class="right"><img src="{{asset('front/img/pages/example/brand1.jpg')}}"></div>
                </div>
                <div class="price-block">
                    <div class="price">
                        <div class="main">
                            <p>Цена за набор</p><b>178 149 р.</b>
                        </div>
                        <div class="sales">
                            <p>198 944 р.</p><span>выгода 20 795 р.</span>
                        </div>
                    </div>
                    <div class="count">
                        <p>Кол-во, шт</p>
                        <div class="counter">
                            <div class="counter-item minus-js">-</div>
                            <div class="counter-item value-js">1</div>
                            <div class="counter-item plus-js">+</div>
                        </div>
                        <div class="buy-btn main-button popup-js active-basket-popup" href="#basket-popup"><span>В корзину</span>
                        </div>
                        <a class="buy-one-click popup-js" href="#fast-buy">в 1 клик</a>
                    </div>
                </div>
                <div class="delivery">
                    <div class="links"><a href="#">
                            <svg>
                                <use xlink:href="img/sprite-inline.svg#message"></use>
                            </svg>
                            Оставить отзыв</a><a href="#">
                            <svg>
                                <use xlink:href="img/sprite-inline.svg#favorite"></use>
                            </svg>
                            Удалить из избранного</a></div>
                    <div class="delivery__block">
                        <h6>Доставка</h6>
                        <div class="list">
                            <p><span>Курьером</span><span>250 руб</span></p>
                            <p><span>Самовывоз</span><span>Бесплатно</span></p>
                        </div>
                        <a href="#">Другие способы доставки</a>
                    </div>
                    <div class="delivery__block">
                        <h6>Оплата</h6>
                        <p>Наличными (при получении), безналичная, платежной картой <a href="#">подробнее</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card-item__kit">
        <div class="container">
            <h5>Вместе дешевле!</h5>
            <div class="card-item__kit--item">
                <div class="image"><img src="img/pages/example/card1.jpg"></div>
                <div class="info"><a href="#">Устройство для охлажде ния при сверлении</a>
                    <p>10 768 р.</p>
                </div>
            </div>
            <div class="plus"></div>
            <div class="card-item__kit--item">
                <div class="image"><img src="img/pages/example/card1.jpg"></div>
                <div class="info"><a href="#">Устройство для охлажде ния при сверлении</a>
                    <p>10 768 р.</p>
                </div>
            </div>
            <div class="result">
                <div class="main">
                    <p>Цена за комплект</p><b>178 149 р.</b>
                </div>
                <div class="sales">
                    <p>198 944 р.</p><span>выгода 20 795 р.</span>
                </div>
                <div class="main-button"><span>Комплект в корзину</span></div>
            </div>
        </div>
    </section>
    <section class="card-item__description">
        <div class="container">
            <div class="card-item__description--wrapper">
                <div class="card-item__description--left tabs">
                    <ul>
                        <li class="active"><a href="#description">Доставка</a></li>
                        <li><a href="#equipment">Комплектация</a></li>
                        <li><a href="#item-video">Видео</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                    </ul>
                    <div class="item-description active" id="description">
                        <div class="list">
                            <h6>Характеристики:</h6>
                            <p><span>Мощность, Вт</span><span>2000</span></p>
                            <p><span>Посадочный диаметр диска, мм</span><span>30</span></p>
                            <p><span>Регулировка оборотов:</span><span>нет</span></p>
                        </div>
                        <div class="list">
                            <h6>Производство:</h6>
                            <p><span>Страна производитель:</span><span>Германиия</span></p>
                        </div>
                        <div class="list">
                            <h6>Документация:</h6>
                            <div class="link">
                                <div class="pdf-icon"><span>pdf</span></div>
                                <div class="link-info"><a href="#">Сертификат диллера</a><span>pdf, 1.24 mb</span></div>
                            </div>
                            <div class="link">
                                <div class="pdf-icon"><span>pdf</span></div>
                                <div class="link-info"><a href="#">Сертификат соответствия</a><span>pdf, 1.78 mb</span>
                                </div>
                            </div>
                        </div>
                        <h6>Приобретайте выжигатель по дереву в нашем интернет-магазине</h6>
                        <p>Для создания различных рисунков и узоров на деревянной поверхности используется выжигатель по
                            дереву. Если приобрести этот прибор для ребёнка, то можно его приобщить к прикладному
                            искусству и занятию творчеством. Можно купить выжигатель по дереву и для подарка взрослому
                            человеку, ведь для многих подобные вещи – это ностальгия по собственному детству.
                            Интернет-магазин Nemolotok.ru предлагает своим клиентам различные модели таких устройств. В
                            нашем каталоге вы всегда сможете найти вариант, который придётся по душе.</p>
                        <p>Выжигатель по дереву с насадками немецкой фирмы Pebaro поможет вашему ребенку научиться
                            интересному и увлекательному творчеству. Комплект включает в себя 20 фигурных насадок для
                            выжигания самых разнообразных узоров и картинок. Выжигательный аппарат оснащен качественной
                            иглой-накаливания, позволяющей делать четкие и тонкие линии. Набор Pebaro поспособствует
                            развитию у ребенка усидчивости и аккуратности, а также станет прекрасным подарком как для
                            мальчиков, так и для девочек.</p>
                        <h6>Что представляет собой выжигатель по дереву</h6>
                        <p>Долгие годы пирография была весьма модным увлечением. И сегодня такое занятие вызывает
                            неподдельный интерес, ведь создаваемое изображение особенное, абсолютно не похожее ни на что
                            другое. В продаже имеются аппараты, принцип действия которых отличается:</p>
                        <ol>
                            <li>Устройство, позволяющее изменять уровень нагрева. Для этого агрегат подключается к
                                понижающему трансформатору, что предоставляет весьма широкие возможности для творчества.
                                Такой выжигатель по дереву купить в Москве можно для выполнения очень тонких,
                                высокохудожественных работ;
                            </li>
                            <li>Устройства с нерегулируемым нагревом. Производитель изначально устанавливает оптимальный
                                уровень нагрева, отрегулировать который не получится. Такие устройства имеют более
                                демократичную цену, просты в эксплуатации и очень долговечны. В комплект поставки обычно
                                входит несколько сменных насадок.
                            </li>
                        </ol>
                        <h6>Что нужно учесть при выборе</h6>
                        <p>Собираясь выжигатель по дереву купить в Москве, необходимо принять во внимание ряд факторов,
                            которые влияют на выбор. В первую очередь, следует определиться с возрастом одариваемого.
                            Сегодня аппараты для пирографии чаще всего выбирают в подарок ребёнку. Наш интернет-магазин
                            Nemolotok.ru рекомендует делать такие подарки только тем детям, которым уже исполнилось 8
                            лет.</p>
                        <p>При покупке нужно удостовериться, что в набор входят дополнительные насадки, которые помогают
                            создавать разнообразные узоры. Желательно также, чтобы в комплекте имелись эскизы для
                            сюжетов разного уровня сложности. Это поможет в быстром освоении приспособления.</p>
                        <p>Для того чтобы купить выжигатель по дереву, вам необходимо просто выбрать подходящую модель в
                            нашем магазине. У нас представлены лучшие аппараты для пирографии. Обращайтесь к нам,
                            оформляйте заказ, и вскоре вы или ваши дети сможете наслаждаться творчеством.</p>
                        <h6>Последний отзыв</h6>
                        <div class="reviews__wrapper--block last-review">
                            <div class="block__wrapper">
                                <div class="quote">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#quote"></use>
                                    </svg>
                                </div>
                                <p><b>Светлана</b></p><span>21 июня 2017</span>
                                <p>Мой Сын стал счастливым обладателем станка Playmat , и я, не менее счастливая мама
                                    спешу поделиться своими впечатлениями. Как мама, я бесконечно рада тому факту, что
                                    сын попросил в подарок не очередной бездушный (читать ненужный) «гаджет» а
                                    инструмент настоящего мужчины! Ребенок наткнулся на видеоурок в интернете и
                                    «загорелся». Сразу скажу, что папа наш с «золотыми руками» и кучей нужных и полезных
                                    инструментов всегда был и есть образец для подражания. Но видно сын из роли
                                    подмастерье вырос и это не может не радовать! Как мама, я сомневалась и честно
                                    сказать, не знала, что есть безопасные для детей станки! Изучила всю доступную
                                    информацию в интернете. Самая полная информация была не сайте... Nemolotok.ru! Там
                                    же я нашла видео, которые так впечатлили моего сына. Но решающим для меня стал
                                    разговор с сотрудником интернет магазина! С такой профессиональной технической
                                    поддержкой сомнений не осталось - нам нужен «PLaymat»! Хочу выразить свою
                                    благодарность лично Олегу Рудакову! Спасибо Вам за внимательное , вежливое и
                                    доброжелательное отношение и самое главное за профессионально грамотные ответы на
                                    все вопросы!!!! Nemolotok.ru спасибо Вам за неформальное отношение! За то, что
                                    создаете видео уроки и бесплатно дарите новые идеи! За возможность приобрести
                                    дополнительные инструменты и запасные части к станку, а так же все расходные
                                    материалы для творчества! P.S. Станком очень довольны, оправдал ожидания на все
                                    100%! Мой сын не «волшебник», но он уже учится…</p><a class="open" href="#"><span>Развернуть</span>
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                    </svg>
                                </a><a class="answer" href="#">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#speech"></use>
                                    </svg>
                                    <span>Ответить</span></a>
                            </div>
                            <div class="answer-form">
                                <h5>Оставить комментарий</h5>
                                <form>
                                    <label>
                                        <textarea maxlength="1000"></textarea>
                                    </label>
                                    <button class="main-button"><span>Отправить</span></button>
                                    <button class="main-button cancel"><span>Отмена</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item-equipment" id="equipment">
                        <div class="list">
                            <h6>Параметры упакованного товара:</h6>
                            <p><span>Мощность, Вт</span><span>2000</span></p>
                            <p><span>Посадочный диаметр диска, мм</span><span>30</span></p>
                            <p><span>Регулировка оборотов:</span><span>нет</span></p>
                        </div>
                        <ul>
                            <li>Станины станка – 2 шт.;</li>
                            <li><a href="">Задняя и передняя бабка;</a></li>
                            <li>Выключатель электродвигателя;</li>
                            <li>Сверло – 1 шт.;</li>
                            <li>Рабочий столик для сверлильного и шлифовального станка – 1 шт.;</li>
                            <li>Рабочий столик для выпиливания – 1 шт.;</li>
                            <li>Шлифовальный круг – 2 шт.;</li>
                            <li>Лобзики – 2 шт.;</li>
                            <li>Крышка шлифовального устройства;</li>
                            <li>Подставка для стамески (суппорт);</li>
                            <li>Определитель центра – 1шт.;</li>
                            <li>Электробезопасный адаптер питания на 12 В;</li>
                            <li>Отвёртка – 1 шт.;</li>
                            <li>Полукруглая стамеска для токарных работ;</li>
                            <li>Основной блок лобзика – 1 шт.;</li>
                            <li>Запасной приводной ремень – 1 шт.;</li>
                            <li>Упорный центр – 1 шт.;</li>
                            <li>Эксцентриковая насадка – 1 шт.;</li>
                            <li>Винты 45 мм – 4 шт., 12 мм - 2 шт.;</li>
                            <li>Подробные инструкции со сборочными чертежами и практическими примерами;</li>
                            <li>Деревянные заготовки для токарной обработки и распиловки диматером 20 мм – 4 шт., 7 см
                                *15 см – 4 штр.
                            </li>
                        </ul>
                    </div>
                    <div class="item-video" id="item-video">
                        <div class="video-item">
                            <div class="image">
                                <div class="transparent">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#video"></use>
                                    </svg>
                                </div>
                                <div class="duration"><span>1:18</span></div>
                                <img src="img/pages/example/video1.jpg" alt="">
                            </div>
                            <div class="title"><span>Гравировка на пасхальных яйцах</span></div>
                        </div>
                        <div class="video-item">
                            <div class="image">
                                <div class="transparent">
                                    <svg>
                                        <use xlink:href="img/sprite-inline.svg#video"></use>
                                    </svg>
                                </div>
                                <div class="duration"><span>1:18</span></div>
                                <img src="img/pages/example/video1.jpg" alt="">
                            </div>
                            <div class="title"><span>Гравировка на пасхальных яйцах</span></div>
                        </div>
                    </div>
                    <div class="item-reviews" id="reviews">
                        <div class="reviews__wrapper">
                            <div class="reviews__title">
                                <h2>Отзывы о Держатель для коронок Morse (32-168 мм, 13 мм)</h2><a class="main-button"
                                                                                                   href="#reviews-form"><span>Добавить отзыв</span></a>
                            </div>
                            <div class="reviews__wrapper--block">
                                <div class="block__wrapper">
                                    <div class="quote">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#quote"></use>
                                        </svg>
                                    </div>
                                    <p><b>Марина</b></p><span>20 декабря 2017</span>
                                    <p>Спасибо Гузель (она принимала заказ и предупреждала о том, что инструменты для
                                        начинающих не заточены) и курьеру-водителю Владимиру Сергеевичу за оперативную и
                                        слаженную работу. Успехов фирме!</p><a class="answer" href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#speech"></use>
                                        </svg>
                                        <span>Ответить</span></a>
                                </div>
                                <div class="answer-form">
                                    <h5>Оставить комментарий</h5>
                                    <form>
                                        <label>
                                            <textarea maxlength="1000"></textarea>
                                        </label>
                                        <button class="main-button"><span>Отправить</span></button>
                                        <button class="main-button cancel"><span>Отмена</span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="reviews__wrapper--block">
                                <div class="block__wrapper">
                                    <div class="quote">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#quote"></use>
                                        </svg>
                                    </div>
                                    <p><b>Светлана</b></p><span>21 июня 2017</span>
                                    <p>Мой Сын стал счастливым обладателем станка Playmat , и я, не менее счастливая
                                        мама спешу поделиться своими впечатлениями. Как мама, я бесконечно рада тому
                                        факту, что сын попросил в подарок не очередной бездушный (читать ненужный)
                                        «гаджет» а инструмент настоящего мужчины! Ребенок наткнулся на видеоурок в
                                        интернете и «загорелся». Сразу скажу, что папа наш с «золотыми руками» и кучей
                                        нужных и полезных инструментов всегда был и есть образец для подражания. Но
                                        видно сын из роли подмастерье вырос и это не может не радовать! Как мама, я
                                        сомневалась и честно сказать, не знала, что есть безопасные для детей станки!
                                        Изучила всю доступную информацию в интернете. Самая полная информация была не
                                        сайте... Nemolotok.ru! Там же я нашла видео, которые так впечатлили моего сына.
                                        Но решающим для меня стал разговор с сотрудником интернет магазина! С такой
                                        профессиональной технической поддержкой сомнений не осталось - нам нужен
                                        «PLaymat»! Хочу выразить свою благодарность лично Олегу Рудакову! Спасибо Вам за
                                        внимательное , вежливое и доброжелательное отношение и самое главное за
                                        профессионально грамотные ответы на все вопросы!!!! Nemolotok.ru спасибо Вам за
                                        неформальное отношение! За то, что создаете видео уроки и бесплатно дарите новые
                                        идеи! За возможность приобрести дополнительные инструменты и запасные части к
                                        станку, а так же все расходные материалы для творчества! P.S. Станком очень
                                        довольны, оправдал ожидания на все 100%! Мой сын не «волшебник», но он уже
                                        учится…</p><a class="open" href=""><span>Развернуть</span>
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                        </svg>
                                    </a><a class="answer" href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#speech"></use>
                                        </svg>
                                        <span>Ответить</span></a>
                                </div>
                                <div class="answer-form">
                                    <h5>Оставить комментарий</h5>
                                    <form>
                                        <label>
                                            <textarea maxlength="1000"></textarea>
                                        </label>
                                        <button class="main-button"><span>Отправить</span></button>
                                        <button class="main-button cancel"><span>Отмена</span></button>
                                    </form>
                                </div>
                                <div class="reviews__wrapper--block comment">
                                    <div class="block__wrapper">
                                        <div class="comment-icon">
                                            <svg>
                                                <use xlink:href="img/sprite-inline.svg#comment"></use>
                                            </svg>
                                        </div>
                                        <div class="quote">
                                            <svg>
                                                <use xlink:href="img/sprite-inline.svg#quote"></use>
                                            </svg>
                                        </div>
                                        <p><b>Олег Nemolotok.ru</b></p><span>30 мая 2017</span>
                                        <p>Спасибо Светлана за теплые слова в наш адрес. На самом деле мы стараемся. На
                                            выставках, в школах я даю детям возможность самим что-то сделать. И
                                            представьте, какая радость в глазах у детей, когда у них получается выпилить
                                            на этих станках какую-то интересную вещь. Дети всегда говорят, то что
                                            думают. Они не лукавят. Понравилось-значит остаются, нет - уходят. Вижу, что
                                            многих это действительно занимает, что-то совершенно новое. Вещь, которая
                                            делает детей более самостоятельными ( ведь это их работа, и сделано своими
                                            руками). Когда ребенок что-то может сделать сам - это действительно для него
                                            шаг вперед, шаг к утверждению себя. А если родители это оценят - вдвойне
                                            интереснее. Это мои впечатления после выставок, после посещения школ,
                                            мастерских с "PLAYMAT". Для меня самого это новое направление работы. Но
                                            впечатляющее. Еще раз спасибо, что вашему ребенку понравился "PLAYMAT"</p><a
                                                class="open" href=""><span>Развернуть</span>
                                            <svg>
                                                <use xlink:href="img/sprite-inline.svg#arrow"></use>
                                            </svg>
                                        </a><a class="answer" href="">
                                            <svg>
                                                <use xlink:href="img/sprite-inline.svg#speech"></use>
                                            </svg>
                                            <span>Ответить</span></a>
                                    </div>
                                    <div class="answer-form">
                                        <h5>Оставить комментарий</h5>
                                        <form>
                                            <label>
                                                <textarea maxlength="1000"></textarea>
                                            </label>
                                            <button class="main-button"><span>Отправить</span></button>
                                            <button class="main-button cancel"><span>Отмена</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews__wrapper--block">
                                <div class="block__wrapper">
                                    <div class="quote">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#quote"></use>
                                        </svg>
                                    </div>
                                    <p><b>Марат</b></p><span>27 мая 2017</span>
                                    <p>Набор интересный, для развития аккуратности и мелкой моторики у ребенка подходит,
                                        как нельзя лучше. Отдельное спасибо персоналу интернет-магазина за оперативность
                                        и отзывчивость. Удачи, успеха в деле продвижения действительно полезного
                                        продукта.</p><a class="answer" href="">
                                        <svg>
                                            <use xlink:href="img/sprite-inline.svg#speech"></use>
                                        </svg>
                                        <span>Ответить</span></a>
                                </div>
                                <div class="answer-form">
                                    <h5>Оставить комментарий</h5>
                                    <form>
                                        <label>
                                            <textarea maxlength="1000"></textarea>
                                        </label>
                                        <button class="main-button"><span>Отправить</span></button>
                                        <button class="main-button cancel"><span>Отмена</span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="reviews__wrapper--form" id="reviews-form">
                                <h4>Добавить отзыв</h4>
                                <form>
                                    <div class="message">
                                        <label>Сообщение
                                            <textarea placeholder="Текст отзыва" maxlength="700"></textarea>
                                        </label>
                                    </div>
                                    <div class="data">
                                        <label>Имя
                                            <input placeholder="Ваше имя" required>
                                        </label>
                                        <label>Эл. почта <span>*</span>
                                            <input placeholder="ivan@gmail.com" required type="email">
                                        </label>
                                        <button class="main-button"><span>Добавить отзыв</span></button>
                                    </div>
                                    <div class="agree">
                                        <input type="checkbox" id="agree-check">
                                        <label for="agree-check">Согласие на обработку персональных данных
                                            <svg>
                                                <use xlink:href="img/sprite-inline.svg#check"></use>
                                            </svg>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-item__description--right">
                    <p>Ваш товар</p>
                    <div class="item-card">
                        <div class="item-card__wrapper"><a class="item-card__image" href=""><img
                                        src="img/pages/example/offer-slide1.jpg" alt=""></a>
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
                                        <use xlink:href="img/sprite-inline.svg#favorite">
                                            <span>Добавить в избранное</span></use>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <p>Видео с товаром</p>
                    <div class="video-item">
                        <div class="image">
                            <div class="transparent">
                                <svg>
                                    <use xlink:href="img/sprite-inline.svg#video"></use>
                                </svg>
                            </div>
                            <div class="duration"><span>1:18</span></div>
                            <img src="img/pages/example/video1.jpg" alt="">
                        </div>
                        <div class="title"><span>Гравировка на пасхальных яйцах</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="similar-items">
        <div class="container">
            <h6>Похожие товары</h6>
            <div class="similar-items__wrapper">
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
        </div>
    </section>
    <section class="viewed">
        <div class="container">
            <h4>Вы недавно смотрели</h4>
            <div class="viewed__wrapper">
                <div class="viewed__item">
                    <div class="viewed__item--image"><img src="img/pages/example/viewed1.jpg" alt=""></div>
                    <div class="viewed__item--info"><a href="">Устройство для охлаждения</a>
                        <div class="price"> 1 120 р.</div>
                    </div>
                </div>
                <div class="viewed__item">
                    <div class="viewed__item--image"><img src="img/pages/example/viewed2.jpg" alt=""></div>
                    <div class="viewed__item--info"><a href="">Устройство для охлаждения при сверлении</a>
                        <div class="price"> 10 768 р.</div>
                    </div>
                </div>
                <div class="viewed__item">
                    <div class="viewed__item--image"><img src="img/pages/example/viewed3.jpg" alt=""></div>
                    <div class="viewed__item--info"><a href="">Диск алмазный для заточки инструмента дрели D110</a>
                        <div class="price"> 3 181 р.</div>
                    </div>
                </div>
                <div class="viewed__item">
                    <div class="viewed__item--image"><img src="img/pages/example/viewed1.jpg" alt=""></div>
                    <div class="viewed__item--info"><a href="">Устройство для охлаждения</a>
                        <div class="price"> 1 120 р.</div>
                    </div>
                </div>
                <div class="viewed__item">
                    <div class="viewed__item--image"><img src="img/pages/example/viewed2.jpg" alt=""></div>
                    <div class="viewed__item--info"><a href="">Устройство для охлаждения при сверлении</a>
                        <div class="price"> 10 768 р.</div>
                    </div>
                </div>
                <div class="viewed__item">
                    <div class="viewed__item--image"><img src="img/pages/example/viewed3.jpg" alt=""></div>
                    <div class="viewed__item--info"><a href="">Диск алмазный для заточки инструмента дрели D110</a>
                        <div class="price"> 3 181 р.</div>
                    </div>
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