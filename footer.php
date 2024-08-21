<section class="cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-image" />
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">хотите сотрудничать?</h2>
            <p class="cta-form-text">
               заявку, наш менеджер свяжется с Вами в ближайшее время
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
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input 
                type="tel" 
                class="input" 
                id="user-phone"
                name="userphone"
                placeholder="" />
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
      <div class="container">
        <div class="footer-top">
          <a href="#" class="footer-logo">
            <svg class="logo-svg footer-logo">
              <use href="img/sprite.svg#logo"></use>
            </svg>
          </a>

          <a href="tel:+74996861014" class="footer-phone">+7 (999) 686-10-14</a>
          <div class="footer-info">
            <svg class="address-icon" width="12" height="16">
              <use href="img/sprite.svg#address"></use>
            </svg>
            <address class="footer-info-address">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="footer-info">
            <svg class="mail-icon" width="16" height="12">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-mail">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="20" height="12">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="16" height="16">
                <use href="img/sprite.svg#insta"></use>
              </svg>
            </a>
          </div>
        </div>
        <!-- /.footer-top -->
      </div>
      <hr class="footer-separator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
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
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
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
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
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
    <div class="modal">
      <div class="modal-dialog" id="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg width="24" height="24" class="close-svg">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                type="text"
                class="input modal-input"
                id="modal-user-name"
                name="username"
                placeholder=""
              />
              <label class="input-group-label" for="modal-user-name">Имя</label>
            </div>
            <div class="input-group modal-input-group">
              <input
                type="tel"
                class="input modal-input"
                id="modal-user-phone"
                name="userphone"
                placeholder=""
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

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
