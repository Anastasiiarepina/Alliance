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

    <!-- /.section expert -->
    <?php include_once('footer.php');?>
