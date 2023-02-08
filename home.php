<?php
/*
Template Name: Home
*/ ?>
<?php get_header(); ?>

<body>
    <div class="wrapper">
        <section class="home">
            <video class="home__video" src="<?php bloginfo('template_url'); ?>/assets/img/dish.mp4" autoplay loop muted></video>
            <div class="home__container">
                <div class="container">
                    <nav class="top-menu">
                        <ul class="top-menu__list">
                            <li class="top-menu__item"><a href="#about">о ресторане</a> </li>
                            <li class="top-menu__item"><a href="#team">команда</a> </li>
                            <li class="top-menu__item"><a href="#order">заказать</a> </li>
                            <?php the_custom_logo(); ?>
                            <!-- <li class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png"></li> -->
                            <li class="top-menu__item"><a href="#menu">меню</a> </li>
                            <li class="top-menu__item"><a href="#events">мероприятия</a> </li>
                            <li class="top-menu__item"><a href="#contacts">контакты</a> </li>
                        </ul>
                    </nav>
                </div>
                <div class="container home__container-center">
                    <div class="time-work">Пн - Пт: 8 - 22, Сб - Вс: 9 - 24</div>
                    <div class="home__text">
                        <h6>РЕСТОРАН</h6>
                        <h1>GOLDEN EGG</h1>
                        <div class="home__btns">
                            <a href="#order" class="btn__order">заказать столик</a>
                            <a href="#about">о ресторане</a>
                        </div>
                        <a class="arrow__about" href="#about"><svg>
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite-icons.svg#arrow"></use>
                            </svg></a>

                    </div>
                    <div class="socials">
                        <a href="#" target="_blank">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite-icons.svg#facebook"></use>
                            </svg>
                        </a>
                        <a href="#" target="_blank">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite-icons.svg#twitter"></use>
                            </svg>
                        </a>
                        <a href="#" target="_blank">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite-icons.svg#instagram"></use>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!--end home-->

        <section class="about" id="about">
            <div class="container about__container">
                <div class="about__text">
                    <h2>О ресторане</h2>
                    <p class="intro">Волшебная атмосфера, безукоризненное обслуживание, изысканный интерьер и, самое главное, богатейший выбор вкуснейших блюд отменного качества – именно эти характеристики привлекают гостей в наш ресторан
                    </p>
                    <p>Официанты этого заведения знают все тонкости приготовления блюд, они подскажут гостям наиболее подходящие для них яства. Тут хорошо знают постоянных клиентов, умело угождая их вкусам.</p>
                    <p>Идеально дополняет ресторан уютная кофейня, находящаяся на первом этаже. Чашечка изумительного кофе и сладости от местного кондитера зарядят вас бодростью и позитивной энергией.</p>
                </div>
                <div class="about__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-img.jpg" width="475px" height="475px" alt="">
                    <div class="circle"></div>
                </div>
            </div>
        </section>
        <!--end about-->

        <section class="team" id="team">
            <div class="container">
                <h6>НАША КОМАНДА</h6>
            </div>
            <div class="container team__container">
                <div class="team__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/team-img.jpg" alt="">
                    <div class="circle"></div>
                </div>
                <div class="team__text">
                    <h2>ШЕФ-ПОВАР</h2>
                    <p class="intro">За подбор продуктов и приготовление вкусных блюд отвечает наш высококвалифицированный шеф-повар. Блюда в его исполнении превращаются в настоящие шедевры. Никто не останется равнодушным к такому непревзойденному сочетанию. </p>
                    <p>Своей работой мы хотим радовать каждого нашего посетителя. Мы гарантируем всем клиентам, что время, проведенное в нашем заведении, будет отличаться особым теплом и изысканным вкусом.</p>
                </div>
        </section>


        <section class="order" id="order">
            <div class="container order__container">
                <div class="order__text">
                    <h2>Заказать столик</h2>
                    <form action="" class="order-form">
                        <?php echo do_shortcode('[contact-form-7 id="25" title="Без названия"]') ?>

                        <!-- 
                        <input type="text" placeholder="Имя" required>
                        <input type="text" placeholder="Email" required>
                        <input type="text" placeholder="Телефон" required>
                        <div class="order__select">
                            <select required>
                                <option value="">Кол-во людей</option>
                                <option value="1">1</option>
                                <option value="2-5">2-5</option>
                                <option value="5-10">5-10</option>
                                <option value="10-40">10-40</option>
                                <option value="50-100">50-100</option>
                            </select>
                        </div>

                        <input type="text" placeholder="Дата (дата/месяц)" required>

                        <div class="order__select">
                            <select required>
                                <option value="">Время</option>
                                <option value="10:00-14:00">10:00-14:00</option>
                                <option value="14:00-18:00">14:00-18:00</option>
                                <option value="18:00-23:00">18:00-23:00</option>
                            </select>
                        </div>
                        <button type="submit">Оформить заказ</button> -->

                    </form>
                </div>
                <div class="order__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/order-img.jpg" alt="">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="container">
                <div class="order__contacts">
                    Пн - Пт: <strong>8 - 22</strong>, Сб - Вс: <strong>9 - 23</strong>, Телефон:<a href="<?php the_field('phone'); ?>"><?php the_field('phone'); ?> </a>/<a href="<?php the_field('phone2'); ?>"><?php the_field('phone2'); ?></a>
                </div>
            </div>
        </section>

        <section class="spec">
            <div class="container spec__container">
                <h6>Спец-предложения</h6>
            </div>
            <div class="swiper-container spec__slider">
                <div class="swiper-wrapper">

                    <!--slide-->
                    <div class="swiper-slide spec__slide">
                        <div class="container spec__slid-container">
                            <div class="spec__img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/slide1.jpg" alt="">
                                <div class="circle"></div>
                            </div>
                            <div class="spec__text">
                                <h2>Golden egg</h2>
                                <p class="intro">Невероятно красивый десерт Пирожное "Golden Egg".
                                    3D пирожное в форме яйца в гнёздышке. </p>
                                <p>Узнать, каково золото на вкус, приглашаем в наш ресторан. Темный бельгийский шоколад, Амаретто, мусс мята-лемонграсс, центр морковь-маракуйя — удержаться почти невозможно. </p>
                            </div>

                        </div>
                    </div>
                    <!--end slide-->

                </div>
                <div class="swiper-pagination spec__pagination">

                </div>
            </div>
        </section>

    </div>
    <!--end wrapper-->

    <section class="menu" id="menu">
        <h2>Наше меню</h2>
        <p class="intro menu__intro">Предлагаем насладиться кухней от профессиональных поваров ресторана GOLDEN EGG! </p>
        <div class="tabs_container">
            <ul class="tabs">
                <li class="tabs__item active" data-tab="#snacks">Закуски</li>
                <li class="tabs__item" data-tab="#meats">Мясные блюда</li>
                <li class="tabs__item" data-tab="#salads">Салаты</li>
                <li class="tabs__item">Десерты</li>
                <li class="tabs__item">Вина</li>
                <li class="tabs__item">Напитки</li>
            </ul>
        </div>

        <div class="menu__sliders">
            <!--slider1-->
            <div class="menu__slider-block show" id="snacks">
                <div class="swiper-container menu__slider">
                    <div class="swiper-wrapper">
                        <!--карточка1-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu1.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка2-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu1.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка3-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu1.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка4-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu1.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!--карточка5-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu1.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!--карточка6-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu1.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                    </div>
                    <div class="swiper-pagination menu__pagination">

                    </div>
                </div>
            </div>
            <!--end slider1-->


            <!--slider2-->
            <div class="menu__slider-block" id="meat">
                <div class="swiper-container menu__slider">
                    <div class="swiper-wrapper">
                        <!--карточка1-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка2-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка3-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка4-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                    </div>
                    <div class="swiper-pagination menu__pagination">

                    </div>
                </div>
            </div>
            <!--end slider2-->


            <!--slider3-->
            <div class="menu__slider-block" id="salads">
                <div class="swiper-container menu__slider">
                    <div class="swiper-wrapper">
                        <!--карточка1-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка2-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка3-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                        <!--карточка4-->
                        <div class="swiper-slide">
                            <div class="menu__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/menu2.jpg" alt="" class="menu__item-img">
                                <div class="menu__item-text">
                                    <h6 class="menu__title">Фирменный цезарь</h6>
                                    <h6 class="menu__price">255руб</h6>
                                    <p class="menu__desc">с тигровыми креветками, копченой куриной грудкой, курицей-гриль, салатом Айсберг, перепелиными яйцами, томатами Черри и и соусом Дор-Блю </p>
                                </div>
                            </div>
                        </div>
                        <!--end-->

                    </div>
                    <div class="swiper-pagination menu__pagination">

                    </div>
                </div>
            </div>
            <!--end slider3-->


        </div>

    </section>


    <section class="events" id="events">
        <h6>Частные мероприятия</h6>
        <div class="container events__container">
            <div class="left__event">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/event1.png" alt="">
                <div class="circle"></div>
                <div class="event__title">Свадебный банкет</div>
            </div>
            <div class="right__event">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/event2.png" alt="">
                <div class="circle"></div>
                <div class="event__title">Корпоративные вечеринки</div>
            </div>
        </div>
        <div class="container events__contact">
            По вопросам частных мероприятий звоните: <a href="<?php the_field('phone'); ?>"><?php the_field('phone'); ?> </a>/<a href="<?php the_field('phone2'); ?>"><?php the_field('phone2'); ?></a> или используйте контактную форму.
        </div>
    </section>


    <section class="contacts" id="contacts">
        <h2>Контакты</h2>
        <p class="intro contacts__intro">
            Вы можете оставить нам сообщение через форму ниже, или любым другим, удобным вам способом
        </p>
        <form action="" class="container contacts__form">

            <?php echo do_shortcode('[contact-form-7 id="23" title="Контактная форма"]') ?>

            <!-- <input type="text" placeholder="Имя" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Телефон" required>
            <textarea placeholder="Сообщение"></textarea>
            <div class="contacts__data-submit">
                <div class="contacts__data">

                    <div class="contacts__data-item">
                        <svg>
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite-icons.svg#map"></use>
                        </svg>
                        <span>пр-т. Победы, 105, Мариуполь</span>
                    </div>

                    <div class="contacts__data-item">
                        <svg>
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite-icons.svg#phone"></use>
                        </svg>
                        <a href="tel:+38098 729 13 67">+38098 729 13 67</a>
                    </div>

                    <div class="contacts__data-item">
                        <svg>
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite-icons.svg#email"></use>
                        </svg>
                        <span> info@goldenegg.com</span>
                    </div>

                </div>
                <button type="submit"> Отправить сообщение</button>
            </div> -->
        </form>
    </section>



    <?php get_footer(); ?>