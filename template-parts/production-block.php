<section class="section <?= $production_style; ?>">
      <div class="container">
        <?php 
        if(!empty($block_title)) {
          echo '<div class="separator"></div>';
          echo '<h2 class="section-title">'. $block_title .'</h2>';
        }
        ?>
        <div class="<?= $cards_style; ?>">
          <a href="../autohim.php" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/avto-him.webp">
              <source type="image/jpeg" srcset="img/avto-him.png">
              <img src="img/avto-him.png" alt="Автомобильная химия" class="card-image">
            </picture>
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/byt-him.webp">
              <source type="image/jpeg" srcset="img/byt-him.png">
              <img src="img/byt-him.png" alt="Бытовая химия" class="card-image">
            </picture>
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/septa.webp">
              <source type="image/jpeg" srcset="img/septa.png">
              <img src="img/septa.png" alt="Дезинфицирующие средства" class="card-image">
            </picture>
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/food-aero.webp">
              <source type="image/jpeg" srcset="img/food-aero.png">
              <img src="img/food-aero.png" alt="Пищевые аэрозоли" class="card-image">
            </picture>
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/cosmetic.webp">
              <source type="image/jpeg" srcset="img/cosmetic.png">
              <img src="img/cosmetic.png" alt="Косметическая продукция" class="card-image">
            </picture>
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/paints.webp">
              <source type="image/jpeg" srcset="img/paints.png">
              <img src="img/paints.png" alt="Краски аэрозольные" class="card-image">
            </picture>
          </a>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section production -->