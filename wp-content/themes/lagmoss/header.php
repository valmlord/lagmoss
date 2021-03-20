<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url');?>/assets/icons/favicon/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url');?>/assets/icons/favicon/favicon-32x32.png">
  <link rel="manifest" href="/site.webmanifest">
  <?php 
    wp_head();
  ?>
</head>

<body>

  <!-- HEADER -->

  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__top-inner">
          <div class="social">
            <div class="social__icons">
              <a class="social__icon" href="<?php the_field('whatsapp_link', 2); ?>"><span class="icon-whatsapp"></span></a>
              <a class="social__icon" href="<?php the_field('instagram_link', 2); ?>"><span class="icon-instagram"></span></a>
              <a class="social__icon" href="<?php the_field('telegram_link', 2); ?>"><span class="icon-telegram"></span></a>
              <a class="social__icon" href="<?php the_field('facebook_link', 2); ?>"><span class="icon-facebook"></span></a>
            </div>
          </div>
          <nav class="menu__top top">
            <ul class="top__list">
              <li class="top__item">
                <a class="top__link" href="javascript:void(0)">ДОСТАВКА И ОПЛАТА</a>
              </li>
              <li class="top__item">
                <a class="top__link" href="catalog.html">КАТАЛОГ</a>
              </li>
              <li class="top__item">
                <a class="top__link" href="javascript:void(0)">НОВОСТИ</a>
              </li>
              <li class="top__item">
                <a class="top__link" href="javascript:void(0)">ПОРТФОЛИО</a>
              </li>
              <li class="top__item">
                <a class="top__link" href="javascript:void(0)">О КОМПАНИИ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <div class="header__bottom-inner">
          <a class="logo" href="<?php echo get_home_url(); ?>">
            <img class="logo-img" 
            src="
            <?php
            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
            echo $custom_logo__url[0]; 
            ?>" 
            alt="lagmoss-logo">
          </a>
          <div class="phone">
            <a class="phone__link" href="tel:<?php the_field('intercity_phone', 2); ?>"><?php the_field('intercity_phone', 2); ?></a>
            <span class="phone__workhours"><?php the_field('work_hours', 2);?></span>
          </div>
          <nav class="menu__bottom bottom">
            <ul class="bottom__list">
              <li class="bottom__item">
                <a class="bottom__link" href="javascript:void(0)">СИДЕНЬЯ</a>
              </li>
              <li class="bottom__item">
                <a class="bottom__link" href="javascript:void(0)">СТОЛЫ</a>
              </li>
              <li class="bottom__item">
                <a class="bottom__link" href="javascript:void(0)">ХРАНЕНИЕ</a>
              </li>
              <li class="bottom__item">
                <a class="bottom__link" href="javascript:void(0)">АКСЕССУАРЫ</a>
              </li>
            </ul>
          </nav>
          <nav class="menu__mobile mobile">
            <ul class="mobile__list">
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">СИДЕНЬЯ</a>
              </li>
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">СТОЛЫ</a>
              </li>
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">ХРАНЕНИЕ</a>
              </li>
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">КАТАЛОГ</a>
              </li>
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">НОВОСТИ</a>
              </li>
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">ПОРТФОЛИО</a>
              </li>
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">О КОМПАНИИ</a>
              </li>
              <li class="mobile__item">
                <a class="mobile__link" href="javascript:void(0)">ДОСТАВКА И ОПЛАТА</a>
              </li>
            </ul>
            <div class="phone">
              <a class="phone__link" href="tel:<?php the_field('intercity_phone', 2); ?>"><?php the_field('intercity_phone', 2); ?></a>
              <span class="phone__workhours">ежедневно с 9:00 до 21:00</span>
            </div>
            <div class="social">
              <div class="social__icons">
                <a class="social__icon" href="<?php the_field('whatsapp_link', 2); ?>"><span class="icon-whatsapp"></span></a>
                <a class="social__icon" href="<?php the_field('instagram_link', 2); ?>"><span class="icon-instagram"></span></a>
                <a class="social__icon" href="<?php the_field('telegram_link', 2); ?>"><span class="icon-telegram"></span></a>
                <a class="social__icon" href="<?php the_field('facebook_link', 2); ?>"><span class="icon-facebook"></span></a>
              </div>
            </div>
          </nav>
          <a class="cart" href="cart.html">
            <span class="icon-cart"></span>
            <p class="cart-number">12</p>
          </a>
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </header>