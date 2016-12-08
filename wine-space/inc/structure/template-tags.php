<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package winegrower
 */

if ( ! function_exists( 'winegrower_recent_products' ) ) {
	/**
	 * Display Recent Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function winegrower_recent_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'winegrower_recent_products_args');

				do_action( 'winegrower_homepage_before_recent_products' );

				echo do_shortcode_func( 'recent_products');

				do_action( 'winegrower_homepage_after_recent_products' );
		}
	}
}