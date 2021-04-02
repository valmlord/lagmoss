<?php

if ( ! function_exists( 'lagmoss_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	add_filter( 'woocommerce_add_to_cart_fragments', 'lagmoss_woocommerce_cart_link_fragment' );
	function lagmoss_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		lagmoss_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();
		
		return $fragments;
	}
}

// remove_action( 'lagmoss_woocommerce_cart_link', 10 );
// add_action( 'lagmoss_woocommerce_cart_link',  10 );

if ( ! function_exists( 'lagmoss_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function lagmoss_woocommerce_cart_link() {
		?>
		<a class="cart-contents cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Показывает содержимое корзины', 'lagmoss' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'lagmoss' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="icon-cart"></span>
			<span class="count cart-number"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
} 

if ( ! function_exists( 'lagmoss_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function lagmoss_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php lagmoss_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);
				
				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

?>