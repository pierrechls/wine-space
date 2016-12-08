<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ){
	return;
}

?>

<style>
div.woocommerce-message{
	padding: 1em;
    text-align: center;
    list-style: none;
    background-color: #a18e38;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.2em;
    margin: 0;
    margin-bottom: 1em;
}
</style>

<?php foreach ( $messages as $message ) : ?>
	<div class="woocommerce-message"><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>
