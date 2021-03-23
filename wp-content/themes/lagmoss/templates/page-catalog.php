<?
/*
Template Name: Catalog
*/
?>

<?php
    get_header();
?>

<!-- BREADCRUMBS  -->

<section class="breadcrumbs">
    <div class="container">
      <div class="breadcrumbs-inner">
        <ul class="breadcrumbs__list">
          <li class="breadcrumbs__list-item">
            <a href="javascript:void(0)">Главная</a>
            <span class="icon-dashicon"></span>
          </li>
          <li class="breadcrumbs__list-item">
            <a href="javascript:void(0)">Сиденья</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="catalog">
    <div class="container">
      <div class="catalog-inner">

        <div class="accordion-container">
          <div class="accordion__set">
            <a class="accordion__button" href="#">
              ВСЕ КАТЕГОРИИ
              <span class="icon-down_arrow"></span>
            </a>
            <div class="accordion__content">
              <ul class="accordion__catalog-list">
                <li><a class="accordion__catalog-link" href="#">Вешалки</a></li>
                <li><a class="accordion__catalog-link" href="#">Гардеробные</a></li>
                <li><a class="accordion__catalog-link" href="#">Кресла</a></li>
                <li><a class="accordion__catalog-link" href="#">Комоды</a></li>
                <li><a class="accordion__catalog-link" href="#">Консоли</a></li>
                <li><a class="accordion__catalog-link" href="#">Кресла</a></li>
                <li><a class="accordion__catalog-link" href="#">Обувницы</a></li>
                <li><a class="accordion__catalog-link" href="#">Полки</a></li>
                <li><a class="accordion__catalog-link" href="#">Стеллажи</a></li>
                <li><a class="accordion__catalog-link" href="#">Столы</a></li>
                <li><a class="accordion__catalog-link" href="#">Стулья</a></li>
                <li><a class="accordion__catalog-link" href="#">Тумбы</a></li>
                <li><a class="accordion__catalog-link" href="#">Тумбы под ТВ</a></li>
              </ul>
            </div>
          </div>
        </div>

        <aside class="catalog-nav">
          <ul class="catalog-list">
            <li><a class="catalog-link" href="#">Вешалки</a></li>
            <li><a class="catalog-link" href="#">Гардеробные</a></li>
            <li><a class="catalog-link" href="#">Кресла</a></li>
            <li><a class="catalog-link" href="#">Комоды</a></li>
            <li><a class="catalog-link" href="#">Консоли</a></li>
            <li><a class="catalog-link" href="#">Кресла</a></li>
            <li><a class="catalog-link" href="#">Обувницы</a></li>
            <li><a class="catalog-link" href="#">Полки</a></li>
            <li><a class="catalog-link" href="#">Стеллажи</a></li>
            <li><a class="catalog-link" href="#">Столы</a></li>
            <li><a class="catalog-link" href="#">Стулья</a></li>
            <li><a class="catalog-link" href="#">Тумбы</a></li>
            <li><a class="catalog-link" href="#">Тумбы под ТВ</a></li>
          </ul>
        </aside>

        <div class="catalog-items">

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/arlington/arlington01.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/arlington/arlington01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/arlington/arlington01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/arlington/arlington01@3x.webp 600w" 
              alt="arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">Arlington</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Обеденный стол</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  14 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/coffee/new-orlean/new-orlean.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/coffee/new-orlean/new-orlean01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/coffee/new-orlean/new-orlea01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/coffee/new-orlean/new-orlean01@3x.webp 600w"
              alt="arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">NEW ORLEAN</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Журнальный стол</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  30 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img 
              class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/write/new-york/new-york01.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/write/new-york/new-york01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/write/new-york/new-york01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/write/new-york/new-york01@3x.webp 600w" 
              alt="arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">NEW YORK</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Письменный стол</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  16 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img 
              class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/dallas/dallas01.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/dallas/dallas01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/dallas/dallas01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/dallas/dallas01@3x.webp 600w" 
              alt="arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">DALLAS</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Барный стул</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  13 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img 
              class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/cleveland/cleveland01.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/cleveland/cleveland01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/cleveland/cleveland01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/cleveland/cleveland01@3x.webp 600w" 
              alt="arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">CLEVELAND</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Стул</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  11 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-francisco/san-francisco01.webp"
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-francisco/san-francisco01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-francisco/san-francisco01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-francisco/san-francisco01@3x.webp 600w"
              alt="arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">SAN FRANCISCO</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Консоль</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  12 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img 
              class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/denver/denver01.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/denver/denver01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/denver/denver01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/denver/denver01@3x.webp 600w" 
              alt="arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">DENVER</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Кресло</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  9 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img 
              class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/wardrobe/san-jose/san-jose01.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/wardrobe/san-jose/san-jose01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/wardrobe/san-jose/san-jose01@2x.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/wardrobe/san-jose/san-jose01@3x.webp 600w" 
              alt=" arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">SAN-JOSE</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Гардероб</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  18 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog-item hvr-grow">
            <a class="catalog-item__link" href="#">
              <img 
              class="catalog-item__img" 
              src="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/bakersfield/bakersfield01.webp" 
              srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/bakersfield/bakersfield01.webp 200w, 
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/bakersfield/bakersfield01.webp 400w,
                      <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/bakersfield/bakersfield01.webp 600w" 
              alt=" arlington-table">
              <div class="catalog-item__description">
                <h2 class="catalog-item__name">BAKERSFIELD</h2>
                <div class="catalog-item__description-inner">
                  <h3 class="catalog-item__type">Стул</h3>
                  <p class="catalog-item__price"><span class="catalog-item__price-cursive">от</span>
                  18 000 ₽
                  </p>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

<?php
    get_footer();
?>