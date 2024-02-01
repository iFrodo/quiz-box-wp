<?
/*
Template Name: Main-page
Template Post Type: post, page, product
*/

?>

<body class="main-body">
    <div class="wrapper wrapper__main">
        <section class="hero">
            <? get_header(); ?>
            <div class="hero__content container">
                <h1 class="hero__title"><? the_field('promo_zagolovok') ?></h1>
                <p class="hero__text"><? the_field('promo_podzagolovok') ?></p>
                <button class="hero__button btn"><? the_field('promo_knopka') ?></button>
            </div>
        </section>

        <section class="week-news">
            <div class="container">
                <h2 class="week-news__main-title">Новинки недели
                    <img class='week-news__ico' src="<? echo get_template_directory_uri() ?>/assets/quiz-box/img/svg/Group.svg" alt="">
                </h2>
                <ul class="week-news__list">
                    <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                        'offset'      => 1,
                        'category'    => 2
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>

                            <li class="week-news__item">
                                <div class="week-news__header">
                                    <? the_post_thumbnail('full', array(
                                        'class' => 'week-news__img week-news_object-position'
                                    )) ?>
                                </div>
                                <div class="week-news__content">
                                    <h3 class="week-news__title"><? the_field('zagolovok_kartochki') ?></h3>
                                    <ul class="week-news__features">
                                        <li class="week-news__features-item">
                                            <img src="<? echo get_template_directory_uri() ?>/assets/quiz-box/img/svg/clock.svg" alt="" class="week-news__features-ico">
                                            <div class="week-news__features-text"><? the_field('prodolzhitelnost') ?> минут</div>
                                        </li>
                                        <li class="week-news__features-item">
                                            <img src="<? echo get_template_directory_uri() ?>/assets/quiz-box/img/svg/qa.svg" alt="" class="week-news__features-ico">
                                            <div class="week-news__features-text"><? the_field('kolichestvo_voprosov') ?> вопросов</div>
                                        </li>
                                    </ul>
                                    <p class="week-news__desc">
                                        <? the_field('opisanie_kartochki') ?>
                                    </p>
                                    <button class="week-news__button btn btn--theme-bordered">Смотреть</button>
                                </div>
                            </li>
                    <?php
                        }
                    } else {
                        // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>





                </ul>
            </div>
        </section>
        <section class="last-games">
            <div class="container">
                <h2 class="last-games__main-title">Прошедшие игры</h2>
                <ul class="last-games__list">





                    <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                        'offset'      => 1,
                        'category'    => 3
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>

                            <li class="last-games__item">
                                <a class="last-games__card" href="#">
                                    <? the_post_thumbnail('full', array(
                                        'class' => 'last-games__img'
                                    )) ?>
                                    <div class="last-games__content__box">
                                        <date class="last-games__date"><? the_field('data') ?></date>
                                        <h3 class="last-games__title"><? the_field('zagolovok') ?></h3>
                                        <p class="last-games__desc">
                                            <? the_field('opisanie') ?>
                                        </p>
                                    </div>
                                </a>
                            </li>
                    <?php
                        }
                    } else {
                        // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>

















                </ul>
                <div class="nav-menu">
                    <p class="nav-menu__info">Страница 1 из 7</p>
                    <ul class="nav-menu__list">
                        <li class="nav-menu__item"><a class='nav-menu__link' href="1">1</a></li>
                        <li class="nav-menu__item"><a class='nav-menu__link' href="2">2</a></li>
                        <li class="nav-menu__item"><a class='nav-menu__link' href="3">3</a></li>
                        <li class="nav-menu__item"><a class='nav-menu__link' href="4">4</a></li>
                        <li class="nav-menu__item"><a class='nav-menu__link' href="5">5</a></li>
                        <li class="nav-menu__item"><a class='nav-menu__link' href="6">6</a></li>
                        <li class="nav-menu__item"><a class='nav-menu__link' href="7">7</a></li>

                    </ul>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container about__container">
                <div class="about__img-box">
                    <img src="<? echo get_template_directory_uri() ?>/assets/quiz-box/img/kviz_pliz__nizhnii_novgorod_1_qg_large 1.png" alt="about__decor" class="about__img">
                </div>
                <div class="about__desc">
                    <h2 class="about__title">О нас</h2>
                    <p class="about__text">
                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более
                        менее осмысленного текста рыбы на русском языке,а начинающему оратору отточить навык публичных
                        выступлений в домашних условиях.
                    </p>
                    <button class="about__button btn btn--theme-bordered">Подробнее</button>
                </div>
            </div>
        </section>
    </div>


</body>
<? get_footer(); ?>

</html>