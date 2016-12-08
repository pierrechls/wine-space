<?php
/**
 * Welcome screen add-ons template
 */
?>
<div id="add_ons" class="winegrower-add-ons panel" style="padding-top: 1.618em; clear: both;">
	<h2><?php _e( 'Enhance your site', 'winegrower' ); ?> <div class="dashicons dashicons-admin-plugins"></div></h2>

	<p>
		<?php _e( 'Below you will find a selection of free and commercial winegrower extensions that could help improve your online store.', 'winegrower' ); ?>
	</p>

	<div class="add-on">
		<h4><?php _e( 'Make your site instantly recognisable by adding your logo', 'winegrower' ); ?> <span class="free"><?php _e( 'Free (Third Party)', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'Jetpack is probably a plugin you\'re already familiar with. winegrower fully supports Jetpacks site logo feature making it easy to upload and display your logo via the Customizer. %sMore info &rarr;%s', 'winegrower' ), '<a href="https://wordpress.org/plugins/jetpack/">', '</a>' );?></p>

			<?php if ( class_exists( 'Jetpack' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=jetpack' ), 'install-plugin_jetpack' ) ); ?>" class="button button-primary"><?php _e( 'Install Jetpack', 'winegrower' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical winegrower-designer">
		<h4><?php _e( 'Further customise your store with the winegrower Designer', 'winegrower' ); ?> <span class="premium"><?php _e( 'Premium', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php _e( 'winegrower Designer adds a bunch of additional appearance settings allowing you to further tweak and perfect your winegrower design by changing the header layout, button styles, typographical schemes/scales and more.', 'winegrower' ); ?></p>

			<?php if ( class_exists( 'winegrower_Designer' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="https://www.woothemes.com/products/winegrower-designer?utm_source=product&utm_medium=upsell&utm_campaign=winegroweraddons" class="button button-primary"><?php printf( __( 'Buy %swinegrower Designer%s now', 'winegrower' ), '<span class="screen-reader-text">', '</span>' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical product-hero">
		<h4><?php _e( 'Highlight a product of your choosing with the winegrower Product Hero', 'winegrower' ); ?> <span class="premium"><?php _e( 'Premium', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php _e( 'The winegrower Product Hero extension adds a parallax hero component to your homepage highlighting a specific product at your store. Use the shortcode to add attractive hero components to posts, pages or widgets.', 'winegrower' ); ?></p>

			<?php if ( class_exists( 'winegrower_Product_Hero' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="https://www.woothemes.com/products/winegrower-product-hero?utm_source=product&utm_medium=upsell&utm_campaign=winegroweraddons" class="button button-primary"><?php printf( __( 'Buy %swinegrower Product Hero%s now', 'winegrower' ), '<span class="screen-reader-text">', '</span>' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical share">
		<h4><?php _e( 'Have your visitors market your store for you with winegrower Product Sharing', 'winegrower' ); ?> <span class="free"><?php _e( 'Free', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winegrower Product Sharing adds attractive social sharing icons for Facebook, Twitter, Pinterest and Email to your product pages. %sMore info &rarr;%s', 'winegrower' ), '<a href="https://wordpress.org/plugins/winegrower-product-sharing/">', '</a>' );?></p>

			<?php if ( class_exists( 'winegrower_Product_Sharing' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winegrower-product-sharing' ), 'install-plugin_winegrower-product-sharing' ) ); ?>" class="button button-primary"><?php _e( 'Install winegrower Product Sharing', 'winegrower' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-horizontal footer-bar">
		<h4><?php _e( 'Add a site-wide call out to your footer with winegrower Footer Bar', 'winegrower' ); ?> <span class="free"><?php _e( 'Free', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winegrower Footer Bar adds a full width widgetised region above the default winegrower footer widget area. %sMore info &rarr;%s', 'winegrower' ), '<a href="https://wordpress.org/plugins/winegrower-footer-bar/">', '</a>' );?></p>

			<?php if ( class_exists( 'winegrower_Footer_Bar' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winegrower-footer-bar' ), 'install-plugin_winegrower-footer-bar' ) ); ?>" class="button button-primary"><?php _e( 'Install winegrower Footer Bar', 'winegrower' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-horizontal product-pagination">
		<h4><?php _e( 'winegrower Product Pagination', 'winegrower' ); ?> <span class="free"><?php _e( 'Free', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winegrower Product Pagination adds unobtrusive links to next/previous products on your WooCommerce single product pages. %sMore info &rarr;%s', 'winegrower' ), '<a href="https://wordpress.org/plugins/winegrower-product-pagination/">', '</a>' );?></p>

			<?php if ( class_exists( 'winegrower_Product_Pagination' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winegrower-product-pagination' ), 'install-plugin_winegrower-product-pagination' ) ); ?>" class="button button-primary"><?php _e( 'Install winegrower Product Pagination', 'winegrower' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on image-vertical wc-customiser">
		<h4><?php _e( 'Refine your shop archives and product pages with the winegrower WooCommerce Customiser', 'winegrower' ); ?> <span class="premium"><?php _e( 'Premium', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php _e( 'The winegrower WooCommerce Customiser extension gives you further control over the look and feel of your shop. Change the product archive and single layouts, toggle various shop components and more.', 'winegrower' ); ?></p>

			<?php if ( class_exists( 'winegrower_WooCommerce_Customiser' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="https://www.woothemes.com/products/winegrower-woocommerce-customiser?utm_source=product&utm_medium=upsell&utm_campaign=winegroweraddons" class="button button-primary"><?php printf( __( 'Buy %swinegrower WooCommerce Customiser%s now', 'winegrower' ), '<span class="screen-reader-text">', '</span>' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<div class="add-on">
		<h4><?php _e( 'Add practical information to your pages with winegrower Top Bar', 'winegrower' ); ?> <span class="free"><?php _e( 'Free (Third Party)', 'winegrower' ); ?></span></h4>
		<div class="content">
			<p><?php echo sprintf( __( 'winegrower Top Bar adds a widgetised content area at the top of your site and customise it\'s appearance in the Customizer. %sMore info &rarr;%s', 'winegrower' ), '<a href="https://wordpress.org/plugins/winegrower-top-bar/">', '</a>' ); ?></p>

			<?php if ( class_exists( 'winegrower_Top_Bar' ) ) { ?>
				<p><span class="activated"><?php _e( 'Activated', 'winegrower' ); ?></span></p>
			<?php } else { ?>
				<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=winegrower-top-bar' ), 'install-plugin_winegrower-top-bar' ) ); ?>" class="button button-primary"><?php _e( 'Install winegrower Top Bar', 'winegrower' ); ?></a></p>
			<?php } ?>
		</div>
	</div>

	<hr style="clear: both;" />

	<p style="font-size: 1.2em; margin: 2.618em 0;">
		<?php echo sprintf( esc_html__( 'There are literally hundreds of awesome extensions available for you to use. Looking for Table Rate Shipping? Subscriptions? Product Add-ons? You can find these and more in the WooCommerce extension shop. %sGo shopping%s.', 'winegrower' ), '<a href="http://www.woothemes.com/product-category/woocommerce-extensions/">', '</a>' ); ?>
	</p>
</div>