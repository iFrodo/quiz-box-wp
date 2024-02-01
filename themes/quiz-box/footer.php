<footer class="footer">
    <div class="container footer__container">
        <a href="<?echo(get_page_link(8))?>" class="logo footer__logo">Quiz-box
        </a>
        <nav class="nav-bar footer__nav-bar">
            <ul class="menu footer__menu">
                <li class="menu__item">
                    <a class="menu__link active" href="<? echo (get_page_link(10)) ?>">Главная</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="<? echo (get_page_link(14)) ?>">Игры</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="<? echo (get_page_link(12)) ?>">Отзывы</a>
                </li>
            </ul>
        </nav>
        <div class="socials footer__socials">
            <ul class="socials__list">
                <li class="socials__item">
                    <a class="socials__link socials__link--tg" href="">
                        <img class="socials__icon ">
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link socials__link--vk" href="">
                        <img class="socials__icon">
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link socials__link--fb" href="">
                        <img class="socials__icon">
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link socials__link--ig" href="">
                        <img class="socials__icon">
                    </a>
                </li>
            </ul>
        </div>

        <address class="contacts footer__contacts">
            <p class="contacts__info">Бесплатный звонок по России</p>
            <a href="tel:88007003030" class="contacts__phone">8 800 700 30 30</a>

        </address>
    </div>
</footer>

</div>
<!-- <script src="./script.js"></script> -->
<? wp_footer() ?>
</body>