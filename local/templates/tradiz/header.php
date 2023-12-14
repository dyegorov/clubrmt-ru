<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <? $APPLICATION->ShowHead(); ?>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=PT+Serif:wght@400;700&display=swap"
          rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/local/templates/tradiz/style.css"/>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>

<body id="page-top">
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<header class="header">
    <div class="container">
        <nav class="nav">
            <ul>
                <li class="nav__item">
                    <div class="nav__trigger">
                        Об Ассоциации
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                    </div>
                    <div class="nav__submenu">
                        <ul>
                            <li class="nav__subitem"><a href="/news">Новости</a></li>
                            <li class="nav__subitem"><a href="/about">Об Ассоциации</a></li>
                            <li class="nav__subitem"><a href="/photo">Фотогалерея</a></li>
                            <li class="nav__subitem">
                                <a href="/structure">Структура управления</a>
                            </li>
                            <li class="nav__subitem"><a href="/members">Почетные члены</a></li>
                            <li class="nav__subitem">
                                <a href="/about/partnership">Партнерство<br/>и выставочная деятельность</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <div class="nav__trigger">
                        Экспозиция по истории ВМФ
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                    </div>
                    <div class="nav__submenu">
                        <ul>
                            <li class="nav__subitem">
                                <a href="/about/expo-history">История создания экспозиции</a>
                            </li>
                            <li class="nav__subitem"><a href="/exponats">Экспонаты</a></li>
                            <li class="nav__subitem">
                                <a href="/excursion">Запись на экскурсию</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item museum">
                    <a href="https://clubrmt.tilda.ws/" class="nav__trigger">
                        Виртуальный музей
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/star.18f82ea7.svg" alt=""/>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="logo">
            <a href="/">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.86ce68ea.svg" alt=""/>
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/mobile.6bd31426.svg" alt="" class="mobile"/>
            </a>
        </div>
        <nav class="nav">
            <ul>
                <li class="nav__item">
                    <div class="nav__trigger">
                        Флот Ассоциации
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                    </div>
                    <div class="nav__submenu">
                        <ul>
                            <li class="nav__subitem">
                                <a href="/fleet-history">История создания флота Ассоциации</a>
                            </li>
                            <li class="nav__subitem">
                                <a href="/about/sloep/">Шлюпочные походы</a>
                            </li>
                            <li class="nav__subitem"><a href="/about/regatta">Парусные регаты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <div class="nav__trigger">
                        Работа с молодежью
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                    </div>
                    <div class="nav__submenu">
                        <ul>
                            <li class="nav__subitem"><a href="/pupils">Наши подопечные</a></li>
                            <li class="nav__subitem"><a href="/sea-practice">Морская практика</a></li>
                            <li class="nav__subitem">
                                <a href="/vuz-list">Военно-морские учебные заведения</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <div class="nav__trigger">
                        Просветительские проекты
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                    </div>
                    <div class="nav__submenu">
                        <ul>
                            <li class="nav__subitem">
                                <a href="/encyclopedia">Энциклопедия по истории военно-морской формы</a>
                            </li>
                            <li class="nav__subitem">
                                <a href="/books">Книги издательства Ассоциации</a>
                            </li>
                            <li class="nav__subitem">
                                <a href="#">Видео по истории флота</a>
                            </li>
                            <li class="nav__subitem">
                                <a href="/writers">Писатели маринисты</a>
                            </li>
                            <li class="nav__subitem">
                                <a href="/artists">Художники маринисты</a>
                            </li>
                            <li class="nav__subitem"><a href="#">Фильмы о море</a></li>
                            <li class="nav__subitem">
                                <a href="#">Военные автомобили</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="nav--btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="nav--mobile">
        <ul>
            <li class="nav__item">
                <div class="nav__trigger">
                    Об Ассоциации
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                </div>
                <div class="nav__submenu">
                    <ul>
                        <li class="nav__subitem"><a href="#">Новости</a></li>
                        <li class="nav__subitem"><a href="#">Об Ассоциации</a></li>
                        <li class="nav__subitem">
                            <a href="#">Структура управления</a>
                        </li>
                        <li class="nav__subitem">
                            <a href="#">Уставные документы</a>
                        </li>
                        <li class="nav__subitem"><a href="#">Почетные члены</a></li>
                        <li class="nav__subitem">
                            <a href="#">Партнерство<br/>и выставочная деятельность</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav__item">
                <div class="nav__trigger">
                    Экспозиция по истории ВМФ
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                </div>
                <div class="nav__submenu">
                    <ul>
                        <li class="nav__subitem">
                            <a href="#">История создания экспозиции</a>
                        </li>
                        <li class="nav__subitem"><a href="#">Экспонаты</a></li>
                        <li class="nav__subitem">
                            <a href="/excursion">Запись на экскурсию</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav__item museum">
                <a href="#" class="nav__trigger">
                    Виртуальный музей
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/star.18f82ea7.svg" alt=""/>
                </a>
            </li>
            <li class="nav__item">
                <div class="nav__trigger">
                    Флот Ассоциации
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                </div>
                <div class="nav__submenu">
                    <ul>
                        <li class="nav__subitem">
                            <a href="#">История создания флота Ассоциации</a>
                        </li>
                        <li class="nav__subitem">
                            <a href="/about/sloep/">Шлюпочные походы</a>
                        </li>
                        <li class="nav__subitem"><a href="#">Шлюпочные походы</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav__item">
                <div class="nav__trigger">
                    Работа с молодежью
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                </div>
                <div class="nav__submenu">
                    <ul>
                        <li class="nav__subitem"><a href="#">Наши подопечные</a></li>
                        <li class="nav__subitem"><a href="/sea-practice">Морская практика</a></li>
                        <li class="nav__subitem">
                            <a href="/vuz-list">Военно-морские учебные заведения</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav__item">
                <div class="nav__trigger">
                    Просветительские проекты
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/arr.5776fd5c.svg" alt=""/>
                </div>
                <div class="nav__submenu">
                    <ul>
                        <li class="nav__subitem">
                            <a href="/encyclopedia">Энциклопедия по истории военно-морской формы</a>
                        </li>
                        <li class="nav__subitem">
                            <a href="/books">Книги издательства Ассоциации</a>
                        </li>
                        <li class="nav__subitem">
                            <a href="#">Видео по истории флота</a>
                        </li>
                        <li class="nav__subitem">
                            <a href="/writers">Писатели маринисты</a>
                        </li>
                        <li class="nav__subitem">
                            <a href="/artists">Художники маринисты</a>
                        </li>
                        <li class="nav__subitem"><a href="#">Фильмы о море</a></li>
                        <li class="nav__subitem">
                            <a href="#">Военные автомобили</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</header>
