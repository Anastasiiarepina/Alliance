<?php 
  $page_title='О компании';
  $second_image='second-header-grey';
  $is_autohim="second-avtohim-off";
  include_once('header-page.php');?>
<section class="section expert">
    <div class="container">
        <div class="expert-content-wrapper">
            <img src="img/expert.png" alt="expert" class="expert-photo" />
            <div class="expert-content">
                <div class="separator"></div>
                <h2 class="section-title">мы - эксперты в области<br />производства химии</h2>
                <p class="expert-text">
                Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
                </p>
            </div>
        </div>
        <?php $light_mode="swiper1-light";
    $lightmode_prev="img/sprite.svg#arrow-prev-1_black";
    $lightmode_next="img/sprite.svg#arrow-next-1_black";
    include_once("template-parts/swiper1.php")?>
    </div>
</section>
<section class="section our-production">
    <div class="container">
        <div class="our-production-wrapper">
            <img src="img/our-prod.png" alt="our-production" class="our-production-photo" />
            <div class="our-production-content-wrapper">
                <div class="our-production-content">
                <div class="separator"></div>
                <h2 class="section-title">Наше производство</h2>
                <p class="our-production-text">
                Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
                <br>
                Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
                </p>
            </div>
            <ul class="our-production-list">
          <li class="our-production-list-item">
            <svg width="30" height="30" class="our-production-list-icon">
              <use href="img/sprite.svg#our-prod1"></use>
            </svg>
            Автомобильная химия
          </li>
          <li class="our-production-list-item">
            <svg width="30" height="30" class="our-production-list-icon">
              <use href="img/sprite.svg#our-prod2"></use>
            </svg>
            Бытовая химия
          </li>
          <li class="our-production-list-item">
            <svg width="30" height="30" class="our-production-list-icon">
              <use href="img/sprite.svg#our-prod3"></use>
            </svg>
            Дезинфицирующие средства
          </li>
          <li class="our-production-list-item">
            <svg width="30" height="30" class="our-production-list-icon">
              <use href="img/sprite.svg#our-prod4"></use>
            </svg>
            Пищевые аэрозоли
          </li>
          <li class="our-production-list-item">
            <svg width="30" height="30" class="our-production-list-icon">
              <use href="img/sprite.svg#our-prod5"></use>
            </svg>
            Косметическая продукция
          </li>
          <li class="our-production-list-item">
            <svg width="30" height="30" class="our-production-list-icon">
              <use href="img/sprite.svg#our-prod6"></use>
            </svg>
            Краски аэрозольные
          </li>
        </ul>
            </div>
        </div>
        
    </div>
</section>
<?php include_once('template-parts/founder-block.php');?>
<?php include_once('template-parts/swiper3.php');?>
<?php include_once('template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
