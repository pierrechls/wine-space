<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<style>

#primary{
	background-color: #fff;
	height: 100vh;
	/*margin-top: -20px;*/
}

	#primary .woocommerce {
		width: 50rem;
	    height: 10rem;
	    margin: 0 auto;
	    top: 50%;
	    left: 50%;
	    position: absolute;
	    margin-top: -5rem;
	    margin-left: -25rem;
	}

	#primary .woocommerce p {
		text-align: center;
	}

	#primary .woocommerce a.return-to-shop {
		background: #c0c0c0;
		padding: 1rem 2rem;
		text-align: center;
		display: block;
		margin: 0 auto;
		border: 2px solid #dce4ec;
	    font: 1.5rem 'Lato', sans-serif;
	    font-weight: 300;
	    padding: 8px 0 9px 10px;
	    text-indent: 1px;
	    -webkit-border-radius: 6px;
	    -moz-border-radius: 6px;
	    border-radius: 6px;
	    width: 75%;
	    max-width: 30rem;
	    -moz-box-shadow: none;
	    box-shadow: none;
	}

#primary .entry-content .woocommerce-message{
	padding: 10rem 1.2rem;
    text-align: center;
}

.entry-content p.cart-empty {
	margin: 4rem auto 1rem auto;
}

header.entry-header{
	display: none;
}

.entry-content p{
	margin: 0;
	text-align: center;
	padding: 2em;
}

.entry-content a{
    text-align: center;
    display: block;
    margin: auto;
    border: none;
    background-color: #b7a56d;
    color: white;
    font-size: 16.5px;
    padding: 10px 20px;
    width: 50%;
    max-width: 200px;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    transition: 0.25s;
    -webkit-backface-visibility: hidden;
    font: 15px 'Lato', sans-serif;
    font-weight: 300;
    text-indent: 1px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -moz-box-shadow: none;
    box-shadow: none;
}

.entry-content a:hover {
    background-color: #b7a56d;
}

.footer-container{
	margin-top: 0;
}

	@media screen and (max-width: 60em){

		#primary .woocommerce {
			width: 100%;
		    height: auto;
		    margin: 0 auto;
		    top: 0;
		    left: 0;
		    position: relative;
		    margin-top: 0;
		    margin-left: 0;
		    margin-top: 15rem;
		    padding: 1rem;
		}

	}

</style>

<?php

wc_print_notices();

?>

<p class="cart-empty"><?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?></p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<a class="return-to-shop" href="<?php echo get_site_url(); ?>">Retour à la boutique</a>
