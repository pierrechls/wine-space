<?php
/**
 * Welcome screen child themes template
 */
?>
<div id="child_themes" class="winespace-add-ons panel" style="padding-top: 1.618em; clear: both;">
	<?php
		$theme = wp_get_theme();
	?>

	<h2><?php _e( 'Get a whole new look', 'winespace' ); ?> <div class="dashicons dashicons-admin-appearance"></div></h2>

	<p>
		<?php _e( 'Below you will find a selection of winespace child themes that will transform the look and feel of your site while retaining the rock solid winespace foundation.', 'winespace' ); ?>
	</p>

	<div class="feature-section col two-col">

		<div class="col-1">
			<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/galleria.jpg'; ?>" alt="<?php _e( 'Galleria Child Theme', 'winespace' ); ?>" class="image-50" />
			<h4><?php _e( 'Galleria', 'winespace' ); ?></h4>
			<p><?php _e( 'Galleria is a winespace child theme perfect for fashion and design stores. Stylish and minimalist, it gives sites a high class look and keeps products centerstage.', 'winespace' ); ?></p>
			<p style="margin-bottom: 2.618em;">
				<?php if ( 'Galleria' != $theme['Name'] ) { ?>
					<a href="http://www.woothemes.com/products/galleria/" class="button button-primary"><?php printf( __( 'Buy %s now', 'winespace' ), '<span class="screen-reader-text">Galleria</span>' ); ?></a>
				<?php } ?>
				<a href="http://www.woothemes.com/products/galleria/" class="button"><?php printf( __( 'Read more %sabout Galleria%s &rarr;', 'winespace' ), '<span class="screen-reader-text">', '</span>' ); ?></a>
			</p>
		</div>

		<div class="col-2 last-feature">
			<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/deli.jpg'; ?>" alt="<?php _e( 'Deli Child Theme', 'winespace' ); ?>" class="image-50" />
			<h4><?php _e( 'Deli', 'winespace' ); ?></h4>
			<p><?php _e( 'Deli features a texturised, earthy design, perfect for stores selling natural, organic or hand made goods.', 'winespace' ); ?></p>
			<p style="margin-bottom: 2.618em;">
				<?php if ( 'Deli' != $theme['Name'] ) { ?>
					<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=deli' ), 'install-theme_deli' ) ); ?>" class="button button-primary"><?php printf( __( 'Install %s now', 'winespace' ), '<span class="screen-reader-text">Deli</span>' ); ?></a>
				<?php } ?>
				<a href="http://www.woothemes.com/products/deli/" class="button"><?php printf( __( 'Read more %sabout Deli%s &rarr;', 'winespace' ), '<span class="screen-reader-text">', '</span>' ); ?></a>
			</p>
		</div>

		<div class="col-1">
			<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/boutique.jpg'; ?>" alt="<?php _e( 'Boutique Child Theme', 'winespace' ); ?>" class="image-50" />
			<h4><?php _e( 'Boutique', 'winespace' ); ?></h4>
			<p><?php _e( 'Boutique is a simple, traditionally designed winespace child theme, ideal for small stores or boutiques. Add your logo, create a unique color scheme and start selling!', 'winespace' ); ?></p>
			<p style="margin-bottom: 2.618em;">
				<?php if ( 'Boutique' != $theme['Name'] ) { ?>
					<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=boutique' ), 'install-theme_boutique' ) ); ?>" class="button button-primary"><?php printf( __( 'Install %s now', 'winespace' ), '<span class="screen-reader-text">Boutique</span>' ); ?></a>
				<?php } ?>
				<a href="http://www.woothemes.com/products/boutique/" class="button"><?php printf( __( 'Read more %sabout Boutique%s &rarr;', 'winespace' ), '<span class="screen-reader-text">', '</span>' ); ?></a>
			</p>
		</div>

	</div>
</div>