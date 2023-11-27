<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Фотогалерея");
?>


    <section class="article">
        <div class="container">
            <div class="bread">
                <a href="#">просветительские проекты</a>
                <a href="#" class="active">Видео по истории флота</a>
            </div>

            <h1 class="h1">Видео по истории флота</h1>

            <div class="videos__grid">
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/vv1.66617309.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Фрагменты из документального фильма Крейсер Варяг , 2004 года
                            (кадры спуска вельбота). Фильм снят к 100-летию подвига крейсера
                        </h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/vv2.b4d45f5f.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Военно-морская шлюпка и ее роль на флоте
                        </h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/v3.493d4d8b.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">Россия и Англия на суше и море</h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/v4.ee0d540a.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">Зарождение русского флота</h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/v5.28ee70d1.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Морской быт, корабельный устав и русский дух
                        </h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/v6.f0ed2f25.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Развитие парусно-гребных судов ВМФ России
                        </h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/v7.61c6b1f5.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">Про шлюпки, парус и морские традиции</h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/v8.e2891096.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Трафальгар Балтики: Забытые победы русско-шведской войны
                        </h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
                <a href="#" class="news__item">
                    <div class="news__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/v9.def5e703.jpg" alt=""/>
                    </div>
                    <div class="news__content">
                        <h3 class="news__title">
                            Развитие парусно-гребных судов ВМФ России
                        </h3>
                        <div class="news__look">
                            посмотреть <img src="<?= SITE_TEMPLATE_PATH ?>/img/goto.67391245.svg" alt=""/>
                        </div>
                    </div>
                </a>
            </div>

            <div class="pagging">
                <button class="pagging__item pagging__item--current">1</button>
                <button class="pagging__item">2</button>
                <button class="pagging__item">3</button>
                <button class="pagging__item">4</button>
                <button class="pagging__item">5</button>
                <div class="btn btn--accent">загрузить еще</div>
            </div>
        </div>
    </section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>