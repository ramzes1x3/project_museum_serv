<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Политехнический музей ИТА ЮФУ</title>
        <meta charset="UTF-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <meta name = "description" content = "Политехнический музей ИТА ЮФУ">
        <link rel="stylesheet" href="/public/styles/style.min.css">
        <link rel="shortcut icon" href="/public/images//logo_museum_history.png">
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Regular.woff2" crossorigin>
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Bold.woff2" crossorigin>
        <link
          rel="stylesheet"
          href="https://unpkg.com/swiper/swiper-bundle.min.css?_v=20220223160444"
        />
        <script src="https://api-maps.yandex.ru/2.1/?a5ea9f03-c642-48d8-97b4-cdc88ff35b55&lang=ru_RU&_v=20220223160444" type="text/javascript">
        </script>

        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
    </head>
    <body class="page__body">
        <div class="page-wrapper">
          <header class="page-header">
  <div class="page-header__container">
    <a href="https://sfedu.ru/" target="_blank" class="page-header__link-sfedu">
      <picture><source srcset="/public/images/logo_sfedu.webp" type="image/webp"><img class="page-header__logo-desktop-sfedu" src="/public/images/logo_sfedu.png" alt="Логотип ЮФУ" width="81px" height="75px"></picture>
      <picture><source srcset="/public/images/logo_sfedu.webp" type="image/webp"><img class="page-header__logo-mobile-sfedu" src="/public/images/logo_sfedu.png" alt="Логотип ЮФУ" width="62px" height="62px"></picture>
    </a>
    <div class="page-header__logo-museum">
      <a href="#" class="page-header__link-museum">
          <svg class="page-header__svg-desktop-museum" role='img' aria-label='Ссылка на главную страницу музея' focusable='false' class='icon-box' width="245px" height="69px" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#logo_museum'></use>
          </svg>
          <svg class="page-header__svg-mobile-museum" role='img' aria-label='Ссылка на главную страницу музея' focusable='false' class='icon-box' width="58px" height="58px" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#logo_museum_mobile'></use>
          </svg>
      </a>
    </div>
    <nav class="page-header__header-menu header-menu">
      <ul class="header-menu__list-menu">
        <li class="header-menu__item">
          <a href="/application/views/layouts/default.php" class="header-menu__link">Главная</a>
        </li>
        <li class="header-menu__item item--expostion-mobile">
          <a href="#" class="header-menu__link link--exposition">
            <span class="header-menu__exposition-link-text">Экспозиция</span>
            <span class="header-menu__arrow arrow">
              <svg class="header-menu__arrow-svg" width="13" height="12" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.327 1.00017L6.22014 6.35131L0.88831 1.17935" stroke="#7594B5" stroke-width="2"/>
              </svg>
            </span>
            <svg class="header-menu__exposition-svg" role='img' aria-label='' focusable='false' width='50px' height='50px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
              <use xlink:href='/public/sprite/icons.svg#icon_exposition_mobile'></use>
            </svg>
          </a>
        <ul class="header-menu__list-exposition list-exposition">
            <li class="list-exposition__item">
              <a href="#" class="list-exposition__link">
                <svg class="list-exposition__svg" role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_1'></use>
                </svg>
                <span class="list-exposition__link-text">Радиотехника и телевидение</span>
              </a></li>
            <li class="list-exposition__item">
              <a href="#" class="list-exposition__link">
                <svg class="list-exposition__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_2'></use>
                </svg>
                <span class="list-exposition__link-text">Автоматика <br>и вычислительная техника</span>
              </a></li>
            <li class="list-exposition__item">
              <a href="#" class="list-exposition__link">
                <svg class="list-exposition__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_3'></use>
                </svg>
                <span class="list-exposition__link-text">Авиация и космонавтика</span>
              </a></li>
            <li class="list-exposition__item">
              <a href="#" class="list-exposition__link">
                <svg class="list-exposition__svg "role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_4'></use>
                </svg>
                <span class="list-exposition__link-text">Электроника <br>и информационная безопасность</span>
              </a></li>
            <li class="list-exposition__item">
              <a href="/admin/login" class="list-exposition__link">
                <svg class="list-exposition__svg "role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_4'></use>
                </svg>
                <span class="list-exposition__link-text">Админка!</span>
              </a></li>
        </ul>
        </li>
        <li class="header-menu__item item--event-mobile">
          <a href="#" class="header-menu__link">
            <svg role='img' aria-label='' focusable='false' width='48px' height='48px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
              <use xlink:href='/public/sprite/icons.svg#icon_event_mobile'></use>
            </svg>
          </a>
        </li>
        <li class="header-menu__item">
          <a href="#museum-contacts-section" class="header-menu__link">
            <span class="header-menu__contacts">Контакты</span>
          </a>
        </li>
      </ul>
    </nav>
    <button type="button" class="page-header__sign-up">Хочу прийти!</button>

    <ul class="header-menu__list-exposition-mobile list-exposition-mobile">
      <li class="list-exposition-mobile__item">
        <a href="#" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_1'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Радиотехника и телевидение</span>
        </a></li>
      <li class="list-exposition-mobile__item">
        <a href="#" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_2'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Автоматика <br>и вычислительная техника</span>
        </a></li>
      <li class="list-exposition-mobile__item">
        <a href="#" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_3'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Авиация и космонавтика</span>
        </a></li>
      <li class="list-exposition-mobile__item">
        <a href="#" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg "role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_4'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Электроника <br>и информационная безопасность</span>
        </a></li>
    <li class="list-exposition-mobile__item">
        <a href="/admin/login" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg "role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_4'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Админка</span>
        </a></li>
    </ul>
  </div>
</header>
        <main class="back">
            <h1 class="title-expo">Авиация и космонавтика</h1>
            <div class="container">
                <div class="list-item">
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="nav-item item-in">
                            <div><picture><source srcset="img/expo_item.webp" type="image/webp"><img src="img/expo_item.png" alt="item1"></picture></div>
                            <h2>Экспонат 1</h2>
                            <p>Текст две строки. Текст две строки. Текст две строки. Текст две строки.</p>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer">
  <div class="page-footer__container">
    <ul class="page-footer__menu footer-menu">
      <li class="footer-menu__item">
        <a href="#news-section" class="footer-menu__link">НОВОСТИ</a>
      </li>
      <li class="footer-menu__item">
        <a href="#history-museum-section" class="footer-menu__link">О МУЗЕЕ</a>
      </li>
      <li class="footer-menu__item">
        <a href="#" class="footer-menu__link">ЛАБОРАТОРИЯ</a>
      </li>
      <li class="footer-menu__item">
        <a href="#" class="footer-menu__link">ЧАТ-БОТ</a>
      </li>
    </ul>
    <div class="page-footer__wrapper-icons">
        <a href="https://vk.com/id368810061" target="_blank" class="page-footer__vk-link">
          <svg class="page-footer__vk-icon" role='img'  focusable='false' width='58px' height='58px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#footer_icon_vk'></use>
          </svg>
        </a>
        <a href="https://sfedu.ru/" target="_blank" class="page-footer__sfedu-link">
          <picture><source srcset="/public/images/footer_sfedu@2x.webp" type="image/webp"><img src="/public/images/footer_sfedu@2x.png" alt="Логотип ЮФУ" class="page-footer__sfedu-icon" width="75px" height="70px"></picture>
        </a>
    </div>
    <span class="page-footer__line"></span>
    <div class="page-footer__address">
      Адрес: 347900, Россия, Ростовская обл., г. Таганрог,
      ул. Чехова, 22, корп. «Б», 2-й подъезд
    </div>
    <div class="page-footer__contacts">
      <p class="page-footer__number">8 (863) 437-14-61</p>
      <p class="page-footer__time">По будням с 9:00 до 17:00</p>
    </div>
    <div class="page-footer__copyright">
      © 2021 Политехнический музей ЮФУ. Все права защищены.
    </div>
  </div>
</footer>

        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js?_v=20220223160444"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js?_v=20220223160444"></script>
    <script src="/public/scripts/app.min.js?_v=20220223160444"></script>
</html>