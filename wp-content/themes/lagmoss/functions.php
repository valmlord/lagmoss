<?php
add_action('wp_enqueue_scripts', 'lagmoss_styles');
add_action('wp_enqueue_scripts', 'lagmoss_scripts');

function lagmoss_styles() {
    wp_enqueue_style( 'lagmoss-style', get_stylesheet_uri()  );
}

function lagmoss_scripts() {
    wp_enqueue_script( 'lagmoss-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
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
/*
 * Подключение настроек темы
 */
require get_template_directory() . '/includes/theme-settings.php';
/*
 * Подключение области виджетов
 */
require get_template_directory() . '/includes/widget-areas.php';
/*
 * Подключение скриптов и стилей
 */
require get_template_directory() . '/includes/enqueue-script-style.php';
/*
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	//require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';
}
?>
