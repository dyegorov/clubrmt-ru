<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__logo">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo-w.56ac2037.svg" alt="" class="v1"/>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo-w2.beb564be.svg" alt="" class="v2"/>
        </div>
        <div class="footer__nav">
            <div class="footer__socials">
                <a href="https://vk.com/clubrmtru" target="_blank" rel="noreferrer noopener">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/vk.svg" alt="" class=""/>
                </a>
                <a href="https://t.me/clubrmt" target="_blank" rel="noreferrer noopener">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/tg.svg" alt="" class=""/>
                </a>
            </div>
            <div class="footer__contacts">
                <div class="footer__title">Контакты</div>
                <div>
                    143513, Московская область, городской округ Истра, деревня
                    Рождествено, территория Строй Капитал, здание 9, помещение 57
                </div>
                <div>
                    <a href="tel:+79857840542">+7 985 784 -05-42</a>
                </div>
                <div><a href="mailto:info@clubmrt.ru">info@clubmrt.ru</a></div>
            </div>
        </div>
        <div class="footer__copy">&copy; 2023. Все права защищены</div>
    </div>
</footer>


<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"
></script>
<script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/sea_museum.e31bb0bc.js"></script>
<script src="https://museum.parsuna.ru/libs/vmuseum.js?v=5"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var vm = new VMuseum({
            container: 'vm-excursions',
            museumId: 1240,
            isFlexList: false,
            previewOptions: 'w=450,h=670,zc=1'

        });
    });
</script>
</body>
</html>