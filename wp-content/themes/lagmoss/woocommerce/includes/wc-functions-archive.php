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
<section class="product">
    <div class="container">

<?php
}
add_action( 'woocommerce_after_main_content', 'lagmoss_archive_wrapper_end', 30 );
function lagmoss_archive_wrapper_end(){
?>
	</div>
</section>
<?php
}

add_action( 'woocommerce_before_main_content', 'lagmoss_archive_content_wrapper_start', 60 );
function lagmoss_archive_content_wrapper_start(){
?>
	<div class="catalog-inner">
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
?>