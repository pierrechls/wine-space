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
	background-color: #b7a56d;
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
    padding: 1rem;
    text-align: center;
}

form.login p label{
	margin: 1rem;
}


form.login p.form-row{
	display: block;
}

form.login p.form-row.form-row-first, form.login p.form-row.form-row-last {
	display: inline-block;
}

@media screen and (max-width: 60em){
	form.login p label{
		display: block;
	}
	form.login p.form-row.form-row-first, form.login p.form-row.form-row-last {
	    display: block;
	    padding: 0.5em 0;
	}
}

form.login p.form-row input[type="submit"]{
	margin: 1rem auto;
	display: block;
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
			'message'  => __( '', 'woocommerce' ),
			'redirect' => wc_get_page_permalink( 'checkout' ),
			'hidden'   => true
		)
	);
?>
