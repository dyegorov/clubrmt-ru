<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>


    <section class="topslider">
        <div class="slider">
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider1.png" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Исследовательская и издательская деятельность
                            </div>
                            <p>
                                Ассоциация активно занимается исследованиями в области истории и культуры флота. Один из
                                наших ключевых проектов — работа над первым в России многотомным энциклопедическим
                                сборником по истории униформы ВМФ.
                            </p>
                        </div>

                        <a href="/about/publishing" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider2.png" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Партнёрство и выставочная деятельность
                            </div>
                            <p>
                                Мы сотрудничаем с Центральным военно-морским музеем имени императора Петра Великого,
                                Санкт-Петербургским Морским собранием, Министерством обороны РФ и Черноморским флотом
                                России.
                            </p>
                        </div>

                        <a href="/about/partnership" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider3.png" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Восстановление и реконструкция судов
                            </div>
                            <p>
                                Ассоциация ведет работу по восстановлению парусно-гребных шлюпок и катеров
                                Военно-Морского флота СССР, а также строит катера Российской Империи по историческим
                                чертежам.
                            </p>
                        </div>

                        <a href="/about/reconstruction" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider4.png" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Партнёрство и выставочная деятельность
                            </div>
                            <p>
                                Мы сотрудничаем с Центральным военно-морским музеем имени императора Петра Великого,
                                Санкт-Петербургским Морским собранием, Министерством обороны РФ и Черноморским флотом
                                России.
                            </p>
                        </div>

                        <a href="/about/partnership" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider5.png" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Парусно-гребные регаты
                            </div>
                            <p>
                                В проведении регат в честь Дня России и Дня ВМФ задействуется весь флот Ассоциации.
                                Участие в регатах принимают и ветераны ВМФ, и молодежь: курсанты военно-морских училищ,
                                команды яхт-клубов и парусных школ.
                            </p>
                        </div>

                        <a href="/about/regatta" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider6.png" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Военно-патриотическое воспитание молодежи
                            </div>
                            <p>
                                Ассоциация шефствует над классами военно-морских кадетов в школах Москвы и
                                Санкт-Петербурга, юнармейцами города Истры, организует для ребят морскую практику,
                                встречи с писателями-маринистами и ветеранами ВМФ.
                            </p>
                        </div>

                        <a href="/about/fostering" class="btn">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="slide__item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider7.png" alt="" class="bg"/>
                <div class="slide__info">
                    <div class="slide__block">
                        <div class="slide__text">
                            <div class="slide__title">
                                Музейная экспозиция по истории подводных сил ВМФ
                            </div>
                            <p>
                                Экспозиция на берегу Истринского водохранилища в Московской области включает уникальные
                                проекты советского военного кораблестроения и образцы вооружений и боевых средств ВМФ. 
                            </p>
                        </div>

                        <a href="/about/expo-history" class="btn">подробнее</a>
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
                <a href="http://b51168.jhtest.ru/news/?ELEMENT_ID=7" class="news__item">
                    <div class="news__img">
                        <img src="http://b51168.jhtest.ru/upload/iblock/6e4/duw43kw5xrkgtfhgy147v687tb2d0efa.jpg"
                             alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Ассоциация продолжает знакомить школьников с историей флота и нашей страны
                        </h3>
                        <div class="news__date">06.12.2023</div>
                    </div>
                </a>
                <a href="http://b51168.jhtest.ru/news/?ELEMENT_ID=11" class="news__item">
                    <div class="news__img">
                        <img src="http://b51168.jhtest.ru/upload/medialibrary/633/44svp45k3vrhv0ucr7g1mzfcefb9c9q8.jpeg"
                             alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Макет второго корпуса легендарной подлодки «Пиранья» в скором времени пополнит экспозицию
                            Ассоциации
                        </h3>
                        <div class="news__date">05.12.2023</div>
                    </div>
                </a>
                <a href="http://b51168.jhtest.ru/news/?ELEMENT_ID=10" class="news__item">
                    <div class="news__img">
                        <img src="http://b51168.jhtest.ru/upload/iblock/a22/5ggx3vq1kb03iikiwzmvv5uw4hclnjth.jpg"
                             alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Издана очередная книга энциклопедического сборника Ассоциации об эволюции формы одежды ВМФ
                            России
                        </h3>
                        <div class="news__date">03.12.2023</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="excursions">
        <div class="container">
            <div class="headrow">
                <h2 class="h2">экскурсии</h2>
                <a href="/excursion" class="btn btn--accent">все экскурсии</a>
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
                <a href="/anounce" class="btn btn--accent">все анонсы</a>
            </div>

            <div class="anounces__item">
                <div class="anounces__info">
                    <div class="anounces__title">
                        Приглашаем на праздник в честь Дня Военно-морского флота
                    </div>
                    <div class="anounces__date">27 июля 2023</div>
                    <p class="anounces__text">
                        Приглашаем провести выходные на Истринском водохранилище,
                        ознакомиться с экспозицией Ассоциации, посвященной истории ВМФ.
                        этот ден пройдут традиционные соревнования на воде — парусная
                        регата. участники соревнований: члены ассоцаиаии, студенты
                        военно-морских училищ.<br/>
                        После награждения победителей состоит праздничный концерт.
                    </p>
                    <a href="/anounce" class="btn">подробнее</a>
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

            <div class="headrow excursions__bottomrow">
                <h3 class="h2">
                    В разделе <span class="underlined">Виртуальный музей</span> вы
                    можете познакомиться со всеми виртуальными экспозиции истории ВМФ
                </h3>
                <a href="https://clubrmt.tilda.ws/" class="btn">все виртуальные экскурсии</a>
            </div>
            <div id="vm-excursions" class="map"/>
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
                <a href="/about/expo-history" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p1.73376d1a.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Развитие музейной экспозиции, посвященной истории подводных сил
                        ВМФ
                    </div>
                </a>
                <a href="/about/fostering" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p2.bd56442b.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Военно-патриотическое воспитание молодежи
                    </div>
                </a>
                <a href="/about/heritage" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p3.a8dbda5a.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Сохранение исторического наследия флота
                    </div>
                </a>
                <a href="/about/regatta" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p4.74dd90a5.jpg" alt=""/>
                    </div>
                    <div class="projects__info">Парусно-гребные регаты</div>
                </a>
                <a href="/about/sloep" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p5.0e426b6d.jpg" alt=""/>
                    </div>
                    <div class="projects__info">Шлюпочные походы</div>
                </a>
                <a href="/about/reconstruction" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p6.cc1cd978.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Восстановление и реконструкция судов
                    </div>
                </a>
                <a href="/about/partnership" class="projects__unit">
                    <div class="projects__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/p4.74dd90a5.jpg" alt=""/>
                    </div>
                    <div class="projects__info">
                        Партнёрство и выставочная деятельность
                    </div>
                </a>
                <a href="/about/publishing" class="projects__unit">
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
                <a href="/vuz-list/?ELEMENT_ID=21" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s3.b6fc5967.png" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Военно-морской политехнический институт — высшее военно-морское инженерное училище ВУНЦ ВМФ
                            «Военно-морская академия»
                        </h3>
                        <div class="news__city">Cанкт-Петербург</div>
                    </div>
                </a>
                <a href="/vuz-list/?ELEMENT_ID=20" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s3.b6fc5967.png" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">Военно-морской политехнический институт — высшее военно-морское
                            инженерное училище ВУНЦ ВМФ «Военно-морская академия»</h3>
                        <div class="news__city">Cанкт-Петербург</div>
                    </div>
                </a>
                <a href="/vuz-list/?ELEMENT_ID=19" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s3.b6fc5967.png" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Военно-морской политехнический институт — высшее военно-морское инженерное училище ВУНЦ ВМФ
                            «Военно-морская академия»
                        </h3>
                        <div class="news__city">Cанкт-Петербург</div>
                    </div>
                </a>
                <a href="/vuz-list/?ELEMENT_ID=18" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/s3.b6fc5967.png" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Военно-морской политехнический институт — высшее военно-морское инженерное училище ВУНЦ ВМФ
                            «Военно-морская академия»
                        </h3>
                        <div class="news__city">Cанкт-Петербург</div>
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