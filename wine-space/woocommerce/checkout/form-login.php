<?php
/**
 * Checkout login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
 
 ?>

<style>

.woocommerce-info{
	color: #f7f7f7;
    text-transform: uppercase;
    text-align: center;
}

.woocommerce-message{
	background-color: #a18e38;
    color: #F7F7F7;
    text-align: center;
    margin: auto;
    float: none;
    clear: both;
    padding: 1em;
}

form.login{
	display: block !important;
	background-color: #F7F7F7;
    padding: 4em 1em 0 1em;
    text-align: center;
}

form.login p.form-row{
	display: inline-block;
}

form.login p.form-row input[type="submit"]{
	padding: 5px 10px;
	width: auto;
	margin-right: 10px;
}

form.login p.form-row input#rememberme{
	width: auto;
	margin-right: 10px;
}

form.login p.lost_password{
	display: inline-block;
}

form.login p.lost_password a{
	color: #38393a;
}

p.form-row label{
	display: inline-block;
}

div.clear{
	display: none;
}

@media screen and (max-width: 830px){
	form.login p.form-row {
	    display: block;
	    padding: 0.5em 0;
	}
	
}


</style>

<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {
	return;
}

$info_message  = apply_filters( 'woocommerce_checkout_login_message', __( 'Returning customer?', 'woocommerce' ) );
wc_print_notice( $info_message, 'notice' );
?>

<?php
	woocommerce_login_form(
		array(
			'message'  => __( 'If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.', 'woocommerce' ),
			'redirect' => wc_get_page_permalink( 'checkout' ),
			'hidden'   => true
		)
	);
?>
