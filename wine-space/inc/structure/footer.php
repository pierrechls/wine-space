<?php
/**
 * Template functions used for the site footer.
 *
 * @package winegrower
 */

if ( ! function_exists( 'winegrower_footer_widgets' ) ) {
	/**
	 * Display the footer widget regions
	 * @since  1.0.0
	 * @return  void
	 */
	function winegrower_footer_widgets() {
		if ( is_active_sidebar( 'footer-4' ) ) {
			$widget_columns = apply_filters( 'winegrower_footer_widget_regions', 4 );
		} elseif ( is_active_sidebar( 'footer-3' ) ) {
			$widget_columns = apply_filters( 'winegrower_footer_widget_regions', 3 );
		} elseif ( is_active_sidebar( 'footer-2' ) ) {
			$widget_columns = apply_filters( 'winegrower_footer_widget_regions', 2 );
		} elseif ( is_active_sidebar( 'footer-1' ) ) {
			$widget_columns = apply_filters( 'winegrower_footer_widget_regions', 1 );
		} else {
			$widget_columns = apply_filters( 'winegrower_footer_widget_regions', 0 );
		}

		if ( $widget_columns > 0 ) : ?>

			<section class="footer-widgets col-<?php echo intval( $widget_columns ); ?> fix">

				<?php $i = 0; while ( $i < $widget_columns ) : $i++; ?>

					<?php if ( is_active_sidebar( 'footer-' . $i ) ) : ?>

						<section class="block footer-widget-<?php echo intval( $i ); ?>">
				        	<?php dynamic_sidebar( 'footer-' . intval( $i ) ); ?>
						</section>

			        <?php endif; ?>

				<?php endwhile; ?>

			</section><!-- /.footer-widgets  -->

		<?php endif;
	}
}

if ( ! function_exists( 'winegrower_credit' ) ) {
	/**
	 * Display the theme credit
	 * @since  1.0.0
	 * @return void
	 */
	function winegrower_credit() {
		?>
		<div class="site-info">
			<?php echo esc_html( apply_filters( 'winegrower_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
			<?php if ( apply_filters( 'winegrower_credit_link', true ) ) { ?>
			<br /> <?php printf( __( '%1$s designed by %2$s.', 'winegrower' ), 'winegrower', '<a href="http://www.woothemes.com" alt="Premium WordPress Themes & Plugins by WooThemes" title="Premium WordPress Themes & Plugins by WooThemes" rel="designer">WooThemes</a>' ); ?>
			<?php } ?>
		</div><!-- .site-info -->
		<?php
	}
}
