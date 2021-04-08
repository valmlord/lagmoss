<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'top_menu') {
        $atts['class'] = 'top__link';
    };

    if ($args->menu === 'bottom_menu') {
        $atts['class'] = 'bottom__link';
    };

    if ($args->menu === 'mobile_menu') {
        $atts['class'] = 'mobile__link';
    };

    if ($args->menu === 'footer_menu') {
        $atts['class'] = 'footer__link';
    };

    return $atts;
}

if ( ! function_exists( 'lagmoss_setup' ) ) :
	add_action( 'after_setup_theme', 'lagmoss_setup' );
	function lagmoss_setup() {
		
		
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
endif;

add_action( 'after_setup_theme', 'lagmoss_content_width', 0 );
function lagmoss_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lagmoss_content_width', 640 );
}