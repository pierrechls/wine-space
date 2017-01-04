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
div.woocommerce-info{
	padding: 2rem 1.2rem;
    text-align: center;
    list-style: none;
    background-color: #b7a56d;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.7rem;
    margin: 0;
}

@media only screen and (max-width: 60em){
	div.woocommerce-info{
		padding: 8rem 1.2rem 2rem 1.2rem;
		text-align: center;
	}
}

</style>

<?php foreach ( $messages as $message ) : ?>
	<div class="woocommerce-info"><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>
