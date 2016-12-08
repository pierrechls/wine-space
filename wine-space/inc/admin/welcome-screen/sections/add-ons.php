<?php
/**
 * Welcome screen add-ons template
 */
?>
<div id="add_ons" class="winespace-add-ons panel" style="padding-top: 1.618em; clear: both;">
	<h2><?php _e( 'Enhance your site', 'winespace' ); ?> <div class="dashicons dashicons-admin-plugins"></div></h2>

	<p>
		<?php _e( 'Below you will find a selection of free and commercial winespace extensions that could help improve your online store.', 'winespace' ); ?>
	</p>

	<div class="add-on">
		<h4><?php _e( 'Make your site instantly recognisable by adding your logo', 'winespace' ); ?> <span class="free"><?php _e( 'Free (Third Party)', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'Jetpack is probably a plugin you\'re already familiar with. winespace fully supports Jetpacks site logo feature making it easy to upload and display your logo via the Customizer. %sMore info &rarr;%s', 'winespace' ), '<a href="https://wordpress.org/plugins/jetpack/">', '</a>' );?></p>

			<?php if ( class_exists( 'Jetpack' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=jetpack' ), 'install-plugin_jetpack' ) ); ?>" class="button button-primary"><?php _e( 'Install Jetpack', 'winespace' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical winespace-designer">
		<h4><?php _e( 'Further customise your store with the winespace Designer', 'winespace' ); ?> <span class="premium"><?php _e( 'Premium', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php _e( 'winespace Designer adds a bunch of additional appearance settings allowing you to further tweak and perfect your winespace design by changing the header layout, button styles, typographical schemes/scales and more.', 'winespace' ); ?></p>

			<?php if ( class_exists( 'winespace_Designer' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="https://www.woothemes.com/products/winespace-designer?utm_source=product&utm_medium=upsell&utm_campaign=winespaceaddons" class="button button-primary"><?php printf( __( 'Buy %swinespace Designer%s now', 'winespace' ), '<span class="screen-reader-text">', '</span>' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical product-hero">
		<h4><?php _e( 'Highlight a product of your choosing with the winespace Product Hero', 'winespace' ); ?> <span class="premium"><?php _e( 'Premium', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php _e( 'The winespace Product Hero extension adds a parallax hero component to your homepage highlighting a specific product at your store. Use the shortcode to add attractive hero components to posts, pages or widgets.', 'winespace' ); ?></p>

			<?php if ( class_exists( 'winespace_Product_Hero' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="https://www.woothemes.com/products/winespace-product-hero?utm_source=product&utm_medium=upsell&utm_campaign=winespaceaddons" class="button button-primary"><?php printf( __( 'Buy %swinespace Product Hero%s now', 'winespace' ), '<span class="screen-reader-text">', '</span>' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical share">
		<h4><?php _e( 'Have your visitors market your store for you with winespace Product Sharing', 'winespace' ); ?> <span class="free"><?php _e( 'Free', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winespace Product Sharing adds attractive social sharing icons for Facebook, Twitter, Pinterest and Email to your product pages. %sMore info &rarr;%s', 'winespace' ), '<a href="https://wordpress.org/plugins/winespace-product-sharing/">', '</a>' );?></p>

			<?php if ( class_exists( 'winespace_Product_Sharing' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winespace-product-sharing' ), 'install-plugin_winespace-product-sharing' ) ); ?>" class="button button-primary"><?php _e( 'Install winespace Product Sharing', 'winespace' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-horizontal footer-bar">
		<h4><?php _e( 'Add a site-wide call out to your footer with winespace Footer Bar', 'winespace' ); ?> <span class="free"><?php _e( 'Free', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winespace Footer Bar adds a full width widgetised region above the default winespace footer widget area. %sMore info &rarr;%s', 'winespace' ), '<a href="https://wordpress.org/plugins/winespace-footer-bar/">', '</a>' );?></p>

			<?php if ( class_exists( 'winespace_Footer_Bar' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winespace-footer-bar' ), 'install-plugin_winespace-footer-bar' ) ); ?>" class="button button-primary"><?php _e( 'Install winespace Footer Bar', 'winespace' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-horizontal product-pagination">
		<h4><?php _e( 'winespace Product Pagination', 'winespace' ); ?> <span class="free"><?php _e( 'Free', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winespace Product Pagination adds unobtrusive links to next/previous products on your WooCommerce single product pages. %sMore info &rarr;%s', 'winespace' ), '<a href="https://wordpress.org/plugins/winespace-product-pagination/">', '</a>' );?></p>

			<?php if ( class_exists( 'winespace_Product_Pagination' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winespace-product-pagination' ), 'install-plugin_winespace-product-pagination' ) ); ?>" class="button button-primary"><?php _e( 'Install winespace Product Pagination', 'winespace' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical wc-customiser">
		<h4><?php _e( 'Refine your shop archives and product pages with the winespace WooCommerce Customiser', 'winespace' ); ?> <span class="premium"><?php _e( 'Premium', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php _e( 'The winespace WooCommerce Customiser extension gives you further control over the look and feel of your shop. Change the product archive and single layouts, toggle various shop components and more.', 'winespace' ); ?></p>

			<?php if ( class_exists( 'winespace_WooCommerce_Customiser' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="https://www.woothemes.com/products/winespace-woocommerce-customiser?utm_source=product&utm_medium=upsell&utm_campaign=winespaceaddons" class="button button-primary"><?php printf( __( 'Buy %swinespace WooCommerce Customiser%s now', 'winespace' ), '<span class="screen-reader-text">', '</span>' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on">
		<h4><?php _e( 'Add practical information to your pages with winespace Top Bar', 'winespace' ); ?> <span class="free"><?php _e( 'Free (Third Party)', 'winespace' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winespace Top Bar adds a widgetised content area at the top of your site and customise it\'s appearance in the Customizer. %sMore info &rarr;%s', 'winespace' ), '<a href="https://wordpress.org/plugins/winespace-top-bar/">', '</a>' ); ?></p>

			<?php if ( class_exists( 'winespace_Top_Bar' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winespace' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winespace-top-bar' ), 'install-plugin_winespace-top-bar' ) ); ?>" class="button button-primary"><?php _e( 'Install winespace Top Bar', 'winespace' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<hr style="clear: both;" />

	<p style="font-size: 1.2em; margin: 2.618em 0;">
		<?php echo sprintf( esc_html__( 'There are literally hundreds of awesome extensions available for you to use. Looking for Table Rate Shipping? Subscriptions? Product Add-ons? You can find these and more in the WooCommerce extension shop. %sGo shopping%s.', 'winespace' ), '<a href="http://www.woothemes.com/product-category/woocommerce-extensions/">', '</a>' ); ?>
	</p>
</div>