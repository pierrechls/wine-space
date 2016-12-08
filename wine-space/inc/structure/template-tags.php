<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package winespace
 */

if ( ! function_exists( 'winespace_recent_products' ) ) {
	/**
	 * Display Recent Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function winespace_recent_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'winespace_recent_products_args');

				do_action( 'winespace_homepage_before_recent_products' );

				echo do_shortcode_func( 'recent_products');

				do_action( 'winespace_homepage_after_recent_products' );
		}
	}
}