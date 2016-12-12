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
	padding: 2rem 1.2rem;
    text-align: left;
    list-style: none;
    background-color: #a18e38;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.7rem;
    margin: 0;
}

@media only screen and (max-width: 40em){
	div.woocommerce-message{
		padding: 8rem 1.2rem 2rem 1.2rem;
		text-align: center;
	}
}
</style>

<?php foreach ( $messages as $message ) : ?>
	<div class="woocommerce-message"><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>
