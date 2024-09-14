<section class="<?= $is_cta; ?>">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-image" />
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="form cta-form">
            <h2 class="section-title cta-form-title">хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  type="text"
                  class="input"
                  id="user-name"
                  name="username"
                  placeholder=""
                  maxLength="100"
                  required
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input 
                type="tel" 
                class="input phone-mask" 
                id="user-phone"
                name="userphone"
                placeholder=""
                maxLength="100"
                required />
                <label class="input-group-label" for="user-phone"
                  >Номер телефона</label
                >
              </div>
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg width="14" height="14" class="notify-icon">
                  <use href="img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- /.cta -->
    <footer class="footer">
      <?php 
      $is_footer_logo='footer-logo';
      include('template-parts/contacts-block.php');?>
      <hr class="footer-separator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="./autohim.php" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="./ag-autohim.php" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="./about.php" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./contacts.php" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- /.footer-bottom -->
      </div>
      <hr class="footer-separator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="copyright">
              &copy; <?php echo date('Y');?> «Aliance Production». Все права защищены.
            </p>
            <a href="./confidential.php" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <div class="footer-author">
            <span class="madein">Сделано в</span
            ><span class="madein-small">Дизайн и разработка:</span>
            <svg width="52" height="11" class="madein-svg">
              <use href="img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
      </div>
    </footer>
    <!-- /.footer -->
    <div class="modal" id="feedback-modal">
      <div class="modal-dialog" id="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg width="24" height="24" class="close-svg">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="handler.php" method="POST" class="form modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                type="text"
                class="input modal-input"
                id="modal-user-name"
                name="username"
                placeholder=""
                maxLength="100"
                required
              />
              <label class="input-group-label" for="modal-user-name">Имя</label>
            </div>
            <div class="input-group modal-input-group">
              <input
                type="tel"
                class="input modal-input phone-mask"
                id="modal-user-phone"
                name="userphone"
                placeholder=""
                maxLength="30"
                required
              />
              <label class="input-group-label" for="modal-user-phone"
                >Номер телефона</label
              >
            </div>
          </div>
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg width="14" height="14" class="notify-icon">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="modal" id="alert-modal">
      <div class="modal-dialog" id="modal-dialog">
        <img src="img/alert.png" alt="alert" class="modal-image">
        <h2 class="modal-title">cпасибо за заявку!</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg width="24" height="24" class="close-svg">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <button class="modal-button button" data-toggle="modal" data-target="#alert-modal">Вернуться на главную</button>
      </div>
    </div>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
    <script src="js/main.js"></script>
  </body>
</html>
