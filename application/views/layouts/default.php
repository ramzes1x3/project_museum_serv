<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Политехнический музей ИТА ЮФУ</title>
        <meta charset="UTF-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <meta name = "description" content = "Политехнический музей ИТА ЮФУ">
        <link rel="stylesheet" href="/public/styles/style.min.css">
        <link rel="shortcut icon" href="/public/images/logo_museum_history.png">
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Regular.woff2" crossorigin>
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Bold.woff2" crossorigin>
        <link
          rel="stylesheet"
          href="https://unpkg.com/swiper/swiper-bundle.min.css?_v=20220508230505"
        />
        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="https://api-maps.yandex.ru/2.1/?a5ea9f03-c642-48d8-97b4-cdc88ff35b55&lang=ru_RU&_v=20220508230505" type="text/javascript">
        </script>
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
      <a href="/" class="page-header__link-museum">
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
          <a href="/" class="header-menu__link">Главная</a>
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
              <a href="/objects1" class="list-exposition__link">
                <svg class="list-exposition__svg" role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_1'></use>
                </svg>
                <span class="list-exposition__link-text">Радиотехника и телевидение</span>
              </a></li>
            <li class="list-exposition__item">
              <a href="/objects2" class="list-exposition__link">
                <svg class="list-exposition__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_2'></use>
                </svg>
                <span class="list-exposition__link-text">Автоматика <br>и вычислительная техника</span>
              </a></li>
            <li class="list-exposition__item">
              <a href="/objects3" class="list-exposition__link">
                <svg class="list-exposition__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_3'></use>
                </svg>
                <span class="list-exposition__link-text">Авиация и космонавтика</span>
              </a></li>
            <li class="list-exposition__item">
              <a href="/objects4" class="list-exposition__link">
                <svg class="list-exposition__svg "role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_4'></use>
                </svg>
                <span class="list-exposition__link-text">Электроника <br>и информационная безопасность</span>
              </a></li>
          </ul>
        </li>
        <li class="header-menu__item item--event-mobile">
          <span class="header-menu__link link--event-mobile">
            <svg role='img' aria-label='' focusable='false' width='48px' height='48px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
              <use xlink:href='/public/sprite/icons.svg#icon_event_mobile'></use>
            </svg>
          </span>
        </li>
        <li class="header-menu__item">
          <a href="/events" class="header-menu__link">
            <span class="header-menu__contacts">МЕРОПРИЯТИЯ</span>
          </a>
        </li>
      </ul>
    </nav>
    <button type="button" class="page-header__sign-up" onclick="document.location='/visit'">Хочу прийти!</button>

    <ul class="header-menu__list-exposition-mobile list-exposition-mobile">
      <li class="list-exposition-mobile__item">
        <a href="/objects1" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_1'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Радиотехника и телевидение</span>
        </a></li>
      <li class="list-exposition-mobile__item">
        <a href="/objects2" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_2'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Автоматика <br>и вычислительная техника</span>
        </a></li>
      <li class="list-exposition-mobile__item">
        <a href="/objects3" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_3'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Авиация и космонавтика</span>
        </a></li>
      <li class="list-exposition-mobile__item">
        <a href="/objects4" class="list-exposition-mobile__link">
          <svg class="list-exposition-mobile__svg "role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#icon_exposition_link_4'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Электроника <br>и информационная безопасность</span>
        </a></li>
    </ul>

    <ul class="header-menu__list-events-mobile list-events-mobile">
      <li class="list-events-mobile__item">
        <a href="/events" class="list-events-mobile__link">
          <svg class="list-events-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#mobile_calendar_header_icon'></use>
          </svg>
          <span class="list-exposition-mobile__link-text">Календарь мероприятий</span>
        </a></li>
      <li class="list-events-mobile__item">
        <a href="/visit" class="list-events-mobile__link">
          <svg class="list-events-mobile__svg"role='img' aria-label='' focusable='false' width='77px' height='77px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#mobile_event_form_icon'></use>
          </svg>
          <span class="list-events-mobile__link-text">Записаться на мероприятие <br>или экскурсию</span>
        </a></li>
    </ul>
  </div>
</header>
<?php echo $content; ?>
<footer class="page-footer">
  <div class="page-footer__container">
    <div class="page-footer__wrapper-menu-block">
      <ul class="page-footer__menu footer-menu">
        <li class="footer-menu__item">
          <a href="/posts" class="footer-menu__link">НОВОСТИ</a>
        </li>
        <li class="footer-menu__item">
          <a href="/museum" class="footer-menu__link">ИСТОРИЯ</a>
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
            <picture><source srcset="/public/images/footer_sfedu@2x.webp" type="image/webp"><img src="/public/images/footer_sfedu@2x.png" alt="Логотип ЮФУ" class="page-footer__sfedu-icon" width="60" height="56"></picture>
          </a>
      </div>
    </div>
    <span class="page-footer__line"></span>
    <div class="page-footer__wrapper-contact-block">
      <p class="page-footer__title">КОНТАКТНАЯ ИНФОРМАЦИЯ:</p>
      <p class="page-footer__address">Адрес: 347900, Россия, Ростовская обл.,<br> г. Таганрог, ул. Чехова, 22, корп. «Б», 2-й подъезд</p>
      <p class="page-footer__number">Телефон: +7 (863) 437-14-61</p>
      <p class="page-footer__email">Email: museum@tti.sfedu.ru</p>
      <p class="page-footer__visit">Посещение музея возможно только по предварительной записи.</p>
      <button type="button" class="page-footer__btn-form btn-form">
        <a href="/contact">ЗАДАТЬ ВОПРОС</a>
      </button>
      <div class="page-footer__wrapper-icons--mobile">
        <a href="https://vk.com/id368810061" target="_blank" class="page-footer__vk-link">
          <svg class="page-footer__vk-icon" role='img'  focusable='false' width='50px' height='50px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <use xlink:href='/public/sprite/icons.svg#footer_icon_vk'></use>
          </svg>
        </a>
        <a href="https://sfedu.ru/" target="_blank" class="page-footer__sfedu-link">
          <picture><source srcset="/public/images/footer_sfedu@2x.webp" type="image/webp"><img src="/public/images/footer_sfedu@2x.png" alt="Логотип ЮФУ" class="page-footer__sfedu-icon" width="53" height="50"></picture>
        </a>
    </div>
      <div class="page-footer__copyright">
        Сайт разработан командой PALMARIUS в составе студентов ИКТИБ ЮФУ 2022 г.
      </div>
    </div>
  </div>
</footer>

        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js?_v=20220508230505"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js?_v=20220508230505"></script>
    <script type="module" src="/public/scripts/app.js"></script>
</html>
