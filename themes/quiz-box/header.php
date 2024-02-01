<? wp_head(); ?>
<!DOCTYPE html>
<html lang="ru">


<header class="header">
                <div class="container header__container">
                    <a href="<?echo(get_page_link(8))?>" class="logo header__logo">Quiz-box
                    </a>
                    <nav class="nav-bar header__nav-bar">
                        <ul class="menu">
                            <li class="menu__item">
                                <a class="menu__link active" href="<?echo(get_page_link(10))?>">Главная</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="<?echo(get_page_link(14))?>">Игры</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="<?echo(get_page_link(12))?>">Отзывы</a>
                            </li>
                        </ul>
                    </nav>
                    <address class="contacts header__contacts games__contacts">
                        <a href="tel:88007003030" class="contacts__phone">8 800 700 30 30</a>
                        <p class="contacts__shedule">График работы
                        </p>
                        <ul class='submenu'>
                            <li class="submenu__work-time">пн-вс: 09:00 - 20:00</li>
                            <li class="submenu__lanch">Обед: 14:00-14:30</li>
                        </ul>
                    </address>
                </div>
            </header>
            <script>document.addEventListener('click',(e)=>{
                let menuLink = document.querySelectorAll('.menu__link')
                console.log(e.target,menuLink)

            })</script>