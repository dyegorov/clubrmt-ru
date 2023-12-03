<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>


    <section class="topslider">
        <div class="slider">
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/boat.1b4fdca0.jpg" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Ассоциация «Клуб&nbsp;Русская Морская&nbsp;Традиция»
                            </div>
                            <p>
                                Ассоциация ведет последовательную работу по сохранению памяти,
                                традиций и знаний о достижениях российского флота,
                                формированию интереса к профессии моряка-подводника,
                                воспитанию у молодого поколения гордости за свою страну.
                            </p>
                        </div>

                        <a href="#" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/boat2.b6ae07b1.jpg" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Ассоциация «Клуб&nbsp;Русская Морская&nbsp;Традиция»
                            </div>
                            <p>
                                Ассоциация ведет последовательную работу по сохранению памяти,
                                традиций и знаний о достижениях российского флота,
                                формированию интереса к профессии моряка-подводника,
                                воспитанию у молодого поколения гордости за свою страну.
                            </p>
                        </div>

                        <a href="#" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="headrow">
                <h2 class="h2">новости</h2>
                <a href="/news" class="btn btn--accent">Все новости</a>
            </div>
            <div class="news__grid">
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/n1.5b5b5d46.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            В честь Дня Военно-морского флота прошли торжественные
                            мероприятия на территории нашей исторической эскпозиции
                        </h3>
                        <div class="news__date">30.07.2023</div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/n2.33462fa5.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Члены Ассоциации и ветераны ВМФ приняли участие в праздничном
                            заплыве по случаю торжеств в День Военно-морского флота
                        </h3>
                        <div class="news__date">30.07.2023</div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/n3.ae07fa7e.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Ассоциация «Клуб Русская морская традиция» провела
                            парусно-гребную регату в честь Дня России
                        </h3>
                        <div class="news__date">30.07.2023</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="excursions">
        <div class="container">
            <div class="headrow">
                <h2 class="h2">экскурсии</h2>
                <a href="#" class="btn btn--accent">все экскурсии</a>
            </div>

            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/boat2.b6ae07b1.jpg" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__title">
                        Подводные судна со времен Петра I до наших дней
                    </div>
                    <p>Подводные судна со времен Петра I до наших дней</p>
                </div>
            </div>

            <a href="#" class="btn btn--accent btn--mobile">все экскурсии</a>

            <div class="headrow excursions__bottomrow">
                <h3 class="h2">
                    все экскурсии проводятся
                    <span class="underlined">бесплатно</span> посетить экспозицию по
                    истории ВМФ можно, только записавшийсь на экскурсию
                </h3>
                <a href="#" class="btn btn--accent">как посетить</a>
            </div>
        </div>
    </section>

    <section class="anounces">
        <div class="container">
            <div class="headrow">
                <h2 class="h2">анонсы</h2>
                <a href="#" class="btn btn--accent">все анонсы</a>
            </div>

            <div class="anounces__item">
                <div class="anounces__info">
                    <div class="anounces__title">
                        Приглашаем на праздник в честь Дня Военно-морского флота
                    </div>
                    <div class="anounces__date">27 июля 2023</div>
                    <p class="anounces__text">
                        Приглашаем провесит выходные на Истринском водохранилище,
                        ознакомиться с экспозицией Ассоциации, посвященной истории ВМФ.
                        этот ден пройдут традиционные соревнования на воде — парусная
                        регата. участники соревнований: члены ассоцаиаии, студенты
                        военно-морских училищ.<br/>
                        После награждения победителей состоит праздничный концерт.
                    </p>
                    <a class="btn">подробнее</a>
                </div>
                <div class="anounces__pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/ano.1d3cae85.jpg" alt=""/>
                </div>
            </div>

            <a href="#" class="btn btn--accent btn--mobile">все анонсы</a>
        </div>
    </section>

    <section class="virtual">
        <div class="container">
            <h2 class="h2">виртуальный музей ассоциации</h2>

            <div class="sliderinit1 virtual__slider">
                <a href="#" class="virtual__unit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/v1.e17ea738.jpg" alt="" class="bg"/>
                    <div class="virtual__info">
                        История подводных сил России. Часть II. От субмарин Джевецкого до
                        атомных субмарин
                    </div>
                </a>
                <a href="#" class="virtual__unit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/v2.d8e7a642.jpg" alt="" class="bg"/>
                    <div class="virtual__info">
                        Сверхмалые и специальные подводные лодки
                    </div>
                </a>
                <a href="#" class="virtual__unit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/v1.e17ea738.jpg" alt="" class="bg"/>
                    <div class="virtual__info">
                        История подводных сил России. Часть II. От субмарин Джевецкого до
                        атомных субмарин
                    </div>
                </a>
                <a href="#" class="virtual__unit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/v1.e17ea738.jpg" alt="" class="bg"/>
                    <div class="virtual__info">
                        История подводных сил России. Часть II. От субмарин Джевецкого до
                        атомных субмарин
                    </div>
                </a>
                <a href="#" class="virtual__unit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/v2.d8e7a642.jpg" alt="" class="bg"/>
                    <div class="virtual__info">
                        Сверхмалые и специальные подводные лодки
                    </div>
                </a>
                <a href="#" class="virtual__unit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/v1.e17ea738.jpg" alt="" class="bg"/>
                    <div class="virtual__info">
                        История подводных сил России. Часть II. От субмарин Джевецкого до
                        атомных субмарин
                    </div>
                </a>
            </div>

            <div class="headrow excursions__bottomrow">
                <h3 class="h2">
                    В разделе <span class="underlined">Виртуальный музей</span> вы
                    можете познакомиться со всеми виртуальными экспозиции истории ВМФ
                </h3>
                <a href="#" class="btn">все виртуальные экскурсии</a>
            </div>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/map.33b22b0b.jpg" alt="" class="map"/>
            <div class="capture">
                Чтобы перемещаться 3D туру, нажимайте на специальные метки со
                стрелками. Фото экспонатов можно рассмотреть вблизи, нажав на метку
                «фотокамера», рядом.
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="container">
            <h2 class="h2">проекты ассоциации</h2>
            <div class="projects__grid">
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p1.73376d1a.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Развитие музейной экспозиции, посвященной истории подводных сил
                        ВМФ
                    </div>
                </a>
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p2.bd56442b.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Военно-патриотическое воспитание молодежи
                    </div>
                </a>
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p3.a8dbda5a.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Сохранение исторического наследия флота
                    </div>
                </a>
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p4.74dd90a5.jpg" alt=""/>
                    </div>
                    <div class="projects__info">Парусно-гребные регаты</div>
                </a>
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p5.0e426b6d.jpg" alt=""/>
                    </div>
                    <div class="projects__info">Шлюпочные походы</div>
                </a>
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p6.cc1cd978.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Восстановление и реконструкция судов
                    </div>
                </a>
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p4.74dd90a5.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Партнёрство и выставочная деятельность
                    </div>
                </a>
                <a href="#" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p5.0e426b6d.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Исследовательская и издательская деятельность
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="study">
        <div class="container">
            <h2 class="h2">военно-морские учебные заведения</h2>

            <div class="sliderinit2 slider--blue virtual__slider">
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s1.adf67a6b.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Военно-морской политехнический университет «Военно-морская
                            академия»
                        </h3>
                        <div class="news__city">санкт-Петербург</div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s2.60063b11.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">Нахимовское военно-морское училище</h3>
                        <div class="news__city">санкт-Петербург</div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s3.b6fc5967.png" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Тихоокеанское высшее военно-морское училище имени С.О. Макарова,
                        </h3>
                        <div class="news__city">Владивосток</div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s1.adf67a6b.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Военно-морской политехнический университет «Военно-морская
                            академия»
                        </h3>
                        <div class="news__city">санкт-Петербург</div>
                    </div>
                </a>
            </div>

            <div class="headrow excursions__bottomrow">
                <h3 class="accent">
                    Справочная информация о российских учебных заведениях, занимающихся
                    подготовкой профессионалов морского дела и военно-морской службы
                </h3>
                <a href="#" class="btn btn--accent">все учебные заведения</a>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <h2 class="h2">партнеры ассоциации</h2>
            <div class="partners__grid">
                <div class="partners__item">
                    <div class="partners__logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/par1.a8d99913.png" alt=""/>
                    </div>
                    <div class="partners__title">
                        Военно-морской политехнический университет «Военно-морская
                        академия»
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/par2.d44da6e4.png" alt=""/>
                    </div>
                    <div class="partners__title">Морское собрание Санкт-Петербурга</div>
                </div>
                <div class="partners__item">
                    <div class="partners__logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/par3.773ab138.png" alt=""/>
                    </div>
                    <div class="partners__title">
                        Черноморский флот Российской Федерации
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/par4.457d01bf.png" alt=""/>
                    </div>
                    <div class="partners__title">
                        Центральный военно-морской музей имени императора Петра Великого
                    </div>
                </div>
            </div>
        </div>
    </section>


<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>