<!-- 
Template Name: Главная страница
-->

<?php
  get_header();
?>

<!-- HEAD -->

<section class="head">
  <div class="container">
    <div class="main-slider">
    
    <?php
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => 3,
          'category_name' => 'slider',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach( $posts as $post ){
          setup_postdata($post);
        ?>

        <div class="main-slider__item" style="background-image: url('<?php the_field('slider_bg'); ?>')">
          <div class="main-slider__description">
            <h1
            style="
              <?php
                $field = get_field('title_color');

                if ($field == 'black') {

                  ?>
                      color: #1b1b1b
                  <?php

                }

                if ($field == 'brown') {

                  ?>
                      color: #ddd4b7
                  <?php

                }

                if ($field == 'green') {

                  ?>
                      color: #006939
                  <?php

                }

              ?>" 
            class="main-slider__title" >
            <?php
              the_title();
            ?>
            </h1>
            <h2 class="main-slider__subtitle"
            
            style="
              <?php
                $field = get_field('subtitle_color');

                if ($field == 'black') {

                  ?>
                      color: #1b1b1b
                  <?php

                }

                if ($field == 'brown') {

                  ?>
                      color: #ddd4b7
                  <?php

                }

                if ($field == 'green') {

                  ?>
                      color: #006939
                  <?php

                }

              ?>"
            >
                <?php the_field('slider_subtitle');?>
            </h2>

            <?php
                $field = get_field('slider_btn');

                if ($field == 'on') {
                  ?>
                  <a class="main-slider__link" href="<?php the_field('slider_link');?>">Подробнее</a>
                  <?php
                }
              ?> 
          </div>
        </div>

        <?php
      }

      wp_reset_postdata(); // сброс

      ?>
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
        class="categories__link categories__link--chest hvr-grow"
        href="<?php the_field('first_category_link'); ?>"
        style="background-image: url('<?php the_field('first_category_img'); ?>')"
      >
        <span class="categories__name">
          <?php
            the_field('first_category_name');
          ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--consoles hvr-grow"
        href="<?php the_field('second_category_link');?>"
        style="background-image: url('<?php the_field('second_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('second_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--chairs hvr-grow"
        href="<?php the_field('third_category_link');?>"
        style="background-image: url('<?php the_field('third_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('third_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--racks hvr-grow"
        href="<?php the_field('fourth_category_link');?>"
        style="background-image: url('<?php the_field('fourth_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('fourth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--coffee hvr-grow"
        href="<?php the_field('fifth_category_link');?>"
        style="background-image: url('<?php the_field('fifth_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('fifth_category_name');
        ?>
        </span>
      </a>
    </div>
    <div class="categories__grid categories__grid--second" data-aos="zoom-in">
      <a
        class="categories__link categories__link--seats hvr-grow"
        href="<?php the_field('seven_category_link');?>"
        style="background-image: url('<?php the_field('seven_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('seven_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--tv-table hvr-grow"
        href="<?php the_field('eight_category_link');?>"
        style="background-image: url('<?php the_field('eighth_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('eighth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--shelfs hvr-grow"
        href="<?php the_field('nine_category_link');?>"
        style="background-image: url('<?php the_field('nine_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('nine_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--wardrobe hvr-grow"
        href="<?php the_field('ten_category_link');?>"
        style="background-image: url('<?php the_field('ten_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('ten_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--dinner hvr-grow"
        href="<?php the_field('six_category_link');?>"
        style="background-image: url('<?php the_field('six_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('six_category_name');
        ?>
        </span>
      </a>
    </div>
    <div class="categories__grid categories__grid--third" data-aos="zoom-in">
      <a
        class="categories__link categories__link--hangers hvr-grow"
        href="<?php the_field('eleven_category_link'); ?>"
        style="background-image: url('<?php the_field('eleven_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('eleven_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--shoe-cabinets hvr-grow"
        href="<?php the_field('twelve_category_link'); ?>"
        style="background-image: url('<?php the_field('twelve_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('twelve_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--bar-chairs hvr-grow"
        href="<?php the_field('thirteenth_category_link'); ?>"
        style="background-image: url('<?php the_field('thirteenth_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('thirteenth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--table hvr-grow"
        href="<?php the_field('fourteenth_category_link'); ?>"
        style="background-image: url('<?php the_field('fourteenth_category_img'); ?>')"
        >
        <span class="categories__name">
        <?php
          the_field('fourteenth_category_name');
        ?>
        </span>
      </a>
      <a
        class="categories__link categories__link--desk hvr-grow"
        href="<?php the_field('fifteenth_category_link'); ?>"
        style="background-image: url('<?php the_field('fifteenth_category_img'); ?>')"
        >
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
      <a class="popular__link" href="<?php the_field('popular_link_1');?>"><?php the_field('popular_link_name_1');?></a>
      <a class="popular__link" href="<?php the_field('popular_link_2');?>"><?php the_field('popular_link_name_2');?></a>
      <a class="popular__link" href="<?php the_field('popular_link_3');?>"><?php the_field('popular_link_name_3');?></a>
      <a class="popular__link" href="<?php the_field('popular_link_4');?>"><?php the_field('popular_link_name_4');?></a>
      <a class="popular__link" href="<?php the_field('popular_link_5');?>"><?php the_field('popular_link_name_5');?></a>
      <a class="popular__link" href="<?php the_field('popular_link_6');?>"><?php the_field('popular_link_name_6');?></a>
      <a class="popular__link" href="<?php the_field('popular_link_7');?>"><?php the_field('popular_link_name_7');?></a>
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

    <?php
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => 3,
          'category_name'    => 'article',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach( $posts as $post ){
          setup_postdata($post);
        ?>

        <a class="article__item hvr-grow" href="#">
          <img
            class="article__image"
            src="<?php the_field('article_img'); ?>"
            alt="картинка статьи"
          />
          <div class="article__description">
            <h4 class="article__title">
              <?php
                the_title();
              ?>
            </h4>
            <p class="article__info">
            <?php 
              the_field('article_description');
            ?>
            </p>
          </div>
        </a>

        <?php
      }

      wp_reset_postdata(); // сброс

      ?>

    </div>
  </div>
</section>

<?php
  get_footer();
?>
