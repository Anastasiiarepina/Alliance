<section class="section marks">
  <div class="container">
    <?php 
    if(!empty($block_title)) {
      echo '<div class="separator"></div>';
      echo '<h2 class="section-title">'. $block_title .'</h2>';
    }
    ?>
    
    <div class="<?= $mark_cards; ?>">
      <a href="../ag-autohim.php" class="mark-card">
        <svg class="mark-svg ag">
          <use href="img/sprite.svg#mark-ag"></use>
        </svg>
        <h3 class="mark-title">Автохимия AG-Tech</h3>
        <p class="mark-text">
          Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных
          обществом задач.
        </p>
      </a>
      <a href="#" class="mark-card">
        <svg class="mark-svg alli">
          <use href="img/sprite.svg#mark-alliance"></use>
        </svg>
        <h3 class="mark-title">Автохимия AP</h3>
        <p class="mark-text">
          Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных
          обществом задач.
        </p>
      </a>
    </div>
  </div>
</section>
