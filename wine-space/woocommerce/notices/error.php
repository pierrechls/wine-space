<?php
/**
 * Show error messages
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
ul.woocommerce-error{
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

<ul class="woocommerce-error">
	<?php foreach ( $messages as $message ) : ?>
		<li><?php echo wp_kses_post( $message ); ?></li>
	<?php endforeach; ?>
</ul>
