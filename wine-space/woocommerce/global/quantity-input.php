<?php
/**
 * Product quantity inputs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<style>

	.quantity {
		text-align: center;
	}
	
	.quantity input {
		text-align: center;
		padding: 1rem 0;
	}

	.quantity span {
	    display: inline-block;
	    width: 2rem;
	    text-align: center;
	    background: #000;
	    cursor: pointer;
	    padding: 0;
	    color: #FFF;
	    font-weight: 800;
	    margin: 0 0.4rem;
	    border-radius: 1rem;
	}
	
</style>

<div class="quantity spin"><span>&ndash;</span><input type="number" pattern="\d*" step="<?php echo esc_attr( $step ); ?>" <?php if ( is_numeric( $min_value ) ) : ?>min="<?php echo esc_attr( $min_value ); ?>"<?php endif; ?> <?php if ( is_numeric( $max_value ) ) : ?>max="<?php echo esc_attr( $max_value ); ?>"<?php endif; ?> name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php _ex( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>" class="input-text qty text" size="4" /><span>+</span></div>