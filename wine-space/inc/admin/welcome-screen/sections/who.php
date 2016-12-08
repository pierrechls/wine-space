<?php
/**
 * Welcome screen who are woo template
 */
?>
<div id="who" class="feature-section col three-col" style="margin-bottom: 1.618em; padding-top: 1.618em; overflow: hidden;">
	<div class="col-1">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/woothemes.png'; ?>" alt="<?php _e( 'The Woo Team', 'winegrower' ); ?>" class="image-50" width="440" />
		<h4><?php _e( 'Who are WooThemes?', 'winegrower' ); ?></h4>
		<p><?php _e( 'WooCommerce creators WooThemes is an international team of WordPress superstars building products for a passionate community of hundreds of thousands of users.', 'winegrower' ); ?></p>
		<p><a href="http://woothemes.com" class="button"><?php _e( 'Visit WooThemes', 'winegrower' ); ?></a></p>
	</div>

	<?php if ( ! class_exists( 'WooCommerce' ) ) { ?>

	<div class="col-2">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/woocommerce.png'; ?>" alt="<?php _e( 'WooCommerce logo', 'winegrower' ); ?>" class="image-50" width="440" />
		<h4><?php _e( 'What is WooCommerce?', 'winegrower' ); ?></h4>
		<p><?php _e( 'WooCommerce is the most popular WordPress eCommerce plugin. Packed full of intuitive features and surrounded by a thriving community - it\'s the perfect solution for building an online store with WordPress.', 'winegrower' ); ?></p>
		<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=woocommerce' ), 'install-plugin_woocommerce' ) ); ?>" class="button button-primary"><?php _e( 'Download & Install WooCommerce', 'winegrower' ); ?></a></p>
		<p><a href="http://docs.woothemes.com/documentation/plugins/woocommerce/" class="button"><?php _e( 'View WooCommerce Documentation', 'winegrower' ); ?></a></p>
	</div>

	<?php } ?>

	<div class="col-2">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/github.png'; ?>" alt="<?php _e( 'Can I contribute to winegrower?', 'winegrower' ); ?>" class="image-50" width="440" />
		<h4><?php _e( 'Can I Contribute?', 'winegrower' ); ?></h4>
		<p><?php _e( 'Found a bug? Want to contribute a patch or create a new feature? GitHub is the place to go! Or would you like to translate winegrower in to your language? Get involved at Transifex.', 'winegrower' ); ?></p>
		<p><a href="http://github.com/woothemes/winegrower/" class="button"><?php _e( 'winegrower at GitHub', 'winegrower' ); ?></a> <a href="https://www.transifex.com/projects/p/winegrower-1/" class="button"><?php _e( 'winegrower at Transifex', 'winegrower' ); ?></a></p>
	</div>

	<div class="col-3 last-feature">
		<h4><?php _e( 'Can\'t find a feature?', 'winegrower' ); ?></h4>
		<p><?php echo sprintf( esc_html__( 'Please suggest and vote on ideas / feature requests at the %swinegrower Ideasboard%s. The most popular ideas will see prioritised development.', 'winegrower' ), '<a href="http://ideas.woothemes.com/forums/275029-winegrower">', '</a>' ); ?></p>

		<h4><?php _e( 'Are you enjoying winegrower?', 'winegrower' ); ?></h4>
		<p><?php echo sprintf( esc_html__( 'Why not leave a review on %sWordPress.org%s? We\'d really appreciate it! :-)', 'winegrower' ), '<a href="https://wordpress.org/themes/winegrower">', '</a>' ); ?></p>
	</div>
</div>