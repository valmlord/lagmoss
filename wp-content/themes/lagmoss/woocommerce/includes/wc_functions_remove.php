<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/* add_filter( 'woocommerce_enqueue_styles', 'lagmoss_dequeue_styles', 1 );
function lagmoss_dequeue_styles( $enqueue_styles ) {
	
	
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );
	unset( $enqueue_styles['woocommerce-smallscreen'] );
	//$enqueue_styles['woocommerce-general']['deps'] = array('lagmoss-style');
	//get_vd($enqueue_styles);
	return $enqueue_styles;
} */
?>