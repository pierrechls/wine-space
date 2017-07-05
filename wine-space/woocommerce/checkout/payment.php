<?php
/**
 * Checkout Payment Section
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
	.payment_box{
		display: none;
	}
	div#payment.woocommerce-checkout-payment img{
		height: 50px;
		width: auto;
	}
	a.about_paypal{
		display: none;
	}
	p.form-row.terms{
		text-align: center;
	    padding: 1em !important;
	    margin-top: 3em;
	    text-transform: uppercase;
	    background-color: #C7C7C7;
	}
	p.form-row.terms label a{
		color: #38393a;
	    font-weight: 800;
	    font-style: normal;
	    padding: 0 5px;
	    display: inline-block;
	}
	p.form-row.terms input{
		display: inline-block;
	    width: auto;
	    height: auto;
	}
	
	div#payment ul.payment_methods.methods {
		margin: 4rem auto;
		padding: 1rem 0;
	}
	
	div#payment ul.payment_methods.methods li {
		margin: 1rem auto;
	}
	
	div#payment ul.payment_methods.methods li img:first-child {
	    margin-left: 2rem;
	}
	
	div#payment ul.payment_methods.methods li img {
		display: inline-block;
	    margin: 0 auto;
	    margin-left: 0.3rem;
	    height: 5rem;
	    width: auto;
	}
	
</style>

<?php if ( ! is_ajax() ) : ?>
	<?php do_action( 'woocommerce_review_order_before_payment' ); ?>
<?php endif; ?>

<div id="payment" class="woocommerce-checkout-payment">

	<h3 style="background-color: #b7a56d; color: #fff; padding: 2rem; margin: 6rem auto 1rem auto;">Moyen de paiement</h3>

	<?php if ( WC()->cart->needs_payment() ) : ?>
	<ul class="payment_methods methods">
		<?php
			if ( ! empty( $available_gateways ) ) {
				foreach ( $available_gateways as $gateway ) {
					wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
				}
			} else {
				if ( ! WC()->customer->get_country() ) {
					$no_gateways_message = __( 'Please fill in your details above to see available payment methods.', 'woocommerce' );
				} else {
					$no_gateways_message = __( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' );
				}

				echo '<p>' . apply_filters( 'woocommerce_no_available_payment_methods_message', $no_gateways_message ) . '</p>';
			}
		?>
	</ul>
	<?php endif; ?>

	<div class="form-row place-order">

		<noscript><?php _e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ); ?><br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php _e( 'Update totals', 'woocommerce' ); ?>" /></noscript>

		<?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>

		<?php do_action( 'woocommerce_review_order_before_submit' ); ?>
		
		<?php if ( wc_get_page_id( 'terms' ) > 0 && apply_filters( 'woocommerce_checkout_show_terms', true ) ) : ?>
			<p class="form-row terms">
				<label for="terms" class="checkbox"><?php printf( __( 'I&rsquo;ve read and accept the <a href="%s" target="_blank">terms &amp; conditions</a>', 'woocommerce' ), esc_url( wc_get_page_permalink( 'terms' ) ) ); ?></label>
				<input type="checkbox" class="input-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); ?> id="terms" />
			</p>
		<?php endif; ?>
		
		<?php echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' ); ?>

		

		<?php do_action( 'woocommerce_review_order_after_submit' ); ?>

	</div>

	<div class="clear"></div>
</div>

<?php if ( ! is_ajax() ) : ?>
	<?php do_action( 'woocommerce_review_order_after_payment' ); ?>
<?php endif; ?>
