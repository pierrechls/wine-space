<?php
/**
 * Checkout billing information form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */
?>

<style>
form.checkout.woocommerce-checkout .col-left, form.checkout.woocommerce-checkout .col-right{
	width: 49%;
    display: inline-block;
    vertical-align: top;
}


@media only screen and (max-width: 60em){
	form.checkout.woocommerce-checkout .col-left, form.checkout.woocommerce-checkout .col-right{
		width: 100%;
	    display: block;
	    vertical-align: top;
	}

	form.checkout.woocommerce-checkout .col-right{
		margin: auto !important;
		margin-top: 6em !important;
	    border-left: none !important;
	    border-top: 2px solid #b7a56d;
	    padding-top: 3em !important;
	    padding-left: 0 !important;
	}
}

</style>

<div class="woocommerce-billing-fields">
	<?php if ( WC()->cart->ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

		<h3><?php _e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php else : ?>

		<!-- <h3><?php _e( 'Billing Details', 'woocommerce' ); ?></h3> -->
		<h3><?php _e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>
	
	<div class="col-left">
	
	<?php $itemNumber = 0; ?>

	<?php foreach ( $checkout->checkout_fields['billing'] as $key => $field ) : ?>

		<?php $itemNumber++; ?>
		<?php if($itemNumber <= 5) { woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );} ?>

	<?php endforeach; ?>
	
	</div>
	
	<div class="col-right">

	<?php $itemNumber = 0; ?>

	<?php foreach ( $checkout->checkout_fields['billing'] as $key => $field ) : ?>

		<?php $itemNumber++; ?>
		<?php if($itemNumber > 5) { woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );} ?>

	<?php endforeach; ?>
	
	</div>

	<?php do_action('woocommerce_after_checkout_billing_form', $checkout ); ?>

	<?php if ( ! is_user_logged_in() && $checkout->enable_signup ) : ?>

		<?php if ( $checkout->enable_guest_checkout ) : ?>

			<p class="form-row form-row-wide create-account">
				<input class="input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true) ?> type="checkbox" name="createaccount" value="1" /> <label for="createaccount" class="checkbox"><?php _e( 'Create an account?', 'woocommerce' ); ?></label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( ! empty( $checkout->checkout_fields['account'] ) ) : ?>

			<div class="create-account">

				<p><?php _e( 'Create an account by entering the information below. If you are a returning customer please login at the top of the page.', 'woocommerce' ); ?></p>

				<?php foreach ( $checkout->checkout_fields['account'] as $key => $field ) : ?>

					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

				<?php endforeach; ?>

				<div class="clear"></div>

			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>

	<?php endif; ?>
</div>
