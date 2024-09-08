<section class="section blog">
  <div class="container">
    <div class="separator"></div>
    <h2 class="section-title"><?= $section_title; ?></h2>
    <!-- Slider main container -->
    <div class="swiper blog-swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
          <div class="swiper-slide">
          <?php include('template-parts/swiper-card1-block.php');?>
          </div>
          <div class="swiper-slide">
          <?php include('template-parts/swiper-card2-block.php');?>
          </div>
          <div class="swiper-slide">
          <?php include('template-parts/swiper-card1-block.php');?>
          </div>
      </div>
      <div class="blog-slider-footer">
        <a href="./blog.php" class="button-link <?= $button_link; ?>">Весь блог</a>
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