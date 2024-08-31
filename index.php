<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Alliance production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="button-icon" width="12" height="16">
          <use href="img/sprite.svg#address"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <div class="mobile-info">
        <svg class="button-icon" width="16" height="12">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-mail">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <div class="contacts-info">
        <svg class="button-vk" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg>
        <svg class="button-insta" width="24" height="24">
          <use href="img/sprite.svg#insta"></use>
        </svg>
      </div>
    </div>
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="16" height="16">
          <use href="img/sprite.svg#header-phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14
        </a>
      </div>
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="16" height="16">
          <use href="img/sprite.svg#header-phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="separator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами и расходными материалами бизнеса
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="button header-button" data-toggle="modal" data-target="#feedback-modal">
            Подробнее о компании
          </button>
        </div>
        <!-- /.header-content -->

        <?php $light_mode="swiper1-dark";
        $lightmode_prev="img/sprite.svg#arrow-prev-1";
        $lightmode_next="img/sprite.svg#arrow-next-1";
        include_once("template-parts/swiper1.php")?>
        
      </div>
      <!-- /.container -->
    </header>
    <section class="section section-light">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">схема работы</h2>

        <div class="swiper steps-swiper">
          <!-- Additional required wrapper -->

          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>

          <!-- Navigation buttons -->
          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev-2"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next-2"></use>
              </svg>
            </div>
          </div>
          <!-- /.second-slider-buttons -->
        </div>
      </div>
    </section>
    <section class="section production">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">контрактное производство</h2>
        <div class="cards">
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>

            <img
              src="img/avto-him.png"
              alt="Автомобильная химия"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>

            <img src="img/byt-him.png" alt="Бытовая химия" class="card-image" />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>

            <img
              src="img/septa.png"
              alt="Дезинфицирующие средства"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>

            <img
              src="img/food-aero.png"
              alt="Пищевые аэрозоли"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>

            <img
              src="img/cosmetic.png"
              alt="Косметическая продукция"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <img
              src="img/paints.png"
              alt="Краски аэрозольные"
              class="card-image"
            />
          </a>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section production -->
    
    <?php $block_title="Собственные торговые марки"; include_once('template-parts/trademarks-block.php');?>

    
    
    <?php include_once('template-parts/founder-block.php');?>
    <?php include_once('template-parts/clients-block.php');?>

    
    
    <section class="section blog">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">блог экспертов в области производства</h2>
        <!-- Slider main container -->
        <div class="swiper blog-swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog-image1.png"
                alt="Blog-image1"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog-image2.png"
                alt="Blog-image2"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>

            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog-image3.png"
                alt="Blog-image3"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>
          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="36" height="24">
                  <use href="img/sprite.svg#arrow-prev-2"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="36" height="24">
                  <use href="img/sprite.svg#arrow-next-2"></use>
                </svg>
              </div>
            </div>
          </div>
          <!-- /.blog-slider-footer -->
        </div>
      </div>
    </section>
    <!-- /.section blog -->
    
    <?php include_once('footer.php');?>