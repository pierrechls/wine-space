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
	padding: 2rem 1.2rem;
    text-align: left;
    list-style: none;
    background-color: #b7a56d;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.7rem;
    margin: 0;
}
@media only screen and (max-width: 60em){
	ul.woocommerce-error{
		padding: 8rem 1.2rem 2rem 1.2rem;
		text-align: center;
	}
}
</style>

<ul class="woocommerce-error">
	<?php foreach ( $messages as $message ) : ?>
		<li><?php echo wp_kses_post( $message ); ?></li>
	<?php endforeach; ?>
</ul>
