<?php

add_action ( 'woocommerce_before_single_product', 'lagmoss_wrapper_product_start', 5 );
function lagmoss_wrapper_product_start(){
?>
	<section class="product">
    <div class="container">
<?php

}

add_action ( 'woocommerce_after_single_product', 'lagmoss_wrapper_product_end', 5 );
function lagmoss_wrapper_product_end(){
?>
    </div>
    </section>        
<?php

}

add_action( 'woocommerce_before_single_product_summary', 'lagmoss_wrapper_product_image_start', 5 );
function lagmoss_wrapper_product_image_start() {
	?>
	<div class="product-card__inner-slider">             
	<?php
}

add_action( 'woocommerce_before_single_product_summary', 'lagmoss_wrapper_product_image_end', 25 );
function lagmoss_wrapper_product_image_end() {
	?>
	</div>
	<?php
}

add_action( 'woocommerce_before_single_product_summary', 'lagmoss_wrapper_product_entry_start', 30 );
function lagmoss_wrapper_product_entry_start() {
	?>
	<div class="product-card__inner-info"> 
	<?php
}
add_action( 'woocommerce_after_single_product_summary', 'lagmoss_wrapper_product_entry_end', 5 );
function lagmoss_wrapper_product_entry_end() {
	?>
	</div>
	<?php
}

?>