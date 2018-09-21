<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <title>{{$PageTitle}}</title>
  </head>
  <body>
    @section('main-header')
    <header class="main-header container">
      <section class="head-info">
        <div class="head-info__top-wrap">
          <div class="head-info__logo-wrap">
            <a class="head-info__logo-link" href="#">
              <img class="head-info__logo" src="../images/logo.jpg" alt="Asplomb-Logo">
                <img class="head-info__logo-sm--hidden" src="../images/logo-sm.jpg" alt="Asplomb-Logo">
            </a>
          </div>
          <section class="head-contact">
            <ul class="head-contact__list">
              <li class="head-contact__list-item">
                <p class="head-contact__text">Москва <br> 8 (495) 662-16-98</p>
              </li>
              <li class="head-contact__list-item">
                <p class="head-contact__text">Ростов-на-Дону <br> 8 (863) 233-54-29</p>
              </li>
              <li class="head-contact__list-item">
                <p class="head-contact__text">Санкт-Петербуг <br> 8 (812) 337-51-27</p>
              </li>
            </ul>
          </section>
          @if(($UserName))
          <section class="user-menu">
            <ul class="user-menu__list">
              <li class="user-menu__list-item">
                <a class="user-menu__avatar-link" href="#">
                  <img class="user-menu__avatar" src="../images/user.svg" alt="user-pic">
                </a>
              </li>
              <li class="user-menu__list-item">
                <span class="user-menu__greetings">Здравствуйте,</span>
                <a class="user-menu__name" href="#">{{$UserName}}</a>
                <a class="user-menu__exit" href="#">(Выход)</a>
              </li>
            </ul>
          </section>
          @else
          {{--section login-box--}}
          @endif
          </div>
          <div class="head-info__bottom-wrap">
            <b class="head-info__slogan">Ваш портал в мир пломб</b>
            <div class="head-info__office-list-wrap">
              <a class="head-info__office-list-link" href="#">Найти офис вашего региона</a>
            </div>
            <section class="user-inventory">
              <ul class="user-inventory-list">
                <a class="user-inventory__favorite-link" href="#">
                  <span class="user-inventory__favorite">Избранное({{$UserInventoryData['FavoriteCount']}})</span>
                </a>
                <a class="user-inventory__goods-link" href="index.html">
                  <span class="user-inventory__goods">Товары ({{$UserInventoryData['TradeCount']}})</span>
                </a>
              </ul>
            </section>
          </div>
        </section>
    </header>
    @show

    @section('main-menu')
        <section class="main-menu container">
          <a href="" class="main-header__menu-toggle"></a>
          <nav class="main-nav">
            <ul class="main-nav__list">
              @for($i = 0; $i < count($MainNavMenuItem); $i++)
                <li class="main-nav__list-item">
                  <a class="main-nav__link" href="#">{{ $MainNavMenuItem [$i] }}</a>
                </li>
                @endfor
            </ul>
          </nav>
          <form class="main-menu__search-form" action="#">
            <input class="main-menu__search-control" type="text" placeholder="Поиск по сайту" name="search-query">
          </form>
        </section>
        @show


        @section('main-content')
        <main class="main-content container"></main>
        @show

        @section('modal-feedback')
        <section class="modal-feedback">

            <div class="modal-feedback__form-wrap">
              <form class="modal-feedback__form" action="">
               <span class="cross"></span>
               <h2 class="modal-feedback__header">Обратный звонок</h2>
               <p class="modal-feedback__intro-text">Отправьте свое имя и телефон и наш сотрудник перезвонит вам в течении рабочего дня</p>
               <input class="modal-feedback__name-input" type="text" placeholder="Ваше имя" name="name">
               <input class="modal-feedback__tele-input" type="text" placeholder="Ваш телефон" name="phone-number">
               <div class="modal-feedback__user-agreement-wrap">
                 <div class="modal-feedback__checkbox-wrap">
                   <input class="modal-feedback__checkbox" type="checkbox" id="personal-data-check">
                   <input class="modal-feedback__checkbox" type="checkbox" id="site-politics-agree">
                 </div>
                 <div class="modal-feedback__label-wrap">
                   <label for="personal-data-check">Нажимая эту кнопку я даю согласие на обработку персональных данных</label>
                   <label for="site-politics-agree">и соглашаюсь с условиями и политикой обработки персональных данных</label>
                 </div>
               </div>
               <input class="modal-feedback__submit-btn btn" type="submit" value="Обратный звонок">
               </form>
            </div>
        </section>
        @show
  </body>
</html>
