<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'lagmoss_add_breadcrumbs', 20 );
function lagmoss_add_breadcrumbs(){
?>
    <section class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-inner">
            <?php
	        $args = array(
			'delimiter' => '<span class="icon-dashicon">', 
	        );
            ?>
            <?php woocommerce_breadcrumb($args)?>
            </div>
        </div>
    </section>
<?php
}

//Добавляем изображение вместо слова Распродажа,
add_filter( 'woocommerce_sale_flash', 'lagmoss_custom_sales_badge' );

function lagmoss_custom_sales_badge() {
$img = '<img src="http://lagmoss/wp-content/themes/lagmoss/assets/icons/hot.svg" style="
position: absolute;
top: 15px;
right: 15px;
z-index: 1;
left: 10px;
width: 42px;
height: 42px;
">';

return $img;

}

