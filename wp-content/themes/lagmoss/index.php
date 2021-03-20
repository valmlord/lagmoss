<?php
  get_header();
?>

<!-- HEAD -->

<section class="head">
  <div class="container">
    <div class="main-slider">
    
      <div class="main-slider__item">
      <div class="main-slider__description">
        <h1 class="main-slider__title">
         Мебель в стиле лофт
        </h1>
        <h2 class="main-slider__subtitle">
          Купите
          <span class="main-slider__subtitle-cursive">ГОТОВУЮ</span>
          модель или
          <br />
          <span class="main-slider__subtitle-cursive">ИЗГОТОВЬТЕ</span>
          на заказ
        </h2>
        <a class="main-slider__link" href="catalog.html">Перейти в каталог</a>
      </div>
      </div>

      <div class="main-slider__item">
        <div class="main-slider__description">
          <h1 class="main-slider__title">
            Мебель в стиле
            <span class="main-slider__subtitle-cursive">LOFT</span>
          </h1>
          <h2 class="main-slider__subtitle">
            Купите
            <span class="main-slider__subtitle-cursive">ГОТОВУЮ</span>
            модель или
            <br />
            <span class="main-slider__subtitle-cursive">ИЗГОТОВЬТЕ</span>
            на заказ
          </h2>
          <a class="main-slider__link" href="catalog.html">Перейти в каталог</a>
        </div>
      </div>

      <div class="main-slider__item">
        <div class="main-slider__description">
          <h1 class="main-slider__title">
            Мебель в стиле
            <span class="main-slider__subtitle-cursive">LOFT</span>
          </h1>
          <h2 class="main-slider__subtitle">
            Купите
            <span class="main-slider__subtitle-cursive">ГОТОВУЮ</span>
            модель или
            <br />
            <span class="main-slider__subtitle-cursive">ИЗГОТОВЬТЕ</span>
            на заказ
          </h2>
          <a class="main-slider__link" href="catalog.html">Перейти в каталог</a>
        </div>
      </div>

    </div>
  </div>

</section>

<!-- CATEGORIES -->

<section class="categories">
  <div class="container">
    <h3 class="title title-section">
    <?php
      the_field('categories_title');
    ?>
    </h3>
    <div class="categories__grid categories__grid--first" data-aos="zoom-in">
      <a
        class="categories__link categories__link--chest"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('first_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--consoles"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('second_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--chairs"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('third_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--racks"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('fourth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--coffee"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('fifth_category_name');
        ?>
        </span>
      </a>
    </div>
    <div class="categories__grid categories__grid--second" data-aos="zoom-in">
      <a
        class="categories__link categories__link--seats"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('seven_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--tv-table"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('eighth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--shelfs"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('nine_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--wardrobe"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('ten_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--dinner"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('six_category_name');
        ?>
        </span>
      </a>
    </div>
    <div class="categories__grid categories__grid--third" data-aos="zoom-in">
      <a
        class="categories__link categories__link--hangers"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('eleven_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--shoe-cabinets"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('twelve_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--bar-chairs"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('thirteenth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--table"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('fourteenth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--desk"
        href="javascript:void(0);">
        <span class="categories__name">
        <?php
          the_field('fifteenth_category_name');
        ?>
        </span>
      </a>
    </div>
  </div>
</section>

<!-- POPULAR -->

<section class="popular">
  <div class="container">
    <h3 class="title title-section">
    <?php
      the_field('popular_title');
    ?>
    </h3>
    <div class="popular__links">
      <a class="popular__link" href="javascript:void(0);">В КАТАЛОГ</a>
      <a class="popular__link" href="javascript:void(0);">Столы</a>
      <a class="popular__link" href="javascript:void(0);">Консоли</a>
      <a class="popular__link" href="javascript:void(0);">Кресла</a>
      <a class="popular__link" href="javascript:void(0);">Комоды</a>
      <a class="popular__link" href="javascript:void(0);">Стеллажи</a>
      <a class="popular__link" href="javascript:void(0);">Стулья</a>
    </div>
    <div class="popular__products products">
      <div class="products__big big">
        <a class="big__card hvr-grow" href="product.html">
          <img
            class="big__image"
            src="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/el-paso/el-paso01.webp"
            srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/el-paso/el-paso01.webp 200w, 
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/el-paso/el-paso01@2x.webp 400w,
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/el-paso/el-paso01@3x.webp 600w"
            sizes="(min-width: 320px) 290px,
                    (min-width: 375px) 345px,
                   (min-width: 425px) 395px"
            alt="big-card"
          />
          <div class="big__description big__description-first">
            <div>
              <div class="big__name">El-PASO</div>
              <div class="big__type">Кресло</div>
            </div>
            <div class="big__price">от 11 000 ₽</div>
          </div>
        </a>
        <a class="big__card hvr-grow" href="product-page.html">
          <img
            class="big__image"
            src="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/tampa/tampa01.webp"
            srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/tampa/tampa01.webp 200w, 
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/tampa/tampa01@2x.webp 400w,
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/tables/dinner/tampa/tampa01@3x.webp 600w"
            sizes="(min-width: 320px) 290px,
                   (min-width: 375px) 345px,
                   (min-width: 425px) 395px"
            alt="big-card"
          />
          <div class="big__description big__description-second">
            <div>
              <div class="big__name">TAMPA</div>
              <div class="big__type">Обеденный стол</div>
            </div>
            <div class="big__price">от 15 000 ₽</div>
          </div>
        </a>
      </div>
      <div class="products__small small">
        <div class="small__card hvr-grow">
          <img
            class="small__img"
            src="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/portland/portland01.webp"
            srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/portland/portland01.webp 200w, 
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/portland/portland01@2x.webp 400w,
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/portland/portland01@3x.webp 600w"
            sizes="(min-width: 320px) 290px,
                   (min-width: 375px) 345px,
                   (min-width: 425px) 395px"
            alt="small-product-card"
          />
          <div class="small__name">PORTLAND</div>
          <div>
            <div class="small__type">Стеллаж</div>
            <div class="small__price">от 16 000 ₽</div>
          </div>
        </div>
        <div class="small__card hvr-grow">
          <img
            class="small__img"
            src="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/table/louiseville/louiseville01.webp"
            srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/table/louisville/louisville01.webp 200w, 
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/table/louiseville/louiseville01@2x.webp 400w,
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/table/louiseville/louiseville01@3x.webp 600w"
            sizes="(min-width: 320px) 290px,
                   (min-width: 375px) 345px,
                   (min-width: 425px) 395px"
            alt="small-prouct-card"
          />
          <div class="small__name">LOUISVILLE</div>
          <div>
            <div class="small__type">Тумба прикроватная</div>
            <div class="small__price">от 9 000 ₽</div>
          </div>
        </div>
        <div class="small__card hvr-grow">
          <img
            class="small__img"
            src="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/san-diego/san-diego01.webp"
            srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/seats/san-diego/san-diego01.webp 200w, 
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/san-diego/san-diego01@2x.webp 400w,
                    <?php echo bloginfo('template_url');?>/assets/img/catalog/seats/san-diego/san-diego01@3x.webp 600w"
            sizes="(min-width: 320px) 290px,
                   (min-width: 375px) 345px,
                   (min-width: 425px) 395px"
            alt="small-card"
          />
          <div class="small__name">SAN-DIEGO</div>
          <div>
            <div class="small__type">Барный стул</div>
            <div class="small__price">от 10 000 ₽</div>
          </div>
        </div>
        <div class="small__card hvr-grow">
          <img
            class="small__img"
            src="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-antonio/san-antonio01.webp"
            srcset="<?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-antonio/san-antonio01.webp 200w, 
            <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-antonio/san-antonio01@2x.webp 400w,
            <?php echo bloginfo('template_url');?>/assets/img/catalog/storage/console/san-antonio/san-antonio01@3x.webp 600w"
            sizes="(min-width: 320px) 290px,
                   (min-width: 375px) 345px,
                   (min-width: 425px) 395px"
            alt="small-card"
          />
          <div class="small__name">SAN-ANTONIO</div>
          <div>
            <div class="small__type">Cтеллаж</div>
            <div class="small__price">от 12 000 ₽</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ARTICLE -->

<section class="article">
  <div class="container">
    <h3 class="title title-section">
    <?php
      the_field('article_title');
    ?>
    </h3>
    <div class="article__items">
      <a class="article__item hvr-grow" href="#">
        <img
          class="article__image"
          src="<?php the_field('article_first_img'); ?>"
          alt="картинка статьи"
        />
        <div class="article__description">
          <h4 class="article__title">
          <?php
            the_field('article_first_title');
          ?>
          </h4>
          <p class="article__info">
          <?php 
            the_field('article_first_description');
          ?>
          </p>
        </div>
      </a>
      <a class="article__item hvr-grow" href="#">
        <img
          class="article__image"
          src="<?php the_field('article_second_img'); ?>"
          alt="картинка статьи"
        />
        <div class="article__description">
          <h4 class="article__title">
          <?php
            the_field('article_second_title');
          ?>
          </h4>
          <p class="article__info">
          <?php 
            the_field('article_second_description');
          ?>
          </p>
        </div>
      </a>
      <a class="article__item hvr-grow" href="#">
        <img
          class="article__image"
          src="<?php the_field('article_third_img'); ?>"
          alt="картинка статьи"
        />
        <div class="article__description">
          <h4 class="article__title">
          <?php
            the_field('article_third_title');
          ?>
          </h4>
          <p class="article__info">
          <?php 
            the_field('article_third_description');
          ?>
          </p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
  get_footer();
?>
