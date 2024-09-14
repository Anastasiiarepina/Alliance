<?php 
  $page_title='Автохимия AG-Tech';
  $second_image='second-header-grey';
  $is_autohim="second-avtohim-on";
  $header_crumb_add="Собственные торговые марки";
  $header_crumb_add_link="/trademarks.php";
  include_once('header-page.php');?>
<section class="section production-autohim">
    <div class="container">
      <div class="production-autohim-wrapper">
        <div class="production-autohim-content-wrapper">
          <div class="production-autohim-content">
            <img src="img/ag-autohim.png" alt="production-autohim" class="production-autohim-photo" />
            <div class="separator"></div>
            <h2 class="section-title">Собственное производство<br>автохимия AG-Tech</h2>
            <p class="production-autohim-text">
            Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
            <br><br>
            Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
            </p>
          </div>
        </div>
      </div>
      <?php $light_mode="swiper1-light";
    $lightmode_prev="img/sprite.svg#arrow-prev-1_black";
    $lightmode_next="img/sprite.svg#arrow-next-1_black";
    include_once("template-parts/swiper1.php")?>
    </div>
</section>
<section class="section general-autohim">
  <div class="container">
    <div class="general-autohim-content-wrapper">
      <div class="general-autohim-content">
        <div class="separator"></div>
        <h2 class="section-title">Изготовление автохимии</h2>
        <p class="general-autohim-text">
          Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
        </p>
        <ul class="general-autohim-list">
          <li class="general-autohim-list-item">
          <svg width="36" height="24">
            <use href="img/sprite.svg#make-autohim1"></use>
          </svg>  
          Полное описание товаров
          </li>
          <li class="general-autohim-list-item">
          <svg width="36" height="24">
            <use href="img/sprite.svg#make-autohim2"></use>
          </svg>
          Актуальные цены
          </li>
          <li class="general-autohim-list-item">
          <svg width="36" height="24">
            <use href="img/sprite.svg#make-autohim5"></use>
          </svg>
            Лаки и краски
          </li>
          <li class="general-autohim-list-item">
          <svg width="36" height="24">
            <use href="img/sprite.svg#make-autohim6"></use>
          </svg>
            Химические производства
          </li>
        </ul>
        <button class="general-download-button button">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#general-download"></use>
        </svg>
        <span class="button-text">Скачать каталог</span>
      </button>
      </div>
    </div>
  </div>
  <img src="img/general-autohim.png" alt="general-autohim" class="general-autohim-photo" />
</section>
<?php include_once('template-parts/swiper3.php');?>
<?php include_once('template-parts/swiper2.php');?>
<?php include_once('template-parts/clients-block.php');?>
<?php 
  $is_cta='cta';
  include_once('footer.php');?>