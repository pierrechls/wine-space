<?php
/**
 * Edit address form
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $current_user;

$page_title = ( $load_address === 'billing' ) ? __( 'Billing Address', 'woocommerce' ) : __( 'Shipping Address', 'woocommerce' );

get_currentuserinfo();

?>

<style>

	.bp-header__main {
		display: none;
	}

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
    
    @media screen and (max-width: 60em){
	
		#primary h1 {
			padding: 10rem 1rem 3rem 1rem;
			text-align: center;
		}	
	
	}
    
	abbr[title] {
	    border-bottom: none;
	    color: #a18e38;
	    padding-right: 10px;
	}
	label{
		padding-right: 10px;
	}
</style>

<?php wc_print_notices(); ?>

<?php if ( ! $load_address ) : ?>

	<?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php else : ?>

<div class="myaccount-content">

	<form method="post">

		<h3><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title ); ?></h3>

		<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

		<?php foreach ( $address as $key => $field ) : ?>

			<?php woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : $field['value'] ); ?>

		<?php endforeach; ?>

		<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

		<p>
			<input type="submit" class="button" name="save_address" value="<?php _e( 'Save Address', 'woocommerce' ); ?>" />
			<?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
			<input type="hidden" name="action" value="edit_address" />
		</p>

	</form>
	
</div>

<?php endif; ?>
