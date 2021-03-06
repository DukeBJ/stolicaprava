<?php
defined('_JEXEC') or die;?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>

  <jdoc:include type="head" />

  <meta charset="<?php echo $this->_charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/app.css?234tf3" />

  <!-- Put this script tag to the <head> of your page | не понятно работает ли это еще
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?82"></script>
  <script type="text/javascript">  VK.init({apiId: 3475637, onlyWidgets: true});</script>
  -->
  <!-- END VK SCRIPT -->
  <meta name="google-site-verification" content="GnaXzxsaDdifwCGb6XfrlDDQ2iu4U_KnhxLEUAXdhVk" />
  <meta name='yandex-verification' content='7a88dd530a8265cb' />

  <!--Скрипт поделиться <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script> -->

</head>

<body>

    <div class="wrapper">

    <header class="sp-header">
      <div class="uk-container">
        <div class="uk-flex uk-flex-middle uk-visible@m sp-header-desktop">
          <div class="uk-width-auto sp-top-logo">
            <a href="/"><img src="/img/logo.svg" alt=""></a>
          </div>
          <div class="uk-width-expand sp-top-nav">
            <nav class="uk-navbar-container" uk-navbar>
              <div class="uk-navbar-right nav-overlay">
                <ul class="uk-navbar-nav">
                  <li><a href="/service/service.html">Услуги</a></li>
                  <li><a href="/dokumenty/">Документы</a></li>
                  <li><a href="/articles/">Статьи</a></li>
                  <li><a href="/contact/">Контакты</a></li>
                </ul>
              </div>

              <!-- это для будущего поиска -->
              <!--<div class="nav-overlay">

                <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        
              </div>

              <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

                <div class="uk-navbar-item uk-width-expand">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input class="uk-search-input" type="search" placeholder="Найти…" autofocus>
                    </form>
                </div>
        
                <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        
              </div> -->

            </nav>
          </div>
          <div class="uk-width-auto sp-top-contact">
            <nobr><a href="tel:+74955107016">8 (495) 510‑70‑16</a></nobr>
            <div class="uk-text-small sp-top-time">c 10:00 до 19:00</div>
          </div>
        </div>

        <div class="uk-flex uk-flex-middle uk-hidden@m sp-header-mobile">
          <div class="uk-width-auto sp-top-logo">
            <a href="/"><img src="/img/logo_small.svg" alt=""></a>
          </div>
          <div class="uk-width-expand sp-top-contact">
            <nobr><a href="#callbackwidget">8 (495) 510‑70‑16</a></nobr>
            <div class="uk-text-small">Юридическая консультация</div>
          </div>
          <div class="uk-width-auto sp-top-nav">
            <div id="menu-open" uk-icon="menu"></div>
          </div>
        </div>
      </div>
    </header>

    <div id="offcanvas-overlay" uk-offcanvas="overlay: true">
      <div class="uk-offcanvas-bar">

          <div class="uk-flex uk-margin uk-flex-between">
            <div class="uk-width-auto sp-top-logo">
              <a href="/"><img src="/img/logo.svg" alt=""></a>
            </div>
            <div class="uk-width-auto">
              <button class="uk-offcanvas-close" type="button" uk-close></button>
            </div>
          </div>


          <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li><a href="/service/">Услуги</a></li>
            <li><a href="/dokumenty/">Документы</a></li>
            <li><a href="/articles/">Статьи</a></li>
            <li><a href="/contact/">Контакты</a></li>
          </ul>

          <div class="uk-flex uk-margin uk-flex-column uk-text-center">
            <div class="sp-connect">
              <nobr><a href="tel:+74955107016">8 (495) 510‑70‑16</a></nobr>
            </div>
            <div class="sp-connect">
              <div class="uk-text-small">WhatsApp</div>
              <div><nobr><a href="https://wa.me/79255195133">8 (925) 519‑51‑33</a></nobr></div>
            </div>
          </div>

          <div class="uk-flex uk-margin uk-flex-column uk-text-center">
            <div>Сегодня работаем</div>
            <div class="sp-top-time">c 10:00 до 19:00</div>
          </div>
          <div class="uk-flex uk-margin uk-text-center">
            <a href="#callbackwidget" class="uk-button">Бесплатная консультация</a>
          </div>

      </div>
    </div>

    <main>

    <?php if($_SERVER['REQUEST_URI'] != '/') : ?>

      <div class="uk-container">

        <div class="sp-breadcrumbs">

              <!-- возможно, это крошки -->
          <jdoc:include type="modules" name="position-2" />
              
        </div>

        <!-- Основной контент -->
        <jdoc:include type="component" />

      </div>

    <?php else : ?>

      <!--TODO: сделать может чуть-чуть анимации -->
      <section class="sp-banner">
        <div class="uk-container">
          <div class="uk-grid uk-text-center uk-text-left@m uk-text-left@m uk-flex uk-flex-middle uk-child-width-1-2@m uk-child-width-1@s" uk-grid>
            <div class="uk-width-1 sp-breadcrumbs">

              <!-- возможно, это крошки -->
              <jdoc:include type="modules" name="position-2" />
              
            </div>
            <div class="sp-left uk-flex-first@m">
              <h1 class="sp-banner--header">
                Профессиональная юридическая помощь
              </h1>
              <div class="sp-banner--description">Юридический центр &laquo;Столица&raquo;&nbsp;&mdash; защищаем ваши интересы уже 10&nbsp;лет</div>
              <a href="#callbackwidget" class="uk-button">Бесплатная консультация</a>
            </div>
            <div class="sp-right uk-flex-first">
              <img src="/img/law.png" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="uk-section sp-services">
        <div class="uk-container">
          <div class="uk-grid uk-child-width-1-2@m uk-child-width-1@s" uk-grid="masonry: true">
            <div>
              <div class="uk-card sp-services-title">
                <h2>Наши услуги</h2>
                <p>Наши юристы имеют практический опыт более 10&nbsp;лет и&nbsp;всегда готовы проконсультировать вас по&nbsp;любому вопросу.</p>
              </div>
            </div>
            <div>
              <a href="/service/zhil-serv.html" class="uk-card uk-margin-medium-top uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#home"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Жилищные вопросы</h3>
                    <hr>
                    <p class="description">Не&nbsp;бойтесь остаться без своего угла. Наш юрист по&nbsp;жилищным вопросам защитит ваше право на&nbsp;недвижимость</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/sem.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#heart"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Семейные споры</h3>
                    <hr>
                    <p class="description">Брачные проблемы&nbsp;&mdash; не&nbsp;проблемы, когда наш юрист по&nbsp;семейным вопросам берется за&nbsp;дело</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/zpp.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#trust"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Защита прав потребителей</h3>
                    <hr>
                    <p class="description">Обманули в&nbsp;магазине&nbsp;&mdash; не&nbsp;беда. наш юрист по&nbsp;защите прав потребителя поможет взыскать компенсацию</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/yurist-po-nasledstvennym-sporam.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#contract"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Наследство</h3>
                    <hr>
                    <p class="description">Жаркие споры за&nbsp;наследство? Наш юрист по&nbsp;наследственным делам добавит холодных доказательст подтверждающих ваши права</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/trud.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#family"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Трудовые</h3>
                    <hr>
                    <p class="description">Уволили без компенсации? Наш юрист по&nbsp;трудовым спорам поможет восстановиться на&nbsp;работе или получить компенсацию</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/yurist-po-zemelnym-voprosam.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#wheight"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Земельные вопросы</h3>
                    <hr>
                    <p class="description">Лишили последнего клочка земли&nbsp;&mdash; наш юрист по&nbsp;земельным вопросам разберется и&nbsp;поможет вернуть ваши сотки</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/autourist.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#car"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Автоюрист</h3>
                    <hr>
                    <p class="description">Произошла авария не&nbsp;по&nbsp;вашей вине&nbsp;&mdash; мы&nbsp;докажем вашу невиновность в&nbsp;суде</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/pen.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#oldman"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Пенсионное право</h3>
                    <hr>
                    <p class="description">Когда возникает проблема с&nbsp;получением пенсии, наш юрист по&nbsp;пенсионному праву поможет получить ваше по&nbsp;праву</p>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="/service/audit.html" class="uk-card uk-card-default sp-services-card">
                <div class="uk-card-body">
                  <div class="sp-services-icon">
                    <svg class="icon">
                      <use xlink:href="./img/icon-group.svg#document"></use>
                    </svg>
                  </div>
                  <div>
                    <h3 class="card-header">Бухгалтерское обслуживание</h3>
                    <hr>
                    <p class="description">Наши юристы помогут вашей организации с&nbsp;аудитом бухгалтерских документов</p>
                  </div>
                </div>
              </a>
            </div>
            
          </div>
        </div>
      </section>

      <section class="uk-section sp-work-process uk-background-muted">
        <div class="uk-container">
          <h2 class="uk-text-center uk-margin-large">Как мы работаем</h2>
          
          <div class="uk-grid uk-margin-medium-bottom uk-grid-small uk-child-width-1-4@m uk-child-width-1@s" uk-grid>
            
            <div class="uk-card uk-card-small uk-text-center">
              <div class="uk-card-media-top">
                <div class="sp-work-process-icon">
                  <svg class="icon">
                    <use xlink:href="/img/icon-group.svg#chat"></use>
                  </svg>
                </div>
              </div>
              <div class="uk-card-body">
                <h3 class="card-header">Консультация</h3>
                <div class="description">
                  По&nbsp;телефону или на&nbsp;приеме в&nbsp;офисе. Выслушаем вашу проблему и&nbsp;предложим варианты решений.
                </div>
              </div>
            </div>
            <div class="uk-card uk-card-small uk-text-center">
              <div class="uk-card-media-top">
                <div class="sp-work-process-icon">
                  <svg class="icon">
                    <use xlink:href="/img/icon-group.svg#docsearch"></use>
                  </svg>
                </div>
              </div>
              <div class="uk-card-body">
                <h3 class="card-header">Аналитика</h3>
                <div class="description">
                  Оценим возможные риски, прорабатываем варианты решения поставленных задач и&nbsp;возможный результат.
                </div>
              </div>
            </div>
            <div class="uk-card uk-card-small uk-text-center">
              <div class="sp-work-process-icon">
                <svg class="icon">
                  <use xlink:href="/img/icon-group.svg#docok"></use>
                </svg>
              </div>
              <div class="uk-card-body">
                <h3 class="card-header">Соглашение</h3>
                <div class="description">
                  Расчитываем стоимость наших услуг и&nbsp;заключаем соглашение о&nbsp;сотрудничестве
                </div>
              </div>
            </div>
            <div class="uk-card uk-card-small uk-text-center">
              <div class="sp-work-process-icon">
                <svg class="icon">
                  <use xlink:href="/img/icon-group.svg#docsud"></use>
                </svg>
              </div>
              <div class="uk-card-body">
                <h3 class="card-header">Решение</h3>
                <div class="description">
                  Решаем вашу проблему. Оформляем все необходимые документы и&nbsp;представляем ваши интересы в&nbsp;суде.
                </div>
              </div>
            </div>
          </div>

          <div class="uk-flex uk-flex-center">
            <div>
              <a href="#callbackwidget" class="uk-button">Бесплатная консультация</a>
            </div>
          </div>

        </div>
      </section>

      <section class="uk-section sp-benefits">
        <div class="uk-container">
          <h2 class="uk-text-center uk-margin-large">Основные преимущества</h2>
          
          <div class="uk-grid uk-grid-match uk-margin-medium-bottom uk-child-width-1@s uk-child-width-1-2@m" uk-grid>
            <div class="sp-benefits-first">
              <div class="uk-card uk-background-muted">
                <div class="uk-card-body">
                  <img src="/img/dots.svg" alt="">
                  <h3 class="card-header">Порядочность</h3>
                  <div class="description">
                    Мы&nbsp;никогда не&nbsp;беремся за&nbsp;заведомо проигрышные дела, т.к. дорожим своей репутацией. Большинство наших клиентов&nbsp;&mdash; это люди, которым нас порекомендовали наши клиенты.
                  </div>
                </div>
              </div>
            </div>
            <div class="sp-benefits-second">
              <div class="uk-card uk-background-muted">
                <div class="uk-card-body">
                  <img src="/img/dots.svg" alt="">
                  <h3 class="card-header">Высокая квалификация</h3>
                  <div class="description">
                    Специалисты имеют высокую квалификацию и&nbsp;большой практический опыт его применения. В&nbsp;ЮрЦентре работают юристы, имеющие стаж работы свыше 10&nbsp;лет.
                  </div>
                </div>
              </div>
            </div>
            <div class="sp-benefits-third">
              <div class="uk-card uk-background-muted">
                <div class="uk-card-body">
                  <img src="/img/dots.svg" alt="">
                  <h3 class="card-header">Расположение</h3>
                  <div class="description">
                    Наш юридический центр расположен рядом со&nbsp;станцией метро Щёлковская в&nbsp;3&nbsp;минутах ходьбы, где вы&nbsp;в&nbsp;спокойной обстановке сможете получить исчерпывающий ответ юриста на&nbsp;ваш вопрос.
                  </div>
                </div>
              </div>
            </div>
            <div class="sp-benefits-fourth">
              <div class="uk-card uk-background-muted">
                <div class="uk-card-body">
                  <img src="/img/dots.svg" alt="">
                  <h3 class="card-header">Ценовая политика</h3>
                  <div class="description">
                    У&nbsp;нас конкурнтные цены. Мы&nbsp;всегда детально расписываем за&nbsp;что платит клиент и&nbsp;стараемся заставить платить вашего апанента в&nbsp;суде за&nbsp;услуги адвоката.
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>

      <!-- <section class="uk-section uk-background-muted sp-slider-article">
        <div class="uk-container">
          <h2 class="uk-text-center uk-margin-large">Полезные статьи</h2>
          
          <div class="uk-flex uk-flex-center">

            <div class="uk-width-5-6 uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="center: true">
              <div class="uk-slider-container">
              <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="uk-card uk-card-small">
                      <div class="uk-card-media-top">
                        <img src="/img/test.png" alt="">
                      </div>
                      <div class="uk-card-body">
                        <div class="sp-slider-article--header">Заголовок</div>
                        <p>Описание</p>
                      </div>
                    </div>
                  </li>
              </ul>
            </div>
      
              <a class="uk-position-center-left-out uk-slidenav-large" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
              <a class="uk-position-center-right-out uk-slidenav-large" href="#" uk-slidenav-next uk-slider-item="next"></a>
        
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
  
            </div>

          </div>

          

        </div>
      </section> -->

      <section class="uk-section sp-contacts">
        <div class="uk-container">
          
          <div class="uk-card uk-card-default sp-map">

            <div class="sp-contacts-card">
              <div class="sp-contacts-card-title">Номер телефона</div>
              <div class="sp-contacts-card-text"><a href="tel:+74955107016">8 (495)510‑70‑16</a></div>
              <hr>
              <div class="sp-contacts-card-title">WhatsApp</div>
              <div class="sp-contacts-card-text"><a href="https://wa.me/79255195133">8 (925) 519‑51‑33</a></div>
              <hr>
              <div class="sp-contacts-card-title">Адрес</div>
              <div class="sp-contacts-card-text">1047207, Москва, Щелковское шоссе, д. 77, стр. 1, офис 111</div>
              <hr>
              <div class="sp-contacts-card-title">Время работы</div>
              <div class="sp-contacts-card-text">пн-пт 10:00 - 19:00<br>
                сб 11:00 - 15:00</div>
            </div>

            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A97a263a0d938baddb82137a7b15fa3373a1a5afc1a2f123f9b1388f6cb051bf0&amp;width=100%25&amp;height=580&amp;lang=ru_RU&amp;scroll=true"></script>
          
          </div>
            
        </div>
      </section>

      <?php endif; ?>

    </main>

    <footer class="uk-section sp-footer">
      <div class="uk-container">

        <div class="uk-grid uk-child-width-1-4@l uk-text-left@m uk-text-center uk-child-width-1-2@m uk-child-width-1@s">
          <div class="uk-margin">
            <div class="footer-header"><a href="/aboutus/aboutus.html">О компании</a></div>
            <div class="footer-link"><a href="/service/">Услуги</a></div>
            <div class="footer-link"><a href="/dokumenty/">Документы</a></div>
            <div class="footer-link"><a href="/articles/">Статьи</a></div>
          </div>

          <div class="uk-margin">
            <div class="footer-header">Информация</div>
            <!--<div class="footer-link"><a href="#">Политика конфиденциальности</a></div>
            <div class="footer-link"><a href="#">Правовая информация</a></div>-->
            <div class="footer-link"><a href="/sitemap.xml">Карта сайта</a></div>
            <!--<div class="footer-link"><a href="#">Найти</a></div>-->
          </div>

          <div class="uk-margin">
            <div class="footer-header"><a href="/contact/">Контакты</a></div>
            <div class="footer-link"><a href="mailto:info@stolicaprava.ru">info@stolicaprava.ru</a></div>
            <div class="footer-link"><a href="tel:+74955107016">8 (495) 510‑70‑16</a></div>
            <div class="footer-link">
              <div class="uk-text-small">WhatsApp</div>
              <a href="https://wa.me/79255195133">8 (925) 519‑51‑33</a>
            </div>
          </div>

          <div class="uk-margin">
            <div class="footer-header">Адрес</div>
            <div class="footer-link">
              Москва, Щелковское шоссе, д. 77, стр. 1, офис 111
            </div>
          </div>
        </div>

      </div>

    </footer>

  </div>

    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/app.js"></script>

    <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
    <script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=5176da8bdccbf02a65f11cb2ab0095a0" charset="UTF-8" async></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-32368634-1', 'auto');
      ga('send', 'pageview');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(17516107, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/17516107" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <jdoc:include type="modules" name="debug" />
  
  </body>
</html>