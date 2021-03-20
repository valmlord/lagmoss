  <!-- FOOTER -->

  <footer class="footer">
    <div class="container">
      <div class="footer footer-inner">
        <nav>
          <ul class="footer__menu">
            <li>
              <a class="footer__link" href="javascript:void(0);">Акции</a>
            </li>
            <li>
              <a class="footer__link" href="javascript:void(0);">Вакансии</a>
            </li>
            <li>
              <a class="footer__link" href="javascript:void(0);">Статьи</a>
            </li>
            <li>
              <a class="footer__link" href="javascript:void(0);">Покупателям</a>
            </li>
            <li>
              <a class="footer__link" href="javascript:void(0);">Отзывы</a>
            </li>
            <li>
              <a class="footer__link" href="javascript:void(0);">Материалы</a>
            </li>
            <li>
              <a class="footer__link" href="javascript:void(0);">Вопрос - Ответ</a>
            </li>
          </ul>
        </nav>

        <div class="footer-categories">
          <div class="footer-categories__item">
            <h6 class="footer-categories__title">Столы</h6>
            <ul class="footer-categories__list">
              <li><a class="footer-categories__link" href="javascript:void(0">Обеденные</a></li>
              <li><a class="footer-categories__link" href="javascript:void(0">Письменные</a></li>
              <li><a class="footer-categories__link" href="javascript:void(0">Журнальные</a></li>
            </ul>
          </div>
          <div class="footer-categories__item">
            <h6 class="footer-categories__title">Хранение</h6>
            <ul class="footer-categories__list">
              <li><a class="footer-categories__link" href="javascript:void(0">Стеллажи</a></li>
              <li><a class="footer-categories__link" href="javascript:void(0">Тумбы</a></li>
              <li><a class="footer-categories__link" href="javascript:void(0">Комоды</a></li>
            </ul>
          </div>
          <div class="footer-categories__item">
            <h6 class="footer-categories__title">Сиденья</h6>
            <ul class="footer-categories__list">
              <li><a class="footer-categories__link" href="javascript:void(0">Стулья</a></li>
              <li><a class="footer-categories__link" href="javascript:void(0">Барные стулья</a></li>
              <li><a class="footer-categories__link" href="javascript:void(0">Кресла</a></li>
            </ul>
          </div>
        </div>

        <div class="footer__contacts">
          <div class="footer-phone">
            <span class="footer-phone__description">Бесплатный звонок по России</span>
            <a class="footer-phone__link" href="tel:<?php the_field('intercity_phone', 2); ?>"><?php the_field('intercity_phone', 2); ?></a>
            <span class="footer-phone__description"><?php the_field('work_hours', 2);?></span>
          </div>
          <div class="footer__social">
            <a class="footer__icon" href="<?php the_field('whatsapp_link', 2); ?>"><span class="icon-whatsapp"></span></a>
            <a class="footer__icon" href="<?php the_field('instagram_link', 2); ?>"><span class="icon-instagram"></span></a>
            <a class="footer__icon" href="<?php the_field('telegram_link', 2); ?>"><span class="icon-telegram"></span></a>
            <a class="footer__icon" href="<?php the_field('facebook_link', 2); ?>"><span class="icon-facebook"></span></a>
          </div>
          <div class="footer-mail">
            <span class="icon-mail"></span>
            <a class="footer-mail__link" href="mailto:<?php the_field('mail', 2); ?>"><?php the_field('mail', 2); ?></a>
          </div>
          <div class="footer__subscribe subscribe">
            <span class="subscribe__info">Подписывайтесь на наши акции:</span>
            <div class="subscribe__form">
              <input type="email" placeholder="Введите Ваш e-mail" required="">
              <button class="btn btn-subscribe">Подписаться на рассылку</button>
            </div>
            <span class="subscribe__info">Нажимая на кнопку, Вы даете согласие на обработку персональных данных</span>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <a class="footer-copyright__policy" href="javascript:void(0);">Политика конфидециальности</a>
        <span class="footer-copyright__description">Lagmoss &#x2122; 2021 All Rights Reserved ©</span>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <?php
    wp_footer();
  ?>
</body>

</html>