<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

//remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

remove_all_filters( 'woocommerce_after_single_product_summary');
remove_all_filters( 'woocommerce_before_shop_loop');
?>