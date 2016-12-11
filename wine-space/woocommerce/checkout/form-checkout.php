<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<style>

	#primary{
		background-color: #fff;
	}
	
	#primary h1 {
	    background: #c4af78;
	    padding: 3.5rem 1rem;
	    color: #FFF;
	    margin: 0;
	    font-size: 2.5rem;
    }
    
    #primary h3 {
    	padding: 2rem 0;
    }
    
    #primary .myaccount-content {
	    padding: 1rem 2rem;
	    font-size: 1.7rem;
	    color: #000;
    }
    
    .bp-header__main {
	    display: none;
    }

header.entry-header{
	display: none;
}

.woocommerce-info{
	background-color: #a18e38;
	display: block;
	float: left;
    width: 100%;
    height: auto;
    padding: 1em;
    margin-top: -5px;
}

.woocommerce-info a.showcoupon{
	display: block;
    padding-top: 1em;
    cursor: pointer;
}

form.checkout.woocommerce-checkout{
	padding: 1em;
}

form.checkout.woocommerce-checkout .col2-set .col-1, form.checkout.woocommerce-checkout .col2-set .col-2{
	width: 49%;
    display: inline-block;
    vertical-align: top;
}

@media only screen and (max-width: 760px){
	form.checkout.woocommerce-checkout .col2-set .col-1, form.checkout.woocommerce-checkout .col2-set .col-2{
		width: 100%;
	    display: block;
	    vertical-align: top;
	}
	
	form.checkout.woocommerce-checkout .col2-set .col-2{
		margin: auto !important;
		margin-top: 6em !important;
	    border-left: none !important;
	    border-top: 2px solid #a18e38;
	    padding-top: 3em !important;
	    padding-left: 0 !important;
	}
}

form.checkout.woocommerce-checkout .col2-set .col-2{
	margin: auto;
    border-left: 2px solid #a18e38;
    padding-left: 6em;
}

p.form-row label {
    margin-right: 20px;
}

form.checkout.woocommerce-checkout h3{
	padding: 1em;
	font-size: 1.4em;
}

form.checkout.woocommerce-checkout p {
    padding: 0.3em 0em 0em 1em;
}

form.checkout.woocommerce-checkout input{
	display: block;
}

form.checkout.woocommerce-checkout textarea{
	display: block;
}

form.checkout.woocommerce-checkout abbr.required{
	border-bottom: none;
    color: #a18e38;
    font-weight: 800;
}

form.checkout.woocommerce-checkout input#ship-to-different-address-checkbox{
	display: inline-block;
    width: 1.4em;
    height: 1.4em;
    margin-left: 10px;
    vertical-align: top;
}

p.form-row.form-row-wide.create-account input.input-checkbox{
	width: auto;
	display: inline-block;
}

p.form-row.form-row-wide.create-account label.checkbox{
	margin-left: 10px;
}

h3#order_review_heading{
	background-color: #a18e38;
    color: #fff;
    margin-bottom: 10px;
}

table.shop_table.woocommerce-checkout-review-order-table td, table.shop_table.woocommerce-checkout-review-order-table th {
    text-align: center;
}

table.shop_table.woocommerce-checkout-review-order-table tr.cart-subtotal th, table.shop_table.woocommerce-checkout-review-order-table tr.cart-subtotal td{
	padding-top: 3em;
}

#payment.woocommerce-checkout-payment ul li{
	list-style: none;
}

#payment.woocommerce-checkout-payment ul li input{
	display: inline-block;
	width: auto;
	margin-right: 10px;
}

div#payment.woocommerce-checkout-payment div.form-row.place-order input[type="submit"]:hover {
    background-color: #ad993e;
}
div#payment.woocommerce-checkout-payment div.form-row.place-order input[type="submit"] {
    text-align: center;
    border: none;
    background-color: #a18e38;
    color: white;
    font-size: 16.5px;
    margin: 3em auto 1em auto;
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

@media only screen and (max-width: 480px){
	table.shop_table.woocommerce-checkout-review-order-table tr td:nth-of-type(1):before {
	    content: "Produit : ";
	}
	table.shop_table.woocommerce-checkout-review-order-table tr td:nth-of-type(2):before {
	    content: "Prix";
	}
	table.shop_table.woocommerce-checkout-review-order-table tr.cart-subtotal td:nth-of-type(1):before {
	    content: "";
	}
	table.shop_table.woocommerce-checkout-review-order-table tr.shipping td:nth-of-type(2):before {
	    content: "";
	}
	table.shop_table.woocommerce-checkout-review-order-table tr.shipping td:nth-of-type(1):before {
	    content: "";
	}
	table.shop_table.woocommerce-checkout-review-order-table tr.order-total td:nth-of-type(2):before {
	    content: "";
	}
	table.shop_table.woocommerce-checkout-review-order-table tr.order-total td:nth-of-type(1):before {
	    content: "";
	}
	
	table.shop_table.woocommerce-checkout-review-order-table tr.cart-subtotal, table.shop_table.woocommerce-checkout-review-order-table tr.shipping, table.shop_table.woocommerce-checkout-review-order-table tr.order-total{
		padding: 1em;
	}
	
	table.shop_table.woocommerce-checkout-review-order-table tbody{
		margin-bottom: 1em;
	}
	table.shop_table.woocommerce-checkout-review-order-table tr.cart-subtotal th, table.shop_table.woocommerce-checkout-review-order-table tr.cart-subtotal td{
		padding-top: 0;
	}
	
	table.shop_table.woocommerce-checkout-review-order-table tfoot tr td{
		padding-left: 0;
	}
	
	div#payment.woocommerce-checkout-payment{
		margin-top: 3em;
	}
}

</style>

<h1 class="woocommerce-title-user">Ma commande</h1>


<div class="myaccount-content" >
<?php

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

		<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

	<?php endif; ?>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

</div>
