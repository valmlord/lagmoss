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
    <div class="container">
      <div class="catalog-inner">
<?php
}
add_action( 'woocommerce_after_main_content', 'lagmoss_archive_wrapper_end', 30 );
function lagmoss_archive_wrapper_end(){
?>
	  </div>
	</div>
<?php
}

add_action( 'woocommerce_before_main_content', 'lagmoss_archive_content_wrapper_start', 60 );
function lagmoss_archive_content_wrapper_start(){
?>
	<div class="catalog-items">
<?php
}
add_action( 'woocommerce_after_main_content', 'lagmoss_archive_content_wrapper_end', 25 );
function lagmoss_archive_content_wrapper_end(){
?>
	</div>
<?php
}
?>