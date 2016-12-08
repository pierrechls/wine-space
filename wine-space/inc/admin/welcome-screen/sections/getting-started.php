<?php
/**
 * Welcome screen getting started template
 */
?>
<?php
// get theme customizer url
$url 	= admin_url() . 'customize.php?';
$url 	.= 'url=' . urlencode( site_url() . '?winegrower-customizer=true' );
$url 	.= '&return=' . urlencode( admin_url() . 'themes.php?page=winegrower-welcome' );
$url 	.= '&winegrower-customizer=true';
?>
<div id="getting_started" class="col two-col panel" style="margin-bottom: 1.618em; padding-top: 1.618em; overflow: hidden;">

	<h2><?php _e( 'Using winegrower', 'winegrower' ); ?> <div class="dashicons dashicons-lightbulb"></div></h2>
	<p><?php _e( 'We\'ve purposely kept winegrower lean & mean so configuration is a breeze. Here are some common theme-setup tasks:', 'winegrower' ); ?></p>

	<div class="col-1">
		<?php if ( ! class_exists( 'WooCommerce' ) ) { ?>
			<h4><?php _e( 'Install WooCommerce' ,'winegrower' ); ?></h4>
			<p><?php _e( 'Although winegrower works fine as a standard WordPress theme, it really shines when used for an online store. Install WooCommerce and start selling now.', 'winegrower' ); ?></p>

			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=woocommerce' ), 'install-plugin_woocommerce' ) ); ?>" class="button button-primary"><?php _e( 'Install WooCommerce', 'winegrower' ); ?></a></p>
		<?php } ?>

		<h4><?php _e( 'Configure menu locations' ,'winegrower' ); ?></h4>
		<p><?php _e( 'winegrower includes three menu locations for primary, secondary and handheld navigation. The primary navigation is perfect for your key pages like the shop and product categories. The secondary navigation is better suited to lower traffic pages such as terms and conditions. The handheld navigation gives you complete control over what menu items to serve to handheld devices.', 'winegrower' ); ?></p>
		<p><a href="<?php echo esc_url( self_admin_url( 'nav-menus.php' ) ); ?>" class="button"><?php _e( 'Configure menus', 'winegrower' ); ?></a></p>

		<h4><?php _e( 'Create a color scheme' ,'winegrower' ); ?></h4>
		<p><?php _e( 'Using the WordPress Customizer you can tweak winegrower\'s appearance to match your brand.', 'winegrower' ); ?></p>
		<p><a href="<?php echo esc_url( $url ); ?>" class="button"><?php _e( 'Open the Customizer', 'winegrower' ); ?></a></p>

		<?php if ( ! class_exists( 'Jetpack' ) || ! class_exists( 'winegrower_Site_Logo' ) ) { ?>
			<h4><?php _e( 'Add your logo', 'winegrower' ); ?></h4>
			<p><?php echo sprintf( esc_html__( 'Install and activate either %sJetpack%s or the to enable a custom logo option in the Customizer.', 'winegrower' ), '<a href="https://wordpress.org/plugins/jetpack/">', '</a>' ); ?></p>
			<p>
				<?php if ( ! class_exists( 'Jetpack' ) ) { ?>
					<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=jetpack' ), 'install-plugin_jetpack' ) ); ?>" class="button button-primary"><?php _e( 'Install Jetpack', 'winegrower' ); ?></a>
				<?php } ?>
			</p>
		<?php } ?>
	</div>

	<div class="col-2 last-feature">
		<h4><?php _e( 'Configure homepage template', 'winegrower' ); ?></h4>
		<p><?php _e( 'winegrower includes a homepage template that displays a selection of products from your store.', 'winegrower' ); ?></p>
		<p><?php echo sprintf( esc_html__( 'To set this up you will need to create a new page and assign the "Homepage" template to it. You can then set that as a static homepage in the %sReading%s settings.', 'winegrower' ), '<a href="' . esc_url( self_admin_url( 'options-reading.php' ) ) . '">', '</a>' ); ?></p>
		<p><?php echo sprintf( esc_html__( 'Once set up you can toggle and re-order the homepage components using the %sHomepage Control%s plugin.', 'winegrower' ), '<a href="https://wordpress.org/plugins/homepage-control/">', '</a>' ); ?></p>

		<?php if ( ! class_exists( 'Homepage_Control' ) ) { ?>
			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=homepage-control' ), 'install-plugin_homepage-control' ) ); ?>" class="button button-primary"><?php _e( 'Install Homepage Control', 'winegrower' ); ?></a></p>
		<?php } ?>

		<h4><?php _e( 'View documentation', 'winegrower' ); ?></h4>
		<p><?php _e( 'You can read detailed information on winegrowers features and how to develop on top of it in the documentation.', 'winegrower' ); ?></p>
		<p><a href="http://docs.woothemes.com/documentation/themes/winegrower/" class="button"><?php _e( 'View documentation &rarr;', 'winegrower' ); ?></a></p>
	</div>
</div>