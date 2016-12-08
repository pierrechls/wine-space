<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package winegrower
 */

if ( ! function_exists( 'winegrower_product_categories' ) ) {
	/**
	 * Display Product Categories
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function winegrower_product_categories( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'winegrower_product_categories_args', array(
				'limit' 			=> 3,
				'columns' 			=> 3,
				'child_categories' 	=> 0,
				'orderby' 			=> 'name',
				'title'				=> __( 'Product Categories', 'winegrower' ),
				) );

			echo '<section class="winegrower-product-section winegrower-product-categories">';

				do_action( 'winegrower_homepage_before_product_categories' );

				echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

				echo do_shortcode_func( 'product_categories',
					array(
						'number' 	=> intval( $args['limit'] ),
						'columns'	=> intval( $args['columns'] ),
						'orderby'	=> esc_attr( $args['orderby'] ),
						'parent'	=> esc_attr( $args['child_categories'] ),
						) );

				do_action( 'winegrower_homepage_after_product_categories' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'winegrower_recent_products' ) ) {
	/**
	 * Display Recent Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function winegrower_recent_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'winegrower_recent_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'title'				=> __( 'Recent Products', 'winegrower' ),
				) );

			echo '<section class="winegrower-product-section winegrower-recent-products">';

				do_action( 'winegrower_homepage_before_recent_products' );

				echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

				echo do_shortcode_func( 'recent_products',
					array(
						'per_page' 	=> intval( $args['limit'] ),
						'columns'	=> intval( $args['columns'] ),
						) );

				do_action( 'winegrower_homepage_after_recent_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'winegrower_featured_products' ) ) {
	/**
	 * Display Featured Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function winegrower_featured_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'winegrower_featured_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'orderby'			=> 'date',
				'order'				=> 'desc',
				'title'				=> __( 'Featured Products', 'winegrower' ),
				) );

			echo '<section class="winegrower-product-section winegrower-featured-products">';

				do_action( 'winegrower_homepage_before_featured_products' );

				echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

				echo do_shortcode_func( 'featured_products',
					array(
						'per_page' 	=> intval( $args['limit'] ),
						'columns'	=> intval( $args['columns'] ),
						'orderby'	=> esc_attr( $args['orderby'] ),
						'order'		=> esc_attr( $args['order'] ),
						) );

				do_action( 'winegrower_homepage_after_featured_products' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'winegrower_popular_products' ) ) {
	/**
	 * Display Popular Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function winegrower_popular_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'winegrower_popular_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'title'				=> __( 'Top Rated Products', 'winegrower' ),
				) );

			echo '<section class="winegrower-product-section winegrower-popular-products">';

				do_action( 'winegrower_homepage_before_popular_products' );

				echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

				echo do_shortcode_func( 'top_rated_products',
					array(
						'per_page' 	=> intval( $args['limit'] ),
						'columns'	=> intval( $args['columns'] ),
						) );

				do_action( 'winegrower_homepage_after_popular_products' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'winegrower_on_sale_products' ) ) {
	/**
	 * Display On Sale Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function winegrower_on_sale_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'winegrower_on_sale_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'title'				=> __( 'On Sale', 'winegrower' ),
				) );

			echo '<section class="winegrower-product-section winegrower-on-sale-products">';

				do_action( 'winegrower_homepage_before_on_sale_products' );

				echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

				echo do_shortcode_func( 'sale_products',
					array(
						'per_page' 	=> intval( $args['limit'] ),
						'columns'	=> intval( $args['columns'] ),
						) );

				do_action( 'winegrower_homepage_after_on_sale_products' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'winegrower_homepage_content' ) ) {
	/**
	 * Display homepage content
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return  void
	 */
	function winegrower_homepage_content() {
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'page' );

		endwhile; // end of the loop.
	}
}

if ( ! function_exists( 'winegrower_social_icons' ) ) {
	/**
	 * Display social icons
	 * If the subscribe and connect plugin is active, display the icons.
	 * @link http://wordpress.org/plugins/subscribe-and-connect/
	 * @since 1.0.0
	 */
	function winegrower_social_icons() {
		if ( class_exists( 'Subscribe_And_Connect' ) ) {
			echo '<div class="subscribe-and-connect-connect">';
			subscribe_and_connect_connect();
			echo '</div>';
		}
	}
}

if ( ! function_exists( 'winegrower_get_sidebar' ) ) {
	/**
	 * Display winegrower sidebar
	 * @uses get_sidebar()
	 * @since 1.0.0
	 */
	function winegrower_get_sidebar() {
		get_sidebar();
	}
}