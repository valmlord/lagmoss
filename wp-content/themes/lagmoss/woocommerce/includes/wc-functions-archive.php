<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'woocommerce_before_main_content', 'lagmoss_add_sidebar_only_archive', 50 );
function lagmoss_add_sidebar_only_archive() {
	if ( ! is_product() ) {
		woocommerce_get_sidebar();
	}
}

add_action( 'woocommerce_before_main_content', 'lagmoss_archive_wrapper_start', 40 );
function lagmoss_archive_wrapper_start(){
?>	
	<section class="catalog">
    <div class="container">
	<div class="catalog-inner">
<?php
}
add_action( 'woocommerce_after_main_content', 'lagmoss_archive_wrapper_end', 30 );
function lagmoss_archive_wrapper_end(){
?>
	</div>
	</div>
	</section>
<?php
}

add_action( 'woocommerce_before_main_content', 'lagmoss_archive_content_wrapper_start', 60 );
function lagmoss_archive_content_wrapper_start(){
?>
	<div class="catalog-items__inner">
<?php
}
add_action( 'woocommerce_after_main_content', 'lagmoss_archive_content_wrapper_end', 25 );
function lagmoss_archive_content_wrapper_end(){
?>	
	</div>
<?php
}

add_filter( 'woocommerce_show_page_title', 'lagmoss_hide_title_shop' );
function lagmoss_hide_title_shop( $hide ) {
	if ( is_shop() ) {
		$hide = false;
	}
	
	return $hide;
}

add_filter( 'post_class', 'lagmoss_add_class_loop_item' );
function lagmoss_add_class_loop_item($clasess){
	if(is_shop() || is_product_taxonomy()){
		$clasess[] = 'catalog-item';
	}
	return $clasess;
}

add_action( 'woocommerce_before_shop_loop_item', 'lagmoss_loop_product_div_open', 5);
function lagmoss_loop_product_div_open() {
	?>
	<div class="catalog-item__card-link">
	<?php
}

add_action( 'woocommerce_after_shop_loop_item', 'lagmoss_loop_product_div_close', 20);
function lagmoss_loop_product_div_close() {
	?>
	</div>
	<?php
}

add_action( 'woocommerce_before_shop_loop_item_title', 'lagmoss_loop_item_title_open', 5); 
	function lagmoss_loop_item_title_open() {
	?>
	<div class="catalog-item__description">
	<?php
}

add_action( 'woocommerce_after_shop_loop_item_title', 'lagmoss_loop_item_title_close', 5); 
	function lagmoss_loop_item_title_close() {
	?>
	</div>
	<?php
}

remove_action( 'woocommerce_template_loop_add_to_cart', 'lagmoss_template_loop_add_to_cart', 15);

add_action( 'woocommerce_after_shop_loop_item', 'lagmoss_after_shop_loop_item', 10);
function lagmoss_after_shop_loop_item() {
	?>
	<?php
}


