<?php
/**
 * Created by VSC.
 * User: valmlord
 * Date: 28.03.2021
 * Time: 12:43
 */

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
                <?php woocommerce_breadcrumb();?>
            </div>
        </div>
    </section>
    <?php
}

?>