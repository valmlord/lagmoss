<?php
add_action('wp_enqueue_scripts', 'lagmoss_styles');
add_action('wp_enqueue_scripts', 'lagmoss_scripts');

function lagmoss_styles() {
    wp_enqueue_style( 'lagmoss-style', get_stylesheet_uri() );
}

function lagmoss_scripts() {
    wp_enqueue_script( 'lagmoss-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}

add_theme_support( 'custom-logo' );

?>
